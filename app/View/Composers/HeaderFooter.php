<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class HeaderFooter extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.header',
        'sections.footer',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'header' => $this->getHeaderData(),
            'footer' => $this->getFooterData(),
            'primary_menu_html' => wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'container'      => false,
                'echo'           => false,
                'fallback_cb'    => '__return_false',
                'items_wrap'     => '%3$s',
            ]),
        ];
    }

    private function getHeaderData()
    {
        return [
            'logo_image' => $this->getAcfImageSafe(
                'header_logo_image',
                'option',
                'full',
                get_theme_file_uri('/resources/images/footer.png')
            ),
            'languages' => $this->getLanguages(),
            'social_icons' => [
                [
                    'icon' => '<i class="fa-brands fa-facebook-f fa-sm"></i>',
                    'url' => $this->formatUrl($this->getAcfFieldSafe('header_facebook_url', 'option', 'www.facebook.com')),
                ],
                [
                    'icon' => '<i class="fa-brands fa-instagram fa-sm"></i>',
                    'url' => $this->formatUrl($this->getAcfFieldSafe('header_instagram_url', 'option', 'www.instagram.com')),
                ],
                [
                    'icon' => '<i class="fa-brands fa-tiktok fa-sm"></i>',
                    'url' => $this->formatUrl($this->getAcfFieldSafe('header_tiktok_url', 'option', 'www.tiktok.com')),
                ]
            ],
            'booking_button_text_pl' => $this->getAcfFieldSafe('header_booking_button_text_pl', 'option', 'Zamów teraz'),
            'booking_button_url_pl' => $this->formatUrl($this->getAcfFieldSafe('header_booking_button_url_pl', 'option', '/zamowienie')),
            'booking_button_text_en' => $this->getAcfFieldSafe('header_booking_button_text_en', 'option', 'Book Now'),
            'booking_button_url_en' => $this->formatUrl($this->getAcfFieldSafe('header_booking_button_url_en', 'option', '/booking')),

        ];
    }

    private function getLanguages()
    {
        if (!function_exists('pll_the_languages')) {
            return [];
        }

        $languages = \pll_the_languages([
            'raw' => true,
            'hide_if_empty' => false,
        ]);

        if (!is_array($languages)) {
            return [];
        }

        return array_map(function ($language) {
            return [
                'name' => $language['name'] ?? '',
                'slug' => isset($language['slug']) ? strtoupper($language['slug']) : '',
                'url' => $language['url'] ?? '',
                'is_current' => !empty($language['current_lang']),
                'flag_url' => !empty($language['custom_flag_url']) ? $language['custom_flag_url'] : ($language['flag'] ?? null),
            ];
        }, $languages);
    }

    private function getFooterData()
    {
        // Default fallback pages
        $default_pages_en = [
            [
                'title' => 'About Us',
                'url' => home_url('/about'),
            ],
            [
                'title' => 'Contact',
                'url' => home_url('/contact'),
            ],
            [
                'title' => 'Treatments',
                'url' => home_url('/treatments'),
            ]
        ];

        $default_pages_pl = [
            [
                'title' => 'O nas',
                'url' => home_url('/about'),
            ],
            [
                'title' => 'Kontakt',
                'url' => home_url('/contact'),
            ],
            [
                'title' => 'Zabiegi',
                'url' => home_url('/treatments'),
            ]
        ];

        // Process English quick links
        $quick_links_en = $this->getAcfFieldSafe('quick_links_repeater_en', 'option', []);
        $processed_quick_links_en = [];

        if (!empty($quick_links_en) && is_array($quick_links_en)) {
            foreach ($quick_links_en as $quick_link) {
                if (is_array($quick_link)) {
                    $processed_quick_links_en[] = [
                        'title' => isset($quick_link['title']) ? $quick_link['title'] : '',
                        'url' => isset($quick_link['url']) ? $quick_link['url'] : '',
                    ];
                }
            }
        }

        if (empty($processed_quick_links_en)) {
            $processed_quick_links_en = $default_pages_en;
        }

        // Process Polish quick links
        $quick_links_pl = $this->getAcfFieldSafe('quick_links_repeater_pl', 'option', []);
        $processed_quick_links_pl = [];

        if (!empty($quick_links_pl) && is_array($quick_links_pl)) {
            foreach ($quick_links_pl as $quick_link) {
                if (is_array($quick_link)) {
                    $processed_quick_links_pl[] = [
                        'title' => isset($quick_link['title']) ? $quick_link['title'] : '',
                        'url' => isset($quick_link['url']) ? $quick_link['url'] : '',
                    ];
                }
            }
        }

        if (empty($processed_quick_links_pl)) {
            $processed_quick_links_pl = $default_pages_pl;
        }

        return [
            'footer_logo_image' => $this->getAcfImageSafe(
                'footer_logo_image',
                'option',
                'full',
                get_theme_file_uri('/resources/images/footer.png')
            ),
            'social_icons' => [
                [
                    'icon' => '<i class="fa-brands fa-facebook-f fa-sm"></i>',
                    'url' => $this->formatUrl($this->getAcfFieldSafe('header_facebook_url', 'option', 'www.facebook.com')),
                ],
                [
                    'icon' => '<i class="fa-brands fa-instagram fa-sm"></i>',
                    'url' => $this->formatUrl($this->getAcfFieldSafe('header_instagram_url', 'option', 'www.instagram.com')),
                ],
                [
                    'icon' => '<i class="fa-brands fa-tiktok fa-sm"></i>',
                    'url' => $this->formatUrl($this->getAcfFieldSafe('header_tiktok_url', 'option', 'www.tiktok.com')),
                ]
            ],
            'footer_line_image' => $this->getAcfImageSafe(
                'footer_line_image',
                'option',
                'full',
                get_theme_file_uri('/resources/images/footer-line.png')
            ),
            'contact_phone_1' => $this->getAcfFieldSafe('contact_phone_1', 'option', '+44 742 8009 465'),
            'contact_phone_2' => $this->getAcfFieldSafe('contact_phone_2', 'option', '+44 784 6573 233'),
            'contact_email' => $this->getAcfFieldSafe('contact_email', 'option', 'info@yourdomain.com'),
            'footer_copyright_en' => $this->getAcfFieldSafe('footer_copyright_en', 'option', '2025 Lumiere Essence Skincare and Aesthetic – D&amp;C with <i class="fa-solid fa-heart" style="color: #C49090;"></i> SLT Media'),
            'footer_privacy_en' => $this->getAcfFieldSafe('footer_privacy_en', 'option', 'Privacy Policy | T&amp;C'),
            'quick_links_en' => $this->getAcfFieldSafe('quick_links_en', 'option', 'Quick Links'),
            'pages_en' => $processed_quick_links_en,
            'contact_en' => $this->getAcfFieldSafe('contact_en', 'option', 'Contact'),
            'contact_address_en' => $this->getAcfFieldSafe('contact_address_en', 'option', '123 Road Street <br> City, POST CODE'),
            'footer_copyright_pl' => $this->getAcfFieldSafe('footer_copyright_pl', 'option', '2025 Lumiere Essence Skincare and Aesthetic – D&amp;C with <i class="fa-solid fa-heart" style="color: #C49090;"></i> SLT Media'),
            'footer_privacy_pl' => $this->getAcfFieldSafe('footer_privacy_pl', 'option', 'Privacy Policy | T&amp;C'),
            'quick_links_pl' => $this->getAcfFieldSafe('quick_links_pl', 'option', 'Szybkie linki'),
            'pages_pl' => $processed_quick_links_pl,
            'contact_pl' => $this->getAcfFieldSafe('contact_pl', 'option', 'Kontakt'),
            'contact_address_pl' => $this->getAcfFieldSafe('contact_address_pl', 'option', '123 Road Street <br> City, POST CODE'),
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
