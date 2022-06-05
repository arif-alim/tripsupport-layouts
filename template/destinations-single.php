<?php /* Template Name: Destinations Internal */ ?>
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
  <section class="relative max-w-7xl -mt-12 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 px-0 md:px-4 pb-12 lg:mb-6" aria-labelledby="contact-heading">
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
            get_template_part('/template-parts/destination/internal-pages/content/aruba');
            break;
          case 'cabarete':
            get_template_part('/template-parts/destination/internal-pages/content/cabarete');
            break;
          case 'cancun':
            get_template_part('/template-parts/destination/internal-pages/content/cancun');
            break;
          case 'cayo-coco':
            get_template_part('/template-parts/destination/internal-pages/content/cayo-coco');
            break;
          case 'cayo-santa-maria':
            get_template_part('/template-parts/destination/internal-pages/content/cayo-santa-maria');
            break;
          case 'central-america':
            get_template_part('/template-parts/destination/internal-pages/content/central-america');
            break;
          case 'costa-rica':
            get_template_part('/template-parts/destination/internal-pages/content/costa-rica');
            break;
          case 'cozumel':
            get_template_part('/template-parts/destination/internal-pages/content/cozumel');
            break;
          case 'cuba':
            get_template_part('/template-parts/destination/internal-pages/content/cuba');
            break;
          case 'dominican-republic':
            get_template_part('/template-parts/destination/internal-pages/content/dominican');
            break;
          case 'havana':
            get_template_part('/template-parts/destination/internal-pages/content/havana');
            break;
          case 'holguin':
            get_template_part('/template-parts/destination/internal-pages/content/holguin');
            break;
          case 'la-romana':
            get_template_part('/template-parts/destination/internal-pages/content/la-romana');
            break;
          case 'mexico':
            get_template_part('/template-parts/destination/internal-pages/content/mexico');
            break;
          case 'playa-del-carmen':
            get_template_part('/template-parts/destination/internal-pages/content/playa-del-carmen');
            break;
          case 'puerto-plata':
            get_template_part('/template-parts/destination/internal-pages/content/puerto-plata');
            break;
          case 'puerto-vallarta':
            get_template_part('/template-parts/destination/internal-pages/content/puerto-vallarta');
            break;
          case 'punta-cana':
            get_template_part('/template-parts/destination/internal-pages/content/punta-cana');
            break;
          case 'riviera-maya':
            get_template_part('/template-parts/destination/internal-pages/content/riviera-maya');
            break;
          case 'samana':
            get_template_part('/template-parts/destination/internal-pages/content/samana');
            break;
          case 'santo-domingo':
            get_template_part('/template-parts/destination/internal-pages/content/santo-domingo');
            break;
          case 'varadero':
            get_template_part('/template-parts/destination/internal-pages/content/varadero');
            break;

          default:
            get_template_part('/template-parts/destination/internal-pages/content/generic');
            break;
        } ?>

        <!-- FAQs -->
        <?php get_template_part('/template-parts/destination/internal-pages/faqs/generic'); ?>
      </div>
    </section>
  </div>

  <!-- Explore -->
  <?php get_template_part('/template-parts/destination/internal-pages/explore/generic') ?>

  <!-- Newsletter -->
  <?php get_template_part('/template-parts/global/newsletter') ?>
</main>

<?php get_footer() ?>