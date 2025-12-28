<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Contact extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-contact',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'contact' => $this->getContactData(),
        ];
    }

    private function getContactData()
    {
        return [
            'hero' => $this->getHeroData(),
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
                $price[] = [
                    'number' => $row['number'] ?? '',
                    'label' => $row['label'] ?? '',
                ];
            }
        }

        return [
            'title' => $this->getAcfFieldSafe('hero_title', false, 'Contact'),
            'title_2' => $this->getAcfFieldSafe('hero_title_2', false, 'us'),
            'hero_bg_image' => $this->getAcfImageSafe(
                'hero_bg_image',
                false,
                'full',
                get_theme_file_uri('/resources/images/flower-bg-contact.png')
            ),
            'info_section' => $this->getAcfFieldSafe('info_section', false, 'Info'),
            'contact_no' => $this->getAcfFieldSafe('contact_no', false, '+44 742 8009 465'),
            'contact_no_2' => $this->getAcfFieldSafe('contact_no_2', false, '+44 784 6573 233'),
            'email' => $this->getAcfFieldSafe('email', false, 'info@yourdomain.com'),
            'address' => $this->getAcfFieldSafe('address', false, '123 Road Street <br> City, POST CODE'),
            'facebook_url' => $this->formatUrl($this->getAcfFieldSafe('facebook_url', false, 'www.facebook.com')),
            'instagram_url' => $this->formatUrl($this->getAcfFieldSafe('instagram_url', false, 'www.instagram.com')),
            'tiktok_url' => $this->formatUrl($this->getAcfFieldSafe('tiktok_url', false, 'www.tiktok.com')),
            'form_title' => $this->getAcfFieldSafe('form_title', false, "Leave a message"),
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
