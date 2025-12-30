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
            'booking_button_text' => $this->getAcfFieldSafe('header_booking_button_text', 'option', 'Book Now'),
            'booking_button_url' => $this->formatUrl($this->getAcfFieldSafe('header_booking_button_url', 'option', '/booking')),

        ];
    }

    private function getFooterData()
    {
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
            'footer_copyright' => $this->getAcfFieldSafe('footer_copyright', 'option', '2025 Lumiere Essence Skincare and Aesthetic – D&amp;C with <i class="fa-solid fa-heart" style="color: #C49090;"></i> SLT Media'),
            'footer_privacy' => $this->getAcfFieldSafe('footer_privacy', 'option', 'Privacy Policy | T&amp;C'),
            'quick_links' => $this->getAcfFieldSafe('quick_links', 'option', 'Quick Links'),
            'pages' => [
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
            ],
            'contact' => $this->getAcfFieldSafe('contact', 'option', 'Contact'),
            'contact_phone_1' => $this->getAcfFieldSafe('contact_phone_1', 'option', '+44 742 8009 465'),
            'contact_phone_2' => $this->getAcfFieldSafe('contact_phone_2', 'option', '+44 784 6573 233'),
            'contact_email' => $this->getAcfFieldSafe('contact_email', 'option', 'info@yourdomain.com'),
            'contact_address' => $this->getAcfFieldSafe('contact_address', 'option', '123 Road Street <br> City, POST CODE'),

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
