<?php

namespace CHT\frontend;

use CHT\admin\CHT_Admin_Base;
use CHT\admin\CHT_Social_Icons;

require_once CHT_ADMIN_INC . '/class-admin-base.php';
require_once CHT_ADMIN_INC . '/class-social-icons.php';

class CHT_Frontend extends CHT_Admin_Base
{
    /**
     * CHT_Frontend constructor.
     */
    public function __construct()
    {
        $this->socials = CHT_Social_Icons::get_instance()->get_icons_list();
        if (wp_doing_ajax()) {
            add_action('wp_ajax_choose_social', array($this, 'choose_social_handler'));
            add_action('wp_ajax_remove_social', array($this, 'remove_social_handler'));
            add_action('wp_ajax_add_token', array($this, 'add_token'));
            add_action('wp_ajax_del_token', array($this, 'del_token'));
        }

        add_action('wp_enqueue_scripts', array($this, 'front_styles'));
        add_action('wp_enqueue_scripts', array($this, 'front_scripts'));
        add_action('wp_footer', array($this, 'insert_widget'));
    }

    /**
     * Function add token
     */
    public function add_token()
    {
        check_ajax_referer('cht_nonce_ajax', 'nonce_code');
        $token = (!empty($_POST['token'])) ? sanitize_text_field($_POST['token']) : null;

        if ($token !== null) {
            if ($this->is_pro($token)) {
                update_option('cht_license_key', $token, 'no');
                echo 'true';
                wp_die();
            }
        }
        echo '';
        wp_die();

    }

    /**
     * Function add token
     */
    public function del_token()
    {
        check_ajax_referer('cht_nonce_ajax', 'nonce_code');
        if (!$this->is_pro()) {
            update_option('cht_license_key', '', '');
        }
        echo '';
        wp_die();

    }

    /**
     *
     */
    public function choose_social_handler()
    {
        check_ajax_referer('cht_nonce_ajax', 'nonce_code');
        $social = (!empty($_POST['social'])) ? sanitize_text_field($_POST['social']) : null;
        $version = (!empty($_POST['version'])) ? sanitize_text_field($_POST['version']) : '';

        if ($social !== null) {
            foreach ($this->socials as $item) {
                if ($item['slug'] == $social) {
                    break;
                }
            }

            if (!$item) {
                return;
            }

            // $token =  ($this->is_pro()) ? 'pro' : 'free';

            $social_opt = get_option('cht_social_' . $social);
            if (empty($social_opt)) {
                $social_opt = [
                    'value' => '',
                    'is_mobile' => 'checked',
                    'is_desktop' => 'checked'
                ];
            } else {
                $social_opt['is_desktop'] = isset($social_opt['is_desktop']) ? $social_opt['is_desktop'] : '';
                $social_opt['is_mobile'] = isset($social_opt['is_mobile']) ? $social_opt['is_mobile'] : '';
            }

            $html = '';

            $html .= '<div class="channels-selected__item ' . esc_attr($version) . ' available">';
            $html .= '<div class="icon icon-md active" data-title="' . esc_attr($this->del_space($social)) . '">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" >';
            $html .= $item['svg'];
            $html .= '</svg>';
            $html .= '</div>';
            $html .= '<div class="channels__input-box">';
            $html .= '<input type="text" class="channels__input" id="' . esc_attr($social) . '" name="cht_social_' . esc_attr($social) . '[value]" value="' . esc_attr($social_opt['value']) . '">';
            $html .= '<button class="btn-cancel" data-social="' . esc_attr($social) . '">
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="15.6301" height="2.24494" rx="1.12247" transform="translate(2.26764 0.0615997) rotate(45)" fill="white"/>
                                    <rect width="15.6301" height="2.24494" rx="1.12247" transform="translate(13.3198 1.649) rotate(135)" fill="white"/>
                                </svg>
                            </button>';
            $html .= '</div>';
            $html .= '<label class="channels__view" for="' . str_replace(' ', '_', esc_attr($this->del_space($social))) . 'Desktop">';
            $html .= '<input type="checkbox" class="channels__view-check js-chanel-icon js-chanel-desktop" data-type="' . strtolower(esc_attr($this->del_space($social))) . '" id="' . esc_attr($social) . 'Desktop" name="cht_social_' . esc_attr($social) . '[is_desktop]" value="checked" ' . $social_opt['is_desktop'] . ' >';
            $html .= '<span class="channels__view-txt">Desktop</span>';
            $html .= '</label>';
            $html .= '<label class="channels__view" for="' . str_replace(' ', '_', esc_attr($this->del_space($social))) . 'Mobile">';
            $html .= '<input type="checkbox" class="channels__view-check js-chanel-icon js-chanel-mobile" data-type="' . strtolower(esc_attr($this->del_space($social))) . '" id="' . esc_attr($social) . 'Mobile" name="cht_social_' . esc_attr($social) . '[is_mobile]" value="checked" ' . $social_opt['is_mobile'] . ' >';
            $html .= '<span class="channels__view-txt">Mobile</span>';
            $html .= '</label>';
            $html .= '<div class="input-example">' . __('For example:', 'chaty');
            $html .= esc_html($item['example']);
            $html .= '</div>';
            $html .= '</div>';

            echo json_encode($html);
        }


        wp_die();
    }

    public function remove_social_handler()
    {
        // $social = isset($_POST['social']) ? $_POST['social'] : '';
        // if ($social) {
        //     $res = delete_option('cht_social_' . $social);

        //     echo $res;
        // }
        wp_die();
    }

    public function front_styles()
    {
        // wp_enqueue_style( 'cht_widget_style', plugins_url('../assets/css/cht-widget.css', __FILE__));
    }

    public function front_scripts()
    {
        wp_enqueue_script('cht_widget_scripts', plugins_url('../assets/js/cht-scripts-front.min.js', __FILE__), array('jquery'));
//        wp_enqueue_script('cht_widget_server_scripts', plugins_url('../assets/js/server.js', __FILE__), array('jquery'));

    }

    public function int_arr()
    {

        $social = get_option('cht_numb_slug');
        $social = explode(",", $social);

        $arr = array();
        foreach ($social as $key_soc):
            foreach ($this->socials as $key => $social) :
                if ($social['slug'] != $key_soc) {
                    continue;
                }
                if ($value = get_option('cht_social_' . $social['slug'])) {
                    if (!empty($value['value']) && (wp_is_mobile() ? isset($value['is_mobile']) : isset($value['is_desktop']))) {
                        $arr[mb_strtolower($social['slug'])] = $value['value'];
                    }
                };
            endforeach;
        endforeach;
        return json_encode($arr);
    }

    public function insert_widget()
    {
        if ($this->canInsertWidget()):
            include_once CHT_DIR . '/views/widget.php';
        endif;

    }

    private function canInsertWidget()
    {
        return get_option('cht_active') && $this->checkChannels();
    }

    private function checkChannels()
    {
        $social = explode(",", get_option('cht_numb_slug'));
        $res = false;
        foreach ($social as $name) {
            $value = get_option('cht_social_' . strtolower($name));
            $res = $res || !empty($value['value']) && (wp_is_mobile() ? isset($value['is_mobile']) : isset($value['is_desktop']));
        }
        return $res;
    }
}

return new CHT_Frontend();
