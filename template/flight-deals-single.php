<?php /* Template Name: Flight Deals Internal */ ?>
<?php /* Template Post Type: flight_deals */ ?>

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
  <?php get_template_part('/template-parts/flight/banner/generic') ?>

  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 pb-12 lg:mb-6 px-0" aria-labelledby="contact-heading">
    <search-box-component country="CA" lang="en-US" active="flight" url="https://secure.tripsupport.ca">
    </search-box-component>
  </section>


  <!-- Main Content -->
  <div class="mx-auto max-w-7xl bg-white">
    <section class="relative overflow-hidden px-4">
      <div class="container">
        <!-- Page Specific Content goes here -->
        <?php switch ($post->post_name) {
          case 'flights-to-nice':
            get_template_part('/template-parts/flight/internal-pages/content/nice');
            break;
          case 'flights-to-bordeaux':
            get_template_part('/template-parts/flight/internal-pages/content/bordeaux');
            break;
          case 'flights-to-marseille':
            get_template_part('/template-parts/flight/internal-pages/content/marseille');
            break;
          case 'flights-to-toulouse':
            get_template_part('/template-parts/flight/internal-pages/content/toulouse');
            break;
          case 'flights-to-ahmedabad':
            get_template_part('/template-parts/flight/internal-pages/content/ahmedabad');
            break;
          case 'flights-to-aruba':
            get_template_part('/template-parts/flight/internal-pages/content/aruba');
            break;
          case 'flights-to-vancouver':
            get_template_part('/template-parts/flight/internal-pages/content/vancouver');
            break;
          case 'flights-to-toronto':
            get_template_part('/template-parts/flight/internal-pages/content/toronto');
            break;
          case 'flights-to-calgary':
            get_template_part('/template-parts/flight/internal-pages/content/calgary');
            break;
          case 'flights-to-montreal':
            get_template_part('/template-parts/flight/internal-pages/content/montreal');
            break;
          case 'flights-to-ottawa':
            get_template_part('/template-parts/flight/internal-pages/content/ottawa');
            break;
          case 'flights-to-winnipeg':
            get_template_part('/template-parts/flight/internal-pages/content/winnipeg');
            break;
          case 'flights-to-halifax':
            get_template_part('/template-parts/flight/internal-pages/content/halifax');
            break;
          case 'flights-to-saskatoon':
            get_template_part('/template-parts/flight/internal-pages/content/saskatoon');
            break;
          case 'flights-to-hong-kong':
            get_template_part('/template-parts/flight/internal-pages/content/hongkong');
            break;
          case 'flights-to-milan':
            get_template_part('/template-parts/flight/internal-pages/content/milan');
            break;
          case 'flights-to-germany':
            get_template_part('/template-parts/flight/internal-pages/content/germany');
            break;
          case 'flights-to-mumbai':
            get_template_part('/template-parts/flight/internal-pages/content/mumbai');
            break;
          case 'flights-to-bangalore':
            get_template_part('/template-parts/flight/internal-pages/content/bangalore');
            break;
          case 'flights-to-calcutta':
            get_template_part('/template-parts/flight/internal-pages/content/calcutta');
            break;
          case 'flights-to-goa':
            get_template_part('/template-parts/flight/internal-pages/content/goa');
            break;

          default:
            get_template_part('/template-parts/flight/internal-pages/content/generic');
            break;
        } ?>


        <?php get_template_part('/template-parts/flight/internal-pages/faqs/generic'); ?>

      </div>
    </section>
  </div>
  <!-- Explore -->
  <?php get_template_part('/template-parts/flight/internal-pages/explore/generic') ?>
  <!-- Newsletter -->
  <?php get_template_part('/template-parts/global/newsletter') ?>
</main>

<?php get_footer() ?>