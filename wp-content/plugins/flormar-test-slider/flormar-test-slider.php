<?php
/*
Plugin Name: Flormar Test Slider
Description: WordPress плагін для відображення адаптивного слайдера товарів WooCommerce із фільтрацією за ціною.
Version: 1.0.0
Author: Vitaliy
*/

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(__FILE__) . 'includes/flormar-slider-functions.php';

add_shortcode('flormar-test-slider', 'flormar_test_slider_shortcode');