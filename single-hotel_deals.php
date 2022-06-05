<?php get_header(); ?>

<main>
  <!-- Banner -->
  <!-- title -->
  <?php $banner_title = get_post_meta(get_the_ID(), 'banner_title', true) ?>
  <!-- image fallback -->
  <?php $metabox_image = get_post_meta(get_the_ID(), 'banner_image', true); ?>
  <?php $featured_image = get_the_post_thumbnail_url( get_the_ID(), '1536x1024' ); ?>
  <?php $aws_image = "https://trip-support.s3.amazonaws.com/images/flights/flights-section.jpg" ?>
  <div class="relative bg-slate-900 -mt-1">
    <!-- mobile view -->
    <div class="block sm:hidden">
      <div class="block relative h-40 bg-white">
        <?php if(!empty($metabox_image)) { ?>
          <img class="w-full h-full object-cover" src="<?php echo $metabox_image ?>" alt="vacation deals">
        <?php } elseif (!empty($featured_image)) { ?>
          <img class="w-full h-full object-cover" src="<?php echo $featured_image ?>" alt="vacation deals">
        <?php } else { ?>
          <img class="w-full h-full object-cover" src="<?php echo $aws_image ?>" alt="vacation deals">
        <?php } ?>
        <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-slate-900 ">
        </div>
      </div>
      <div class="block relative mx-auto px-4 lg:px-0 pt-1 pb-8">
        <h1 class="mt-2 text-white text-xl font-extrabold tracking-wide ">
        <?php if(!empty($banner_title)) { ?>
          <?php echo $banner_title ?>
        <?php } else { ?>
          <?php the_title(); ?>
        <?php } ?>
        </h1>
      </div>
    </div>    
    <!-- desktop view -->
    <div class="hidden sm:block">
      <div class="block relative mx-auto px-4 lg:px-0 py-12 sm:max-w-7xl sm:py-20 md:py-28 lg:pb-44 lg:pt-24">
        <div class="md:mr-auto md:pr-10 w-full md:w-1/2">
          <p class="mt-2 text-white text-3xl font-extrabold sm:text-4xl">
          <?php if(!empty($banner_title)) { ?>
            <?php echo $banner_title ?>
          <?php } else { ?>
            <?php the_title(); ?>
          <?php } ?>
          </p>
        </div>
      </div>
      <div class="block relative h-56 bg-white sm:h-72 md:absolute md:right-0 md:top-0 md:h-full md:w-1/2">
        <?php if(!empty($metabox_image)) { ?>
          <img class="w-full h-full object-cover" src="<?php echo $metabox_image ?>" alt="vacation deals">
        <?php } elseif (!empty($featured_image)) { ?>
          <img class="w-full h-full object-cover" src="<?php echo $featured_image ?>" alt="vacation deals">
        <?php } else { ?>
          <img class="w-full h-full object-cover" src="<?php echo $aws_image ?>" alt="vacation deals">
        <?php } ?>
        <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-slate-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-92 xl:bg-gradient-to-r">
        </div>
      </div>
    </div>
  </div>

  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 pb-12 lg:mb-6 px-0" aria-labelledby="contact-heading">
    <search-box-component country="CA" lang="en-US" active="hotel" url="https://secure.tripsupport.ca">
    </search-box-component>
  </section>

  <!-- Hotels Content Section -->
  <!-- Main section -->
  <?php $main_heading = get_post_meta(get_the_ID(), 'hotels_main_heading', true); ?>
  <?php $main_description = get_post_meta(get_the_ID(), 'hotels_main_description', true); ?>


  <div class="mx-auto max-w-7xl bg-white">
    <section class="pb-12  relative overflow-hidden ">
      <div class="container">
        <div class="max-w-7xl mx-auto px-4 md:px-0 prose text-slate-900">

        <!-- main content -->
          <section class="relative overflow-hidden">
            <div class="text-slate-900 max-w-6xl">
              <h2 class="font-extrabold text-2xl lg:text-3xl mt-6">
                <?php echo $main_heading ?>
              </h2>
              <p class="text-tiny sm:text-base mb-1 text-justify">
                <?php echo $main_description ?>
              </p>
            </div>
          </section>

          <!-- images -->
          <!-- sub content image collage-->
          
          <!-- image -->
          <?php $image_one = get_post_meta(get_the_ID(), 'image_one', true); ?>
          <?php $image_two = get_post_meta(get_the_ID(), 'image_two', true); ?>
          <?php $image_three = get_post_meta(get_the_ID(), 'image_three', true); ?>
          <?php $image_four = get_post_meta(get_the_ID(), 'image_four', true); ?>
          <?php $image_five = get_post_meta(get_the_ID(), 'image_five', true); ?>
          <?php $image_six = get_post_meta(get_the_ID(), 'image_six', true); ?>

          <section class="overflow-hidden text-gray-700 my-0 lg:my-8">
            <div class="container py-2 mx-auto">
              <div class="flex flex-wrap -m-1 md:-m-2">
                <div class="flex-wrap w-1/2">
                  <div class="flex">
                    <?php if(!empty($image_one)) { ?>
                      <div class="sm:w-1/2 w-full">
                        <div class="w-full h-[200px] p-1.5">
                          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="<?php echo $image_one ?>" />
                        </div>
                      </div>
                    <?php } ?>
                    <?php if(!empty($image_two)) { ?>
                      <div class="hidden sm:block sm:w-1/2">
                        <div class="w-full h-[200px] p-1.5">
                          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="<?php echo $image_two ?>" />
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                  <?php if(!empty($image_three)) { ?>
                    <div class="w-full p-1.5 h-[300px]">
                      <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="<?php echo $image_three ?>" />
                    </div>
                  <?php } ?>
                </div>

                <div class="flex-wrap w-1/2">
                  <?php if(!empty($image_four)) { ?>
                    <div class="w-full p-1.5 h-[300px]">
                      <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="<?php echo $image_four ?>" />
                    </div>
                  <?php } ?>
                  <div class="flex">
                    <?php if(!empty($image_five)) { ?>
                      <div class="sm:w-1/2 w-full">
                        <div class="w-full h-[200px] p-1.5">
                          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="<?php echo $image_five ?>" />
                        </div>
                      </div>
                    <?php } ?>
                    <?php if(!empty($image_six)) { ?>
                      <div class="hidden sm:block sm:w-1/2">
                        <div class="w-full h-[200px] p-1.5">
                          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="<?php echo $image_six ?>" />
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Additiona sub heading and description -->
          <?php $hotels = get_post_meta(get_the_ID(), 'hotels_sub_content', true); ?>
          <?php if(!empty($hotels)) {
            foreach($hotels as $hotel) { ?> 
              <div class="flex-wrap space-y-3 mt-8 lg:mt-16 lg:mb-8 ">
                <div class="w-full">
                  <h2 class="text-xl tracking-tight font-extrabold text-slate-900 sm:text-2xl md:text-3xl">
                    <?php echo $hotel['hotels_sub_heading'] ?>
                  </h2>
                </div>
                <div class="prose max-w-7xl text-justify">
                  <?php echo $hotel['hotels_sub_description'] ?>
                </div>
              </div>
            <?php } ?>
          <?php } ?>

        </div>
      </div>
    </section>
  </div>
  
  <!-- FAQS Section -->
  <?php $faqs = get_post_meta(get_the_ID(), 'faq', true); ?>
  <?php if(!empty($faqs)) { ?>
    <div class="mx-auto max-w-7xl bg-white">
      <section class="relative overflow-hidden">
        <div class="container">
          <!-- FAQ Heading -->
          <div class="d-flex d-flex-wrap">
            <div class="w-full">
              <div class="mx-auto lg:mt-12 m-4 px-4 lg:px-0">
                <span class="font-normal text-tiny block text-rose-600">
                  FAQs
                </span>
                <h2 class="font-extrabold text-xl sm:text-3xl text-gray-900 mb-4">
                  Frequently Asked Questions
                </h2>
                <p class="sm:text-base text-tiny text-body-color">
                  See below for frequently asked questions.
                </p>
              </div>
            </div>
          </div>
          <!-- END FAQ heading -->
          <!-- BEGIN QUESTIONS-->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <?php if(!empty($faqs)) {
              foreach($faqs as $faq) { ?> 
                <div class="bg-gray-50 rounded p-4">
                  <h4 class="font-semibold mb-2">
                    <?php echo $faq['faq_question'] ?>
                  </h4>
                  <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">
                    <?php echo $faq['faq_answer'] ?>
                  </p>
                </div>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </section>
    </div>
  <?php } ?>

  <!-- Explore -->
  <?php 
  $explores = get_post_meta(get_the_ID(), 'explores_metabox', true);
  $destination = get_post_meta(get_the_ID(), 'destination_metabox', true);
  ?>
  <?php if (!empty($destination)) { ?>
    <div class="bg-gradient-to-r from-slate-900 to-blue-800">
      <div class="container xl:max-w-7xl mx-auto py-16 my-16 px-4 lg:px-0">
        <section class="relative pt-1 pb-4">
          <div class="text-left max-w-4xl">
            <div class="sm:flex sm:items-baseline sm:justify-between">
              <h2 class="text-xl tracking-tight font-extrabold text-white sm:text-2xl md:text-3xl">
                Explore More Flight Deals
              </h2>
            </div>
            <p class="text-tiny text-white sm:text-base md:text-base lg:mx-0 my-4 font-medium">
              Find the right flight for cheap with Trip Support
            </p>
          </div>
        </section>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-white">
          <?php if (!empty($destination)) {
            foreach ($destination as $dest) { ?>
              <a href="<?php echo $dest['destination_url'] ?>" class="h-10 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-lg hover:bg-rose-600">
                <div class="text-tiny"><?php echo $dest['destination_title'] ?></div>
              </a>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  <?php } ?>
  
  <!-- Newletter -->
  <div class="relative my-3 lg:my-12 bg-white">
    <div class="max-w-7xl mx-auto bg-white lg:bg-transparent">
      <div class="lg:grid lg:grid-cols-12">
        <div class="relative z-[3] lg:col-start-1 lg:row-start-1 lg:col-span-3 lg:py-0 lg:bg-transparent">
          <div class="absolute inset-x-0 h-1/2 bg-gray-50 lg:hidden" aria-hidden="true"></div>
          <div class="max-w-md mx-auto px-4 sm:max-w-3xl sm:px-6 lg:max-w-none lg:p-0">
            <div class="aspect-w-5 aspect-h-2 sm:aspect-w-3 sm:aspect-h-1 lg:aspect-w-1">
              <img class="object-cover object-center md:rounded-l-xl lg:shadow-2xl" src="https://trip-support.s3.amazonaws.com/images/home/subscribe.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="relative z-[1] bg-white lg:col-start-1 lg:row-start-1 lg:col-span-12 lg:rounded-xl lg:grid lg:grid-cols-10 lg:items-center shadow-xl">
          <div class="relative max-w-md mx-auto py-8 px-4 space-y-4 sm:max-w-3xl sm:py-16 sm:px-6 lg:max-w-none lg:p-0 lg:col-start-4 lg:col-span-6">
            <h2 class="text-2xl font-extrabold text-slate-900" id="join-heading">Sign up today. We’ve got deals to share!</h2>
            <p class="text-sm font-medium text-slate-900">Become a member and gain access to all of our great rates and savings. Sign up to get email updates on upcoming deals and events.
            </p>
            
            <?php echo do_shortcode('[contact-form-7 id="15923" title="newsletter"]') ?>
            <div class="text-sm text-slate-900 revue-form-footer">
              By subscribing, you agree with Trip Support's
              <a rel="nofollow" href="terms-conditions" class="text-slate-900 font-bold hover:underline">Terms & Conditions</a>
              and
              <a rel="nofollow" class="text-slate-900 font-bold hover:underline" href="privacy-policy">Privacy Policy</a>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
</main>
<?php get_footer() ?>