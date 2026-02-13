<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Treatments extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-treatments',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'treatments' => $this->getTreatmentsData(),
        ];
    }

    private function getTreatmentsData()
    {
        return [
            'hero' => $this->getHeroData(),
            'cta_section' => $this->getCtaSectionData(),
        ];
    }

    private function getHeroData()
    {

        $price_rows = $this->getAcfFieldSafe('price_rows', false, []);

        if (empty($price_rows)) {
            $price = [
                [
                    'title' => 'Face & Neck',
                    'services' => [
                        [
                            'text' => 'Treatment 1',
                            'price' => '£100',
                        ],
                        [
                            'text' => 'Treatment 2',
                            'price' => '£150',
                        ],
                        [
                            'text' => 'Treatment 3',
                            'price' => '£200',
                        ],
                    ]
                ],
                [
                    'title' => 'Body',
                    'services' => [
                        [
                            'text' => 'Treatment 1',
                            'price' => '£200',
                        ],
                        [
                            'text' => 'Treatment 2',
                            'price' => '£250',
                        ],
                        [
                            'text' => 'Treatment 3',
                            'price' => '£300',
                        ],
                    ]
                ],
            ];
        } else {
            $price = [];
            foreach ($price_rows as $row) {
                $services = [];
                if (!empty($row['services']) && is_array($row['services'])) {
                    foreach ($row['services'] as $service) {
                        $services[] = [
                            'text' => $service['text'] ?? '',
                            'price' => $service['price'] ?? '',
                        ];
                    }
                }

                $price[] = [
                    'title' => $row['title'] ?? '',
                    'services' => $services,
                ];
            }
        }

        return [
            'title' => $this->getAcfFieldSafe('hero_title', false, 'Treatments'),
            'title_2' => $this->getAcfFieldSafe('hero_title_2', false, 'prices'),
            'text' => $this->getAcfFieldSafe('hero_text', false, 'At Lumière Essence, treatments are performed using AlumierMD – a luxury, medical-grade cosmeceutical brand that combines science, safety and efficacy. Each protocol is individually tailored using clinically validated formulas to ensure the highest standard of skin therapy.'),
            'hero_bg_image' => $this->getAcfImageSafe(
                'hero_bg_image',
                false,
                'full',
                get_theme_file_uri('/resources/images/flowers-bg.png')
            ),
            'price' => $price,
        ];
    }

    private function getCtaSectionData()
    {
        return [
            'bg_image' => $this->getAcfImageSafe(
                'cta_bg_image',
                false,
                'full',
                get_theme_file_uri('/resources/images/mirror.png')
            ),
            'title' => $this->getAcfFieldSafe('cta_title', false, 'Ready to glow?'),
            'title_2' => $this->getAcfFieldSafe('cta_title_2', false, 'Take the first step'),
            'button_left_text' => $this->getAcfFieldSafe('cta_button_left_text', false, 'Contact Us'),
            'button_left_url' => $this->formatUrl($this->getAcfFieldSafe('cta_button_left_url', false, '/contact')),
            'button_right_text' => $this->getAcfFieldSafe('cta_button_right_text', false, 'Book Now'),
            'button_right_url' => $this->formatUrl($this->getAcfFieldSafe('cta_button_right_url', false, '/booking')),
        ];
    }


    /**
     * Format URL to ensure it's absolute or has protocol
     *
     * @param string $url
     * @return string
     */
    private function formatUrl($url)
    {
        if (empty($url)) {
            return $url;
        }

        // If it starts with /, treat as internal relative to home_url
        if (strpos($url, '/') === 0) {
            return \home_url($url);
        }

        // If it doesn't have a protocol and doesn't look like an anchor or mailto/tel
        if (!preg_match("~^(?:f|ht)tps?://~i", $url) && strpos($url, 'mailto:') !== 0 && strpos($url, 'tel:') !== 0 && strpos($url, '#') !== 0) {
            return 'https://' . $url;
        }

        return $url;
    }


    /**
     * Safe ACF field retrieval with fallback
     *
     * @param string $field_name
     * @param mixed $post_id
     * @param mixed $fallback
     * @return mixed
     */
    private function getAcfFieldSafe($field_name, $post_id = false, $fallback = null)
    {
        if (function_exists('get_field')) {
            $value = \get_field($field_name, $post_id);
            return !empty($value) ? $value : $fallback;
        }
        return $fallback;
    }

    /**
     * Safe ACF image retrieval with fallback
     *
     * @param string $field_name
     * @param mixed $post_id
     * @param string $size
     * @param string $fallback_url
     * @return string
     */
    private function getAcfImageSafe($field_name, $post_id = false, $size = 'full', $fallback_url = '')
    {
        if (function_exists('get_field')) {
            $image = \get_field($field_name, $post_id);

            if ($image) {
                if (is_array($image) && isset($image['url'])) {
                    return $image['url'];
                } elseif (is_string($image)) {
                    return wp_get_attachment_image_url($image, $size) ?: $image;
                } elseif (is_numeric($image)) {
                    return wp_get_attachment_image_url($image, $size) ?: $fallback_url;
                }
            }
        }
        return $fallback_url;
    }
}
