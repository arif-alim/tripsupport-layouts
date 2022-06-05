<?php $thisPage = "Flights"; ?>
<?php /* Template Name: Flight */ ?>
<?php get_header() ?>
<main>
  <?php get_template_part('template/flight/section-search') ?>
  <?php get_template_part('template/flight/popular-flight-deals') ?>
  <?php get_template_part('template/global/blog-posts') ?>
  <?php get_template_part('template/global/newsletter') ?>
</main>
<?php get_footer() ?>