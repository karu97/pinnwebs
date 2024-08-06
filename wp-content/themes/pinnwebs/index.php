<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <h1><?php bloginfo('name'); ?></h1>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </nav>
        </div>
    </header>

    <div class="main-content container">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content();
            endwhile;
        else:
            echo '<p>No content found</p>';
        endif;
        ?>
    </div>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> My Dev Theme. All rights reserved.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>