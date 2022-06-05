<?php /* Template Name: Hotel Deals */ ?>
<?php /* Template Post Type: hotel_deals */ ?>

<style>
  .accordion-button:not(.collapsed) {
    color: #e11d48 !important;
    background-color: #fff;
    -webkit-box-shadow: inset 0 -1px 0 #e5e7eb;
    box-shadow: inset 0 -1px 0 #e5e7eb;
  }
</style>

<?php get_header(); ?>
<main>

  <!-- Banner Section -->
  <?php get_template_part('/template-parts/hotel/banner/generic') ?>

  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 pb-12 lg:mb-6 px-0" aria-labelledby="contact-heading">
    <search-box-component country="CA" lang="en-US" active="hotel" url="https://secure.tripsupport.ca">
    </search-box-component>
  </section>

  <!-- Hotel Deals Cards -->

  <!-- Main Content -->
  <div class="mx-auto max-w-7xl bg-white">
    <section class="pb-12  relative overflow-hidden ">
      <div class="container">
        <!-- Page Specific Content goes here -->
        <?php switch ($post->post_name) {
          case 'hotels-in-australia':
            get_template_part('/template-parts/hotel/content/australia');
            break;
          case 'hotels-in-caribbean':
            get_template_part('/template-parts/hotel/content/caribbean');
            break;
          case 'domestic-hotels':
            get_template_part('/template-parts/hotel/content/domestic');
            break;
          case 'hotels-in-europe':
            get_template_part('/template-parts/hotel/content/europe');
            break;
          case 'hotels-in-middle-east':
            get_template_part('/template-parts/hotel/content/middle-east');
            break;
          case 'hotels-in-usa':
            get_template_part('/template-parts/hotel/content/usa');
            break;

          default:
            get_template_part('/template-parts/hotel/content/generic');
            break;
        } ?>

        <!-- FAQs -->
        <?php get_template_part('/template-parts/hotel/faqs/generic'); ?>
      </div>
  </div>
  </section>
  </div>

  <!-- Explore Links (internal pages) -->
  <?php get_template_part('/template-parts/hotel/explore/generic'); ?>


  <!-- Newsletter -->
  <?php get_template_part('/template-parts/global/newsletter') ?>
</main>

<?php get_footer() ?>
<div class="block sm:hidden bg-white border-t sticky bottom-0 left-0 right-0 z-10 pt-3 pb-2">
  <?php get_template_part('template/global/support') ?>
</div>