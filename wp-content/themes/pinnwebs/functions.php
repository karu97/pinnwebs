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


// In your theme's functions.php
function my_hero_image_component () {
    ob_start(); // Start output buffering
    ?>
        <div class="card-container">
        <div class="card">
            <div class="img-content">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-miterlimit="2" stroke-linejoin="round" fill-rule="evenodd" clip-rule="evenodd"><path fill-rule="nonzero" d="m2 19v-14c0-.552.447-1 1-1 .542 0 4.418 2.028 9 2.028 4.593 0 8.456-2.028 9-2.028.55 0 1 .447 1 1v14c0 .553-.45 1-1 1-.544 0-4.407-2.028-9-2.028-4.582 0-8.458 2.028-9 2.028-.553 0-1-.448-1-1zm1.5-.791 6.449-7.691c.289-.344.879-.338 1.16.012 0 0 1.954 2.434 1.954 2.434l1.704-1.283c.319-.24.816-.168 1.054.154l4.679 6.335v-12.44c-1.58.58-4.819 1.798-8.5 1.798-3.672 0-6.918-1.218-8.5-1.799zm2.657-.834c1.623-.471 3.657-.903 5.843-.903 2.309 0 4.444.479 6.105.98l-3.041-4.117-1.065.802.275.344c.259.323.206.796-.117 1.054-.323.259-.795.207-1.054-.117l-2.591-3.236zm.698-9.534c-1.051 0-1.905.854-1.905 1.905s.854 1.904 1.905 1.904 1.904-.853 1.904-1.904-.853-1.905-1.904-1.905zm0 1.3c.333 0 .604.271.604.605 0 .333-.271.604-.604.604-.334 0-.605-.271-.605-.604 0-.334.271-.605.605-.605z"></path></svg>
            </div>
            <div class="content">
            <p class="heading">Card Hover</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipii
                    voluptas ten mollitia pariatur odit, ab
                    minus ratione adipisci accusamus vel est excepturi laboriosam magnam
                    necessitatibus dignissimos molestias.
                </p>
            </div>
        </div>
        </div>  
    <?php
    return ob_get_clean(); // Return the buffered content
}

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
    add_shortcode('my_hero_image_component', 'my_hero_image_component');
    add_shortcode('contact_btn', 'contact_btn');
    add_shortcode('services_title_description', 'services_title_description');
}
add_action('init', 'register_my_shortcodes');








