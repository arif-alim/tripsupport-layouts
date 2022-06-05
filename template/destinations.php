<?php /* Template Name: Destinations */ ?>
<?php /* Template Post Type: destinations */ ?>

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
  <?php get_template_part('/template-parts/destination/banner/generic') ?>

  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 pb-12 lg:mb-6 px-0" aria-labelledby="contact-heading">
    <search-box-component country="CA" lang="en-US" active="vacation" url="https://secure.tripsupport.ca">
    </search-box-component>
  </section>

  <!-- Main Content -->
  <div class="mx-auto max-w-7xl bg-white">
    <section class="relative overflow-hidden p-4">
      <div class="container">
        <!-- Page Specific Content goes here -->
        <?php switch ($post->post_name) {
          case 'aruba':
            get_template_part('/template-parts/destination/content/aruba');
            break;
          case 'cuba':
            get_template_part('/template-parts/destination/content/cuba');
            break;
          case 'dominican-republic':
            get_template_part('/template-parts/destination/content/dominican');
            break;
          case 'hawaii':
            get_template_part('/template-parts/destination/content/hawaii');
            break;
          case 'jamaica':
            get_template_part('/template-parts/destination/content/jamaica');
            break;
          case 'mexico':
            get_template_part('/template-parts/destination/content/mexico');
            break;

          default:
            get_template_part('/template-parts/destination/content/generic');
            break;
        } ?>
      </div>
    </section>
  </div>
  <!-- FAQs -->
  <?php get_template_part('/template-parts/destination/faqs/generic'); ?>

  <!-- Explore Links (internal pages) -->
  <?php get_template_part('/template-parts/destination/explore/generic'); ?>

  <!-- Newsletter -->
  <?php get_template_part('/template-parts/global/newsletter') ?>
</main>

<?php get_footer() ?>