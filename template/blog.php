<?php /* Template Name: Blog */ ?>
<?php get_header() ?>
<main>
  <div class="bg-white">
    <?php get_template_part('template/blog/section-search') ?>
    <?php get_template_part('template/blog/blog-posts') ?>
    <?php get_template_part('template/global/newsletter') ?>
  </div>
</main>
<?php get_footer() ?>
<div class="block sm:hidden bg-white border-t sticky bottom-0 left-0 right-0 z-10 pt-3 pb-2">
  <?php get_template_part('template/global/shortcut') ?>
</div>