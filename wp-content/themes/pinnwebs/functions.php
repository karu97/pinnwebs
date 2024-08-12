<?php
function my_dev_theme_setup() {
    // Add support for dynamic title tags
    add_theme_support('title-tag');

    // Register main menu
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'my-dev-theme'),
    ));

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_dev_theme_setup');

// Enqueue styles and scripts
function my_dev_theme_scripts() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_dev_theme_scripts');




function contact_btn () {
    ob_start ()
    ?>
    <a href="#contact" class="btn">Contact us</a>
    <?php
    return ob_get_clean(); 
}

function services_title_description() {
    ob_start();
    
    global $post;
    $srivice_description = get_post_meta($post->ID, 'srivice_description', true); 
    
    ?>
    <div class="about-text" data-aos="zoom-in-up">
        <h2><?php the_title(); ?></h2>
        <div class="exp-area">
        <p><?php echo esc_html($srivice_description); ?></p>
        </div>
    </div>    
    <?php
    
    return ob_get_clean(); 
}


function register_my_shortcodes() {
    add_shortcode('contact_btn', 'contact_btn');
    add_shortcode('services_title_description', 'services_title_description');
}
add_action('init', 'register_my_shortcodes');








