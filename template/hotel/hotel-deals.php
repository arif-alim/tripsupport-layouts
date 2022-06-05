<div class="mx-auto max-w-7xl py-6 px-4">
  <!-- Heading -->
  <section class="relative mb-6">
    <div class="text-left">
      <div class="sm:flex sm:items-baseline sm:justify-between">
        <h2 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
          Trending Hotel Destinations
        </h2>
      </div>
      <p class="mt-2 text-md text-slate-800 sm:mt-3 sm:text-md sm:max-w-prose md:mt-3 md:text-md lg:mx-0">
        Explore destinations currently popular with travelers across Canada.
      </p>
    </div>
  </section>
  <section class="relative" aria-labelledby="contact-heading">
    <div class="mt-4">
      <div class="-mx-4 flex overflow-x-auto sm:mx-0">
        <div class="flex-auto px-4 border-b border-gray-200 sm:px-0">
          <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
            <li class="mr-2">
              <button id="tab1" class="tab-link-active tab-link inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold" role="tab" type="button">
                <img src="https://trip-support.s3.amazonaws.com/flags/canada.svg" alt="canadian flag" class="w-5 mr-2" />
                Canada
              </button>
            </li>
            <li class="mr-2">
              <button id="tab2" class="tab-link inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold" role="tab" type="button">
                <img src="https://trip-support.s3.amazonaws.com/flags/usa.svg" alt="usa flag" class="w-5 mr-2" />
                United States
              </button>
            </li>
            <li class="mr-2">
              <button id="tab3" class="tab-link inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold" role="tab" type="button">
                <img src="https://trip-support.s3.amazonaws.com/flags/spain.svg" alt="spain flag" class="w-5 mr-2" />
                Spain
              </button>
            </li>
            <li class="mr-2">
              <button id="tab4" class="tab-link inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold" role="tab" type="button">
                <img src="https://trip-support.s3.amazonaws.com/flags/china.svg" alt="china flag" class="w-5 mr-2" />
                China
              </button>
            </li>
            <li class="mr-2">
              <button id="tab5" class="tab-link inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold" role="tab" type="button">
                <img src="https://trip-support.s3.amazonaws.com/flags/italy.svg" alt="italy flag" class="w-5 mr-2" />
                Italy
              </button>
            </li>
            <li class="mr-2">
              <button id="tab6" class="tab-link inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold" role="tab" type="button">
                <img src="https://trip-support.s3.amazonaws.com/flags/turkey.svg" alt="turkey flag" class="w-5 mr-2" />
                Turkey
              </button>
            </li>
            <li class="mr-2">
              <button id="tab7" class="tab-link inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold" role="tab" type="button">
                <img src="https://trip-support.s3.amazonaws.com/flags/france.svg" alt="france flag" class="w-5 mr-2" />
                France
              </button>
            </li>

          </ul>
        </div>
      </div>

      <!-- content -->
      <div>
        <div data-tab="tab1" class="tab-link-body tab-link-body-active">
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'canada'">
            <?php get_template_part('template/hotel/country/canada') ?>
          </div>
        </div>
        <div data-tab="tab2" class="tab-link-body">
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'usa'">
            <?php get_template_part('template/hotel/country/usa') ?>
          </div>
        </div>
        <div data-tab="tab3" class="tab-link-body">
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'spain'">
            <?php get_template_part('template/hotel/country/spain') ?>
          </div>
        </div>
        <div data-tab="tab4" class="tab-link-body">
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'china'">
            <?php get_template_part('template/hotel/country/china') ?>
          </div>
        </div>
        <div data-tab="tab5" class="tab-link-body">
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'italy'">
            <?php get_template_part('template/hotel/country/italy') ?>
          </div>
        </div>
        <div data-tab="tab6" class="tab-link-body">
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'turkey'">
            <?php get_template_part('template/hotel/country/turkey') ?>
          </div>
        </div>
        <div data-tab="tab7" class="tab-link-body">
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'france'">
            <?php get_template_part('template/hotel/country/france') ?>
          </div>
        </div>
      </div>

    </div>

  </section>
</div>


<script>
  jQuery('.tab-link').click(function() {
    const tab_link_id = jQuery(this).attr('id');
    jQuery('.tab-link-body').removeClass('tab-link-body-active');
    jQuery('.tab-link').removeClass('tab-link-active');
    jQuery(this).addClass('tab-link-active');
    jQuery('div[data-tab="' + tab_link_id + '"]').addClass('tab-link-body-active');
  });
</script>
<style>
  .tab-link-body {
    display: none;
  }

  .tab-link-body-active {
    display: block;
  }

  .tab-link-active {
    --tw-text-opacity: 1;
    color: rgb(225 29 72 / var(--tw-text-opacity));
    --tw-border-opacity: 1;
    border-color: rgb(225 29 72 / var(--tw-border-opacity));
    border-bottom-width: 2px;
    border-style: solid;
  }
</style>