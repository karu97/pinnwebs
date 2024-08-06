<?php
get_header();

$image_one = get_field('image_one');
$srivice_description = get_field('srivice_description');
$image_two = get_field('image_two');
$technology_one = get_field('technology_one');
$technology_two = get_field('technology_two');
$technology_three = get_field('technology_three');
$technology_four = get_field('technology_four');
$technology_five = get_field('technology_five');
$technology_six = get_field('technology_six');

?>

<section class="about custom-margin-60 " id="about">
  <div class="about-img about-img-custom" data-aos="zoom-in-down">
    <img src="<?php echo $image_one; ?>">
  </div>
  <?php echo do_shortcode('[services_title_description]');?>
</section>

<section class="about " id="about">
  <div class="about-text" data-aos="zoom-in-up">
    <h2>Technologies </h2>
    <p class="exp custom-mb-5"><?php echo $technology_one; ?></p>
    <p class="exp custom-mb-5"><?php echo $technology_two; ?></p>
    <p class="exp custom-mb-5"><?php echo $technology_three; ?></p>
    <p class="exp custom-mb-5"><?php echo $technology_four; ?></p>
    <p class="exp custom-mb-5"><?php echo $technology_five; ?></p>
    <p class="exp custom-mb-5"><?php echo $technology_six; ?></p>
  </div>
  <div class="about-img about-img-custom" data-aos="zoom-in-down">
    <img src="<?php echo $image_two; ?>">
  </div>
</section>


<?php get_footer(); ?>