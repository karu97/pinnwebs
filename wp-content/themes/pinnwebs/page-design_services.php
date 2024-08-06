<?php
/*
Template Name: Design Services
*/
get_header();
?>

<section class="services" id="services">
  <div class="center-text" data-aos="fade-down">
    <h2 class="custom-margin-60">My Web<span> Design </span> Services</h2>
  </div>

  <div class="services-content" data-aos="zoom-in-up">
    <?php $the_query = new WP_Query(array('post_type' => 'design_services', 'posts_per_page' => '100', 'post__not_in' => array($id), )); ?>
    <?php if (have_posts()):
      while ($the_query->have_posts()):
        $the_query->the_post(); ?>

        <?php
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
        $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

        $categories = get_the_category();

        ?>
        <div class="box">
          <img src=".<?php echo get_template_directory_uri(); ?>/img/s-1.svg" alt="">
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>">See More
            <i class="ri-arrow-right-line"></i>

          </a>
        </div>
      <?php endwhile; endif; ?>

  </div>
</section>

<section class="contact" id="contact">
  <div class="center-text" data-aos="fade-down">
    <h2>Contact<span> me</span></h2>
  </div>
  <div class="contact-form" data-aos="zoom-in">
    <form action="">
      <input type="text" placeholder="Your name" required>
      <input type="email" placeholder="Email Address..." required>
      <textarea name="" id="" cols="30" rows="10" placeholder="Write Message Here." required></textarea>
      <input type="submit" value="Send Message" class="send-btn">
    </form>
  </div>
</section>


<?php get_footer(); ?>