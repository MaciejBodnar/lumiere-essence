<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class About extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-about',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'about' => $this->getAboutData(),
        ];
    }

    private function getAboutData()
    {
        return [
            'hero' => $this->getHeroData(),
            'hero_2' => $this->getHero2Data(),
            'statistics' => $this->getStatisticsData(),
            'info' => $this->getInfoData(),
            'cta_section' => $this->getCtaSectionData(),
        ];
    }

    private function getHeroData()
    {
        return [
            'title' => $this->getAcfFieldSafe('hero_title', false, 'About'),
            'title_2' => $this->getAcfFieldSafe('hero_title_2', false, 'us'),
            'hero_image' => $this->getAcfImageSafe(
                'hero_image',
                false,
                'full',
                get_theme_file_uri('/resources//images/woman-leaf.png')
            ),
            'hero_bg_image' => $this->getAcfImageSafe(
                'hero_bg_image',
                false,
                'full',
                get_theme_file_uri('/resources/images/flower-bg-about.png')
            ),
            'hero_description' => $this->getAcfFieldSafe('hero_description', false, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'),
        ];
    }

    private function getHero2Data()
    {
        return [
            'title' => $this->getAcfFieldSafe('hero_2_title', false, 'About'),
            'title_2' => $this->getAcfFieldSafe('hero_2_title_2', false, 'us'),
            'hero_image' => $this->getAcfImageSafe(
                'hero_2_image',
                false,
                'full',
                get_theme_file_uri('/resources//images/woman-leaf.png')
            ),
            'hero_description' => $this->getAcfFieldSafe('hero_2_description', false, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'),
        ];
    }

    private function getStatisticsData()
    {
        return [
            'content' => $this->getAcfFieldSafe('statistics_content', false, 'Lumière Essence - There is no other skin like yours.'),
        ];
    }

    private function getInfoData()
    {
        $paragraphs = $this->getAcfFieldSafe('info_paragraph', false, []);

        if (empty($paragraphs)) {
            return [
                'title' => 'Lumiere Essence',
                'content' => [
                    [
                        'content' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',
                    ],
                    [
                        'content' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
                    ]
                ]
            ];
        }

        return [
            'title' => $this->getAcfFieldSafe('info_title', false, 'Lumiere Essence'),
            'content' => $paragraphs,
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
