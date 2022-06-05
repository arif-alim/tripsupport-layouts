<div class="col-span-12 lg:col-span-9">
  <section class="relative mb-6 px-4">
    <div class="text-left">
      <div class="sm:flex sm:items-baseline sm:justify-between">
        <h2 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
          <span class="block xl:inline">Latest Blog Posts</span>
        </h2>
      </div>
      <p class="my-2 text-md text-gray-500 sm:text-md sm:max-w-prose md:text-md lg:mx-0">
        Browse blog posts by category
      </p>
    </div>
  </section>
  <div class="flex-1 sm:flex space-x-0 sm:space-x-6 my-2 sm:my-4 px-4 whitespace-nowrap overflow-x-scroll overflow-hidden">
    <?php $get_parent_cats = array(
      'parent' => '0', //get top level categories only
      'orderby' => 'count',
      'order' => 'DESC'
    );

    $all_categories = get_categories($get_parent_cats); //get parent categories


    foreach ($all_categories as $single_category) {
      $catID = $single_category->cat_ID;
    ?>
      <a href="<?php echo get_category_link($catID) ?>" class="inline-flex justify-center items-center rounded-full border font-semibold focus:outline-none px-3 py-1 text-xs focus:ring focus:ring-gray-500 focus:ring-opacity-25 bg-white text-pblue-800 hover:bg-pblue-800 hover:text-white">
        <?php echo $single_category->name ?>
      </a>
    <?php } ?>

  </div>


  <div class="space-y-4 container xl:max-w-7xl mx-auto px-4 py-8 lg:py-8">
    <div class="space-y-4 sm:space-y-10">
      <?php
      $args_all = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'post_status' => 'publish',

      );
      $query_all = new WP_Query($args_all);
      if ($query_all->have_posts()) :
        while ($query_all->have_posts()) :
          $query_all->the_post(); ?>

          <div class="flex flex-col md:flex-row items-center bg-white rounded-lg overflow-hidden shadow-sm border">
            <div class="lg:w-[36%]">
              <a href="<?php the_permalink() ?>" class="block relative group rounded-none lg:rounded-none overflow-hidden">
                <img src="<?php the_post_thumbnail_url() ?>" alt="Featured Image of blog post">
                <div class="flex items-center justify-center absolute inset-0 bg-pblue-700 bg-opacity-60 opacity-0 transition ease-out duration-150 group-hover:opacity-100">
                  <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="text-white transform -rotate-45 hi-solid hi-arrow-right inline-block w-10 h-10">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </a>
            </div>
            <div class="w-full lg:w-[64%] p-6 lg:py-6 lg:px-8">
              <h4 class="font-bold text-lg sm:text-xl mb-2 line-clamp-1"><a href="<?php the_permalink() ?>" class="text-gray-800 hover:text-gray-600">
                  <?php the_title() ?>
                </a></h4>

              <p class="text-tiny line-clamp-3">
                <?php echo strip_tags(get_the_excerpt()); ?>
              </p>
              <div class="mt-6 flex items-center justify-between">
                <div class="inline-flex flex-shrink-0">
                  <!-- <a href="#">
                                <?php
                                $avatar = get_avatar_url(get_the_author_meta('ID')); ?>
                                <img class="h-10 w-10 rounded-full" src="<?php echo $avatar; ?>"
                                    alt="Roel Aufderehar"></a> -->
                  <div>
                    <?php $author_id = get_post_field('post_author', get_the_ID()); ?>
                    <p class="text-sm font-medium text-gray-900">
                      <a href="<?php echo get_author_posts_url($author_id); ?>" class="hover:underline"><?php the_author() ?></a>
                    </p>
                    <div class="flex space-x-1 text-xs text-gray-500">
                      <time datetime="2020-03-16"><?php the_time('M j , Y') ?></time>
                      <span aria-hidden="true">· </span>
                    </div>
                  </div>
                </div>
                <div class="place-self-end"><a href="<?php the_permalink() ?>" class="text-sm font-medium text-slate-900 hover:text-rose-600">
                    <div class="p-2 bg-gray-100 rounded-full md:px-8">Read more<span aria-hidden="true" class="ml-1">→</span></div>
                  </a></div>
              </div>
            </div>
          </div>

      <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>


    </div>
  </div>
</div>