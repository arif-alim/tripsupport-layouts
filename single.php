<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
    set_post_view(get_the_ID());
?>
    <main class="mb-auto">
      <div class="bg-white">
        <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8">
          <nav class="flex" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-4">
              <li>
                <div>
                  <a href="<?php echo home_url() ?>" class="text-gray-400 hover:text-gray-500">
                    <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    <span class="sr-only">Home</span></a>
                </div>
              </li>

              <li>
                <div class="flex items-center">
                  <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                  </svg>
                  <a href="/blog" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Blog</a>
                </div>
              </li>

              <li>
                <div class="flex items-center">
                  <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                  </svg>
                  <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page"><?php the_title() ?></a>
                </div>
              </li>
            </ol>
          </nav>

          <div class="prose prose-slate prose-lg mx-auto">
            <div class="text-left">
              <div class="text-sm uppercase font-bold tracking-wider mb-1 text-rose-600"><?php $category = get_the_category();
                                                                                          echo $category[0]->cat_name; ?></div>
              <div class="text-3xl md:text-4xl font-extrabold"><?php the_title() ?></div>
              <div class="text-base md:text-md md:leading-relaxed font-medium text-gray-600 lg:w-2/3">
                <?php $author_id = get_post_field('post_author', get_the_ID()); ?>

                <a href="<?php echo get_author_posts_url($author_id); ?>" class="text-pblue-700 hover:text-pblue-400"><?php the_author() ?></a> on
                <span class="font-semibold"><?php the_time('M j , Y') ?></span> · <?php global $post;
                                                                                  reading_time_article($post->post_content) ?> read
              </div>
            </div>
          </div>


          <article class="prose prose-slate prose-lg mx-auto">
            <div class="object-cover w-full">
              <img src="<?php the_post_thumbnail_url() ?>" alt="Featured Image of blog post" class="rounded w-full object-cover aspect-[5/2]">
            </div>

            <?php the_content() ?>

          </article>
        </div>
      </div>


      <div class="bg-white overflow-hidden">
        <div class="container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
          <div class="flex flex-col md:flex-row md:items-center space-y-16 md:space-y-0 md:space-x-28">
            <div class="relative">
              <div class="absolute pattern-dots-lg text-gray-200 top-0 left-0 w-32 h-48 md:h-72 transform -translate-y-12 -translate-x-16 -rotate-3"></div>
              <div class="absolute pattern-dots-lg text-gray-200 bottom-0 right-0 w-32 h-48 md:h-72 transform translate-y-12 translate-x-16 rotate-3"></div>
              <div class="absolute rounded-3xl top-0 right-0 w-32 h-32 bg-rose-200 bg-opacity-50 -mt-10 -mr-10 transform -rotate-6"></div>
              <div class="absolute rounded-3xl bottom-0 left-0 w-32 h-32 bg-blue-200 bg-opacity-50 -mb-10 -ml-10 transform rotate-6"></div>

              <img src="https://trip-support.s3.amazonaws.com/images/home/blog-post-1.jpg" alt="Hero Image" class="relative rounded-lg mx-auto shadow-lg w-full object-cover aspect-[5/2]">
            </div>


            <div class="space-y-10 w-full">
              <div>
                <div class="text-sm font-semibold mb-1 text-pblue-700">Trip Support Flights, Hotels &amp;
                  Vacation Deals
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Book with us and save</h2>
                <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-gray-600">Secure your flight
                  ticket, hotel reservation, or your vacation trip with a small
                  deposit. No Credit Check Needed.
                </h3>
              </div>


              <div class="flex flex-col lg:flex-row lg:items-center space-y-4 lg:space-y-0 lg:space-x-2"><a href="javascript:void(0)" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-6 py-4 leading-6 rounded-full border-rose-600 bg-rose-600 text-white hover:text-white hover:bg-rose-700 hover:border-rose-700 focus:ring focus:ring-rose-500 focus:ring-opacity-50 active:bg-rose-600 active:border-rose-600">
                  <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-check inline-block w-5 h-5">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Book Now, Pay Later</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php endwhile;
endif; ?>
<?php get_footer() ?>
<div class="block sm:hidden bg-white border-t sticky bottom-0 left-0 right-0 z-10 pt-3 pb-2">
  <?php get_template_part('template/global/shortcut') ?>
</div>