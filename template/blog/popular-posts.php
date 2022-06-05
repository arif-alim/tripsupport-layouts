<div class="col-span-12 md:col-span-3">
  <section class="relative mt-3 px-6">
    <div class="sm:flex">
      <h2 class="text-xl tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-2xl">
        <span class="block xl:inline">Popular Posts</span>
      </h2>
    </div>
    <p class="my-2 text-md text-gray-500 sm:text-md sm:max-w-prose md:text-md lg:mx-0">A listo
      of our most popular blog posts
    </p>

    <div class="bg-white">
      <div class="space-y-12 container xl:max-w-7xl mx-auto py-16 lg:py-12">
        <?php
        $args_view = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'meta_key' => 'views',
          'orderby' => 'meta_value_num'

        );
        $query_view = new WP_Query($args_view);
        if ($query_view->have_posts()) :
          while ($query_view->have_posts()) :
            $query_view->the_post(); ?>

            <div class="flex flex-col rounded-lg shadow">
              <a href="<?php the_permalink() ?>" class="block relative group rounded-t-lg rounded-b-none overflow-hidden">
                <div class="flex items-center justify-center absolute inset-0 bg-rose-600 bg-opacity-60 opacity-0 transition ease-out duration-150 group-hover:opacity-100">
                  <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="text-white transform -rotate-45 hi-solid hi-arrow-right inline-block w-10 h-10">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="aspect-w-2 aspect-h-1">
                  <img src="<?php the_post_thumbnail_url() ?>" alt="Featured Image of blog post" class="object-cover">
                </div>
              </a>
              <div class="p-4">
                <h4 class="font-bold text-md grow">
                  <a href="<?php the_permalink() ?>" class="text-slate-800 hover:text-rose-600 line-clamp-2">
                    <?php the_title() ?>
                  </a>
                </h4>
                <div class="mt-6 flex justify-between items-center">

                  <div class="flex flex-shrink-0">
                    <?php $author_id = get_post_field('post_author', get_the_ID()); ?>
                    <p class="text-sm font-medium text-gray-900">
                      <a href="<?php echo get_author_posts_url($author_id); ?>" class="hover:underline"><?php the_author() ?></a>
                    </p>
                  </div>
                  <div class="place-self-end">
                    <time class="text-xs text-gray-500 tracking-tight" datetime="2020-03-16"><?php the_time('M j , Y') ?></time>
                  </div>

                </div>
              </div>

              <a href="<?php the_permalink() ?>" class="text-sm font-medium text-slate-700 hover:text-rose-600">
                <div class="p-2 bg-gray-100 md:px-8">Read more<span aria-hidden="true" class="ml-1">→</span>
                </div>
              </a>
            </div>

        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
</div>