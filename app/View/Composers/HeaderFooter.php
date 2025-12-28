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
        'partials.mobile-nav',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'social_links' => $this->getField('social_links', 'option'),
            'booking_url' => $this->getField('booking_url', 'option'),
            'booking_text' => $this->getField('booking_text', 'option', 'Booking'),
            'header_logo' => $this->getLogoImage(),
            'site_tagline' => $this->getField('site_tagline', 'option'),
            'footer_logo' => $this->getField('footer_logo', 'option'),
            'footer_copyright' => $this->getField('footer_copyright', 'option'),
            'contact_phone_1' => $this->getField('contact_phone_1', 'option', '+44 742 8009 465'),
            'contact_phone_2' => $this->getField('contact_phone_2', 'option', ' +44 784 6573 233'),
            'contact_email' => $this->getField('contact_email', 'option', 'info@yourdomain.com'),
            'contact_address' => $this->getField('contact_address', 'option', '123 Road Street <br>City, POST CODE'),
            'primary_navigation' => $this->primaryNavigation(),
            'primary_menu_html' => wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'container'      => false,
                'echo'           => false,
                'fallback_cb'    => '__return_false',
                'menu_class'     => 'hidden mt-8 md:flex space-x-8 text-[#7b6f69] text-sm uppercase tracking-[0.25em]',
            ]),
        ];
    }

    /**
     * Safely retrieve ACF field.
     *
     * @param string $field
     * @param mixed $id
     * @param mixed $default
     * @return mixed
     */
    private function getField($field, $id = null, $default = null)
    {
        if (function_exists('get_field')) {
            $value = \get_field($field, $id);
            return $value ?: $default;
        }
        return $default;
    }

    /**
     * Returns the primary navigation.
     *
     * @return array
     */
    public function primaryNavigation()
    {
        if (\has_nav_menu('primary_navigation')) {
            $menu_items = \wp_get_nav_menu_items(\get_nav_menu_locations()['primary_navigation']);

            if ($menu_items) {
                global $wp;
                $current_url = \home_url(\add_query_arg([], $wp->request));

                foreach ($menu_items as $item) {
                    $item->active = ($item->url === $current_url) || ($item->url === $current_url . '/');
                }
                return $menu_items;
            }
        }

        return [];
    }

    /**
     * Get logo image URL from ACF or fallback
     *
     * @return array
     */
    private function getLogoImage()
    {
        $default = [
            'url' => \get_theme_file_uri('/resources/images/footer.png'),
            'alt' => \get_bloginfo('name', 'display'),
        ];

        if (function_exists('get_field')) {
            $logo_field = \get_field('header_logo', 'option') ?: \get_field('header_logo_image', 'option');

            if (!empty($logo_field)) {
                // Handle different ACF image field return types
                if (is_array($logo_field) && isset($logo_field['url'])) {
                    return $logo_field;
                } elseif (is_numeric($logo_field)) {
                    $image_url = \wp_get_attachment_image_url($logo_field, 'full');
                    $image_alt = \get_post_meta($logo_field, '_wp_attachment_image_alt', true);
                    if ($image_url) {
                        return [
                            'url' => $image_url,
                            'alt' => $image_alt ?: $default['alt'],
                        ];
                    }
                } elseif (is_string($logo_field)) {
                    return [
                        'url' => $logo_field,
                        'alt' => $default['alt'],
                    ];
                }
            }
        }

        // Fallback to default logo
        return $default;
    }
}
