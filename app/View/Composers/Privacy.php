<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Privacy extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-privacy',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'privacy' => $this->getPrivacyData(),
        ];
    }

    private function getPrivacyData()
    {
        return [
            'title' => $this->getAcfFieldSafe('privacy_title', false, 'Welcome to our Privacy Policy'),
            'content' => $this->getAcfFieldSafe('privacy_content', false, '
  <p> — Your privacy is critically important to us.</p>
  <p>It is Lumiere Essence policy to respect your privacy regarding any information we may collect while operating our website. This Privacy Policy applies to Lumiere Essence (hereinafter, “us”, “we”, or “Lumiere Essence“). We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy (“Privacy Policy”) to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.</p>
  <p>This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>
  <br><p><strong>Website Visitors</strong></p><br>
  <p>Like most website operators, Lumiere Essence collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. Lumiere Essence purpose in collecting non-personally identifying information is to better understand how Lumiere Essence visitors use its website. From time to time, Lumiere Essence may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p>
  <p><strong>Gathering of Personally-Identifying Information</strong></p>
  <p>Certain visitors to Lumiere Essence websites choose to interact with Lumiere Essence ways that require Lumiere Essence to gather personally-identifying information. The amount and type of information that Lumiere Essence gathers depends on the nature of the interaction.</p>
  <br><p><strong>Security</strong></p><br>
  <p>The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>
  <br><p><strong>Advertisements</strong></p><br>
  <p>Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by Lumiere Essence and does not cover the use of cookies by any advertisers.</p>
  <p><strong>Links To External Sites</strong></p>
  <p>Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party’s site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit.</p>
  <p>We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites, products or services.</p>
  <br><p><strong>Aggregated Statistics</strong></p><br>
  <p>Lumiere Essence may collect statistics about the behavior of visitors to its website. Lumiere Essence may display this information publicly or provide it to others. However, Lumiere Essence does not disclose your personally-identifying information.</p>
  <br><p><strong>Cookies</strong></p><br>
  <p>To enrich and perfect your online experience, Lumiere Essence uses “Cookies”, similar technologies and services provided by others to display personalized content, appropriate advertising and store your preferences on your computer.</p>
  <p>A cookie is a string of information that a website stores on a visitor’s computer, and that the visitor’s browser provides to the website each time the visitor returns. Lumiere Essence uses cookies to help Lumiere Essence identify and track visitors and their website access preferences. Lumiere Essence visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using Lumiere Essence websites, with the drawback that certain features of Lumiere Essence’s websites may not function properly without the aid of cookies.</p>
  <p>By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to Lumiere Essence‘ use of cookies.</p>
  <br><p><strong>Privacy Policy Changes</strong></p><br>
  <p>Although most changes are likely to be minor, Lumiere Essence may change its Privacy Policy from time to time, and in Lumiere Essence sole discretion. Lumiere Essence encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p>
  '),
            'image' => $this->getAcfImageSafe(
                'privacy-bg_image',
                false,
                'full',
                get_theme_file_uri('/resources/images/flower-bg-contact.png')
            ),
        ];
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
