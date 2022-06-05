<div class="relative pb-28 lg:pb-20 bg-gray-800">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="<?php echo THEME_IMAGE.'/travel-guide.jpg'?>" alt="">
        <div class="absolute inset-0 bg-gray-800 opacity-75 mix-blend-multiply" aria-hidden="true"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-12 px-4 sm:py-24 sm:px-6 lg:px-8 text-center"><h1
            class="text-2xl text-center font-extrabold text-white md:text-4xl lg:text-5xl">Your Travel Guide
            to the World
        </h1>
        <p class="my-4 sm:my-6 text-tiny sm:text-xl text-gray-300">Discover holiday ideas, guides, and stories
            unique to your next getaway
        </p>


        <div class="max-w-xs mx-auto w-full lg:max-w-md"><label for="search" class="sr-only">Search</label>
            <div class="relative text-white focus-within:text-gray-600">
                <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd">

                        </path>
                    </svg>
                </div>
                <form id="search-post" action="<?php echo home_url('/'); ?>" method="get" autocomplete="off" class="d-flex mb-3 div-search mt-4">
                    <input id="search"
                           class="block w-full text-white bg-white bg-opacity-20 py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 focus:text-gray-900 placeholder-white focus:outline-none focus:bg-opacity-100 focus:border-transparent focus:placeholder-gray-500 focus:ring-0 sm:text-sm"
                           placeholder="Search" type="search" name="s">
                </form>
            </div>
        </div>
    </div>
</div>
<section class="-mt-32 max-w-7xl mx-auto relative  pb-12 sm:pb-20 px-4 lg:px-0"
         aria-labelledby="contact-heading"><h2 class="sr-only" id="contact-heading">Contact us</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-20 lg:gap-8 sm:px-4">
        <?php
        $args_tag = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_tag',
                    'field' => 'name',
                    'terms' => 'featured',
                ),
            ),
        );

        $the_query_tag = new WP_Query($args_tag); ?>
        <?php if ($the_query_tag->have_posts()) : ?>

        <?php while ($the_query_tag->have_posts()) : $the_query_tag->the_post(); ?>

        <div class="flex flex-col bg-white rounded-2xl shadow-xl">
            <div class="flex-shrink-0">
                <img class="rounded-t-lg h-48 w-full object-cover" src="<?php the_post_thumbnail_url() ?>" alt="">
            </div>
            <div class="flex-1 bg-white px-6 pt-6 pb-4 flex flex-col justify-between">
                <div class="flex-1"><p class="text-sm font-medium text-pink-600">
                        <?php $cat = get_the_category();
                        echo $cat[0]->name; ?>
                    </p>

                    <a href="<?php the_permalink() ?>" class="block mt-2">
                        <p class="text-lg lg:text-lg font-semibold text-pblue-900 truncate capitalize">The
                            <?php the_title() ?>
                        </p>
                        <p class="mt-3 text-tiny text-gray-500 line-clamp-3">
                            <?php echo strip_tags(get_the_excerpt()); ?>
                        </p>
                    </a>
                </div>
                <!--<div class="truncate mt-6 flex gap-2"><span
                        class="items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-600">Ski Resort
					</span>
                    <span class="items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-600">Family Friendly
					</span>
                    <span class="items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-600">Outdoors
					</span>
                    <span class="items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-600">Equipment Rental
					</span>
                </div>-->
                <div class="mt-6 flex justify-between items-center">

                                <div class="flex flex-shrink-0">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#" class="hover:underline"><?php the_author() ?> </a>
                                    </p>
                                </div>
                                <div class="place-self-end">
                                    <time class="text-xs text-gray-500 tracking-tight" datetime="2020-03-16"><?php the_time('M j , Y') ?></time>
                                </div>
                                
                        </div>
            </div>

            <div class="p-3 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-6"><a href="#"
                                                                                 class="text-tiny font-medium text-slate-700 hover:text-rose-600">Book
                    with Trip Support<span aria-hidden="true" class="ml-1">→</span></a></div>
        </div>

            <?php endwhile; ?>

        <?php endif;
        wp_reset_postdata();
        ?>

    </div>
</section>
