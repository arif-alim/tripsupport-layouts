<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <link rel="icon" href="<?php echo THEME_IMAGE . '/favicon.png' ?>" />
  <!-- disable auto zooming in input groups -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <?php wp_head() ?>
</head>

<body>
  <div class="bg-white">
    <header classn="relative overflow-hidden">
      <!-- Domain IP USA /CANADA -->
      <nav aria-label="Top" class="relative flex-col z-[2]">
        <?php echo do_shortcode('[trip_support_message]')  ?>
        <div class="bg-gray-900">
          <div class="covid max-w-7xl lg:mx-auto py-2 px-4 flex items-center justify-between">
            <div class="hidden lg:flex">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 text-slate-50 w-5 mr-2" width="100%" height="100%">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
              </svg>
              <span class="text-xz my-auto text-white">All air passengers must comply with COVID-19 travel and vaccination requirements imposed by the
                Government of Canada.</span>
            </div>

            <div class="flex flex-1 items-center justify-end space-x-6">
              <a href="javascript:void(0)" class="-m-3 p-3 flex items-center">
                <svg class="sm:hidden flex-shrink-0 h-4 w-4 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
                <a href="javascript:void(0)" class="ml-4 sm:text-xz text-xs font-medium text-white hover:text-gray-100">Check Covid-19 Restrictions</a></a>
            </div>
          </div>
        </div>
      </nav>
      <nav class="bg-white shadow relative z-10">
        <div class="max-w-7xl mx-auto py-2">
          <div class="d-flex flex-wrap justify-between items-center">
            <div class="flex pl-2 sm:pl-0">
              <a href="<?php echo home_url() ?>" class="flex-shrink-0 flex place-items-start">
                <img class="h-9 sm:h-11 w-auto" src="<?php echo THEME_IMAGE . '/logo.svg' ?>" alt="Trip Support Logo">
              </a>
              <div class="hidden lg:flex items-center gap-1 px-4">
                <div class="hidden md:ml-6 lg:flex md:space-x-8 main-menu">
                  <a href="<?php echo home_url() ?>/flights" class="<?php if (is_page('flights')) echo 'text-rose-600'; ?> text-tiny inline-flex items-center px-1 pt-1 sm:ml-4 hover:text-rose-600 text-gray-900 font-semibold">
                    Flights
                  </a>
                  <a href="<?php echo home_url() ?>/vacations" class="<?php if (is_page('vacations')) echo 'text-rose-600'; ?> text-tiny inline-flex items-center px-1 pt-1 sm:ml-4 hover:text-rose-600 text-gray-900 font-semibold">
                    Vacations
                  </a>
                  <a href="<?php echo home_url() ?>/hotels" class="<?php if (is_page('hotels')) echo 'text-rose-600'; ?> text-tiny inline-flex items-center px-1 pt-1 sm:ml-4 hover:text-rose-600 text-gray-900 font-semibold">
                    Hotels
                  </a>
                </div>
              </div>
            </div>

            <div class="inline-flex items-center py-2 text-sm text-gray-900 rounded-lg lg:hidden pr-4">
              <a href="tel:1-855-606-0606" class="text-pblue-900 hover:text-rose-600"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-auto mr-2" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="none" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg></a>

              <div class="outclick" style="display: contents">
                <div class="mx-2 relative">
                  <div>
                    <?php echo do_shortcode('[trip_support_login_mobile]') ?>
                  </div>
                  <div class="bg-white text-base z-50 py-2 list-none w-[100vw] rounded shadow-lg hidden">
                    <a href="flights" class="bg-pblue-50 border-rose-600 text-pblue-900 block pl-3 pr-4 py-2 border-l-4 text-tiny font-medium sm:pl-5 sm:pr-6">Profile</a>
                    <a href="vacations" class="border-transparent text-slate-900 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-tiny font-medium sm:pl-5 sm:pr-6">Settings</a>
                    <a href="vacations" class="border-transparent text-slate-900 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-tiny font-medium sm:pl-5 sm:pr-6">Sign out</a>
                  </div>
                </div>
              </div>

              <div class="outclick" style="display: contents">
                <button type="button" class="btn-menu-mobile inline-flex items-center justify-center ml-2 text-gray-900 hover:text-gray-700">
                  <span class="sr-only">Open main menu</span>

                  <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                  </svg>

                  <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>

                <div class="menu-mobile w-[100vw] mx-auto bg-white text-tiny font-medium z-30 float-left py-2 list-none text-left rounded shadow-xl hidden">
                  <div class="pt-2 pb-3 space-y-2">
                    <a href="<?php echo home_url() ?>/flights" class="<?php if (is_page('flights')) echo 'text-rose-700 border-rose-500 font-bold'; ?> bg-pblue-50 text-pblue-900 block pl-3 pr-4 py-2 border-l-4 text-tiny font-medium sm:pl-5 sm:pr-6">Flights</a>
                    <a href="<?php echo home_url() ?>/vacations" class="<?php if (is_page('vacations')) echo 'text-rose-700 border-rose-500 font-bold'; ?> bg-pblue-50 text-pblue-900 block pl-3 pr-4 py-2 border-l-4 text-tiny font-medium sm:pl-5 sm:pr-6">Vacations</a>
                    <a href="<?php echo home_url() ?>/hotels" class="<?php if (is_page('hotels')) echo 'text-rose-700 border-rose-500 font-bold'; ?> bg-pblue-50 text-pblue-900 block pl-3 pr-4 py-2 border-l-4 text-tiny font-medium sm:pl-5 sm:pr-6">Hotels</a>
                  </div>
                  <!-- Add Mobile Sign In / Registration Here -->

                </div>
              </div>
            </div>

            <div class="hidden lg:flex items-center gap-1 sm:gap-8 px-6">
              <div class="hidden flex-shrink-0 flex">
                <?php
                $languages = pll_the_languages(array(
                  'display_names_as' => 'name',
                  'hide_if_no_translation' => 1,
                  'raw' => true
                ));

                $output = '';
                // Checks if the $languages is not empty
                if (!empty($languages)) {

                  // Creates the $output variable with languages container
                  $output = '';

                  // Runs the loop through all languages
                  foreach ($languages as $language) {
                    //var_dump($language);

                    // Variables containing language data
                    $id = $language['id'];
                    $slug = $language['slug'];
                    $url = $language['url'];
                    $flag = $language['flag'];
                    $name = $language['name'];
                    $code = $language['locale'];
                    $current = $language['current_lang'] ? ' languages__item--current' : '';
                    $no_translation = $language['no_translation'];

                    // Checks if the page has translation in this language
                    if (!$no_translation) {
                      // Check if it's current language
                      if ($current) {
                        // Output the language in a <span> tag so it's not clickable
                        $output .= "";
                      } else {
                        // Output the language in an anchor tag
                        $output .= "<a href=\"$url\" class=\"text-slate-900 hover:text-rose-600 flex items-center\">
                                    <img src=\"$flag\" class=\"w-5 h-auto block flex-shrink-0\"/>
                                    <span class=\"ml-3 block text-tiny font-medium\">$name </span>
                                    <span class=\"sr-only\">, change language</span>
                                </a>";
                      }
                    }
                  }

                  $output .= '';
                }
                echo $output;
                ?>
              </div>

              <div class="flex-shrink-0">
                <a href="<?php echo home_url() ?>/contact-us" class="text-slate-900 hover:text-rose-600 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-5 mr-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                  </svg>

                  <span class="ml-2 block text-tiny font-semibold">Contact Us </span>
                  <span class="sr-only">contact us</span></a>
              </div>
              <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
              <div class="hidden md:ml-2 md:flex-shrink-0 md:flex md:items-center">
                <button type="button" class="hidden bg-white p-1 rounded-full text-gray-800 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pblue-500" data-collapse-toggle="user-profile">
                  <span class="sr-only">User login</span>

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#0f172a">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </button>

                <div class="outclick" style="display: contents">
                  <div class="mx-2 relative">
                    <div>
                      <?php echo do_shortcode('[trip_support_login_form_shortcode_new_design]') ?>
                    </div>
                    <div class="bg-white text-base z-40 float-left py-2 list-none text-left rounded shadow-lg w-56 hidden">
                      <a href="javascript:void(0)" class="block px-4 py-2 text-tiny font-medium text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                      <a href="javascript:void(0)" class="block px-4 py-2 text-tiny font-medium text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                      <a href="javascript:void(0)" class="block px-4 py-2 text-tiny font-medium text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>
</body>

</html>