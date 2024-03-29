<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * Author: Arif Alim
 */
?>

<?php get_header(); ?>

<!-- This example requires Tailwind CSS v2.0+ -->
<!--
  This example requires updating your template:

  ```
  <html class="h-full">
  <body class="h-full">
  ```
-->
<main class="min-h-full bg-cover bg-top sm:bg-top" style="background-image: url('https://trip-support.s3.amazonaws.com/images/other/404.jpg')">
  <div class="max-w-7xl mx-auto px-4 py-16 text-center sm:px-6 sm:py-24 lg:px-8 lg:py-64">
    <p class="text-sm font-extrabold text-black text-opacity-50 uppercase tracking-wide">404 error</p>
    <h1 class="mt-2 text-4xl font-extrabold text-slate-900 tracking-tight sm:text-5xl">Page doesn't Exist</h1>
    <div class="mt-6">
      <a href="<?php echo home_url() ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-bold"> Go to Homepage </a>
    </div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <!-- <div class="flex justify-center mt-2">
      <span class="px-2 text-tiny text-gray-900 font-medium"> Or Visit </span>
    </div> -->
    <div class="flex flex-wrap  gap-4 justify-center mt-4">
      <div>
        <a href="<?php echo home_url() ?>/flights" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-bold rounded-md text-black bg-white bg-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50">
          <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z" clip-rule="evenodd" />
          </svg>
          Flights
        </a>
      </div>
      <div>
        <a href="<?php echo home_url() ?>/vacations" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-bold rounded-md text-black bg-white bg-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50">
          <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" d="M21.59 11.59h-2.36V8.66c0-.23-.2-.41-.43-.41h-5.82a.42.42 0 00-.43.41v2.93H10.2a.42.42 0 00-.43.41v8.34c0 .23.21.41.43.41h11.4c.21 0 .41-.2.41-.41V12c0-.23-.2-.41-.41-.41zm-7.36-1.68h3.32v1.68h-3.32V9.91zm3.79 9.06l-1.2-1.17 2.37-2.36 1.17 1.17-2.34 2.36zM10.89 4.91V3.66a.4.4 0 00-.41-.41H4.64a.4.4 0 00-.41.41v2.93H2.4A.4.4 0 002 7v13.34c0 .2.18.41.41.41h5.7V10.34c0-.23.18-.43.41-.43h2.37v-5zM9.23 6.59H5.89V4.91h3.34v1.68z" clip-rule="evenodd" />
          </svg>
          Vacations
        </a>
      </div>
      <div>
        <a href="<?php echo home_url() ?>/hotels" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-bold rounded-md text-black bg-white bg-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50">
          <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" d="M21.61 21.41l-.47-1.1a.49.49 0 00-.16-.2.4.4 0 00-.23-.06h-.84V7.4a.4.4 0 00-.12-.28.38.38 0 00-.29-.13h-3.75V2.41a.4.4 0 00-.12-.28.38.38 0 00-.29-.13H4.5a.38.38 0 00-.3.13.4.4 0 00-.11.28v17.64h-.84a.4.4 0 00-.23.07.49.49 0 00-.16.18l-.47 1.11a.44.44 0 00-.03.2c0 .08.03.14.07.2a.38.38 0 00.33.2h18.48a.38.38 0 00.33-.2.36.36 0 00.07-.2c0-.06 0-.13-.03-.2zM9.09 17h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 12.77h-2.5V14.5h2.5v5.27zm0-7.77h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 10h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12z" clip-rule="evenodd" />
          </svg>
          Hotels
        </a>
      </div>
    </div>
  </div>
</main>


<?php get_footer() ?>