<?php
/*
Template Name: Portfolio
*/
get_header();
?>

<section class="portfolio" id="portfolio">
  <div class="center-text" data-aos="fade-down">
    <h2>My <span>Portfolio</span></h2>
  </div>

  <div class="Portfolio-content" data-aos="zoom-in-up">
  <?php $the_query = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => '100', 'post__not_in' => array($id), )); ?>
      <?php if ($the_query->have_posts()):
        while ($the_query->have_posts()):
          $the_query->the_post(); ?>

          <?php
          $thumbnail_id = get_post_thumbnail_id();
          $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
          $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

          $categories = get_the_category();
          ?>
    <div class="row">
              <?php
                 if ( has_post_thumbnail() ) {
					        $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
				      ?>
          <img src="<?php echo $attachment_image; ?>" alt="">
          <?php } ?>  
          <div class="main-row">
            <div class="row-text">
              <h5><?php the_title(); ?></h5>
            </div>
            <div class="row-icon">
              <i class="ri-github-fill"></i>
            </div>
          </div>
          <h4><?php the_excerpt(); ?></h4>
        </div>
      <?php endwhile; endif; ?>
      <?php wp_reset_postdata(); ?>  <!-- Important to reset post data after a custom query -->
    </div>
  </div>
</section>

<section class="contact" id="contact">
  <div class="center-text" data-aos="fade-down">
    <h2>Contact <span>me</span></h2>
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