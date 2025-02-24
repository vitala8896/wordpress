<?php
if (!defined('ABSPATH')) {
    exit;
}

function flormar_test_slider_shortcode($atts) {
    $atts = shortcode_atts(array(
        'max-price' => '',
        'min-price' => '',
    ), $atts, 'flormar-test-slider');

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1,
    );

    if (!empty($atts['min-price']) || !empty($atts['max-price'])) {
        $meta_query = array();
        
        if (!empty($atts['min-price'])) {
            $meta_query[] = array(
                'key' => '_price',
                'value' => floatval($atts['min-price']),
                'compare' => '>=',
                'type' => 'NUMERIC',
            );
        }
        
        if (!empty($atts['max-price'])) {
            $meta_query[] = array(
                'key' => '_price',
                'value' => floatval($atts['max-price']),
                'compare' => '<=',
                'type' => 'NUMERIC',
            );
        }

        if (!empty($meta_query)) {
            $args['meta_query'] = $meta_query;
        }
    }

    $products = new WP_Query($args);

    if (!$products->have_posts()) {
        return '<p>Товари не знайдено.</p>';
    }

    ob_start();
    ?>
    <div class="flormar-slider-container">     
        <button id="custom-prev">❮</button>
        <button id="custom-next">❯</button>   
        <div class="flormar-slider">
            <?php while ($products->have_posts()) : $products->the_post(); 
                $product = wc_get_product(get_the_ID());
                $price = $product->get_price();
                $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                $title = get_the_title();
            ?>
            <div class="flormar-slide">
                
                <div class="flormar-slide-inner">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
                    <h3><?php echo esc_html($title); ?></h3>
                    <p><?php echo wc_price($price); ?></p>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}


add_action('wp_enqueue_scripts', 'flormar_test_slider_enqueue_assets');
function flormar_test_slider_enqueue_assets() {
    wp_enqueue_script('jquery'); 
    wp_enqueue_style('flormar-slider-style', plugin_dir_url(__FILE__) . '../assets/css/flormar-slider.css', array(), '1.0.0');
    wp_enqueue_script('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
    wp_enqueue_style('slick-slider-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
    wp_enqueue_style('slick-slider-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1');
    wp_enqueue_script('flormar-slider-init', plugin_dir_url(__FILE__) . '../assets/js/flormar-slider.js', array('jquery', 'slick-slider'), '1.0.0', true);
}