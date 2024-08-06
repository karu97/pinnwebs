<?php
/*
Template Name: Home Page
*/
get_header();


?>

<section class="about custom-margin-60" id="about">
  <div class="about-text" data-aos="zoom-in-up">
    <h2>Hi, Therer</h2>
    <div class="exp-area">
      <p class="exp">
      <p>Welcome to Pinnacle Web Solutions. We specialize in creating exceptional websites that drive success. Let’s build
      something amazing together.</p>
      </p>
    </div>
    <div class="social">
      <a href="#"><i class="ri-facebook-fill"></i></a>
      <a href="#"><i class="ri-instagram-fill"></i></a>
      <a href="#"><i class="ri-twitter-fill"></i></a>
      <a href="#"><i class="ri-youtube-fill"></i></a>
    </div>
    <div class="main-btn">
      <?php echo do_shortcode('[contact_btn]');?>
      <a href="https://wa.me/94771703811" target="_blank" class="btn btn2">WhatsApp Now</a>
    </div>  
  </div>
  <div class="about-img" data-aos="zoom-in-down">
    <?php echo do_shortcode('[my_hero_image_component]');?>
  </div>

</section>


<section class="about" id="about">
  <div class="about-img" data-aos="zoom-in-down">
    <img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg">
  </div>
  <div class="about-text" data-aos="zoom-in-up">
    <h2>I am Praveen Karunanayake <span> <br>Designer</span>
      & Full Stack Web Developer</h2>
    <div class="exp-area">
      <p class="exp">
        Experience
        <span>3 Years</span>
      </p>

      <p class="exp">
        Speciality:
        <span>Full Stack Development, Web Design, Freelance Projects</span>
      </p>
      <p class="exp">
        Address:
        <span>Gampaha. Sri Lanka</span>
      </p>

      <p class="exp">
        Email:
        <span>karunanayake234@gmail.com</span>
      </p>

      <p class="exp">
        Phone:
        <a href="https://wa.me/94771703811"><span>+94 77 170 38 11</span></a>
      </p>

      <p class="exp">
        Freeolance:
        <span>availble</span>
      </p>
    </div>
    <a href="<?php bloginfo('url'); ?>/" class="btn">View All Projects</a>
  </div>

</section>

<section class="services" id="services">
  <div class="center-text" data-aos="fade-down">
    <h2><span>Full-Stack Web Development Services</span> </h2>
  </div>
  <div class="services-content" data-aos="zoom-in-up">
    <?php $the_query = new WP_Query(array('post_type' => 'services', 'posts_per_page' => '6', 'post__not_in' => array($id), )); ?>
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
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>/">See More
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
      <?php endwhile; endif; ?>
  </div>
  <div class="caro-container">
          <div class="carousel">
            <div class="carousel__track">
                <div class="carousel__slide"><img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="Logo 1"></div>
                <div class="carousel__slide"><img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="Logo 2"></div>
                <div class="carousel__slide"><img src="<?php echo get_template_directory_uri(); ?>/img/5.png"></div>
                <div class="carousel__slide"><img src="<?php echo get_template_directory_uri(); ?>/img/5.png"></div>
                <div class="carousel__slide"><img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="Logo 5"></div>
                <!-- Repeat logos to create the infinite effect -->
                <div class="carousel__slide"><img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="Logo 1"></div>
                <div class="carousel__slide"><img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="Logo 2"></div>
                <div class="carousel__slide"><img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="Logo 3"></div>
                <div class="carousel__slide"><img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="Logo 4"></div>
                <div class="carousel__slide"><img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="Logo 5"></div>
            </div>
        </div>
      </div>
  <div class="custom-btn"> 
    <a href="<?php bloginfo('url'); ?>/services" class="btn">View All Web Development Services</a>
  </div>
</section>



<section class="services padding-top-0" id="services">
  <div class="center-text" data-aos="fade-down">
    <h2><span>Web Design Services</span> </h2>
  </div>
  <div class="services-content" data-aos="zoom-in-up">
    <?php $the_query = new WP_Query(array('post_type' => 'design_services', 'posts_per_page' => '6', 'post__not_in' => array($id), )); ?>
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
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>">See More
            <i class="ri-arrow-right-line"></i>

          </a>
        </div>
      <?php endwhile; endif; ?>
  </div>
  <div class="custom-btn">
    <a href="<?php bloginfo('url'); ?>/design-services" class="btn">View All Web Design Services</a>
  </div>
</section>

<section class="services padding-top-0" id="services">
  <div class="center-text" data-aos="fade-down">
    <h2><span>Additional Services</span> </h2>
  </div>
  <div class="services-content" data-aos="zoom-in-up">
    <?php $the_query = new WP_Query(array('post_type' => 'other_serices', 'posts_per_page' => '3', 'post__not_in' => array($id), )); ?>
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
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>">See More
            <i class="ri-arrow-right-line"></i>

          </a>
        </div>
      <?php endwhile; endif; ?>
  </div>
</section>


<section class="portfolio" id="portfolio">
  <div class="center-text" data-aos="fade-down">
    <h2>My <span>Portfolio</span></h2>
  </div>

  <div class="Portfolio-content" data-aos="zoom-in-up">
    <div class="row">
      <img src=".<?php echo get_template_directory_uri(); ?>/img/port-1.jpg" alt="">
      <div class="main-row">
        <div class="row-text">
          <h5>Website Design</h5>
        </div>
        <div class="row-icon">
          <i class="ri-github-fill"></i>
        </div>
      </div>
      <h4>Website Development For Dark X</h4>
    </div>
    <div class="row">
      <img src=".<?php echo get_template_directory_uri(); ?>/img/port-2.jpg" alt="">
      <div class="main-row">
        <div class="row-text">
          <h5>Website Design</h5>
        </div>
        <div class="row-icon">
          <i class="ri-github-fill"></i>
        </div>
      </div>
      <h4>Website Development For Dark X</h4>
    </div>
    <div class="row">
      <img src=".<?php echo get_template_directory_uri(); ?>/img/port-3.jpg" alt="">
      <div class="main-row">
        <div class="row-text">
          <h5>Website Design</h5>
        </div>
        <div class="row-icon">
          <i class="ri-github-fill"></i>
        </div>
      </div>
      <h4>Website Development For Dark X</h4>
    </div>
    <div class="row">
      <img src=".<?php echo get_template_directory_uri(); ?>/img/port-4.jpg" alt="">
      <div class="main-row">
        <div class="row-text">
          <h5>Website Design</h5>
        </div>
        <div class="row-icon">
          <i class="ri-github-fill"></i>
        </div>
      </div>
      <h4>Website Development For Dark X</h4>
    </div>
    <div class="row">
      <img src=".<?php echo get_template_directory_uri(); ?>/img/port-5.jpg" alt="">
      <div class="main-row">
        <div class="row-text">
          <h5>Website Design</h5>
        </div>
        <div class="row-icon">
          <i class="ri-github-fill"></i>
        </div>
      </div>
      <h4>Website Development For Dark X</h4>
    </div>
    <div class="row">
      <img src=".<?php echo get_template_directory_uri(); ?>/img/port-6.jpg" alt="">
      <div class="main-row">
        <div class="row-text">
          <h5>Website Design</h5>
        </div>
        <div class="row-icon">
          <i class="ri-github-fill"></i>
        </div>
      </div>
      <h4>Website Development For Dark X</h4>
    </div>
  </div>

</section>

<section class="contact" id="contact">
  <div class="center-text" data-aos="fade-down">
    <h2>Contact<span>me</span></h2>
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

  <script>

  </script>