<?php
// Recommended way to include parent theme styles.
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme style
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );

    // Enqueue jQuery from WordPress
    // This will ensure that jQuery is loaded from the WordPress version rather than the CDN
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap JavaScript from CDN after jQuery
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js', array('jquery'), null, true);
}

// Override theme default specification for product # per row
function loop_columns() {
    return 4; // 4 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);

// Start code to show four products in the related product section
add_filter('woocommerce_output_related_products_args', 'jk_related_products_args', 20);
function jk_related_products_args($args) {
    $args['posts_per_page'] = 4; // 4 related products
    $args['columns'] = 2; // Arranged in 2 columns
    return $args;
}
