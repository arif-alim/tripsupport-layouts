<?php get_header() ?>
<main class="mb-auto">
	<div class="bg-white">
		<div class="relative pb-28 lg:pb-20 bg-gray-800">
			<div class="absolute inset-0">
				<img class="w-full h-full object-cover" src="<?php echo THEME_IMAGE . '/travel-guide.jpg' ?>" alt="">
				<div class="absolute inset-0 bg-gray-800 opacity-75 mix-blend-multiply" aria-hidden="true"></div>
			</div>
			<div class="relative max-w-7xl mx-auto py-12 px-4 sm:py-32 sm:px-6 lg:px-8 text-center">
				<h1 class="text-2xl text-center font-extrabold text-white md:text-4xl lg:text-5xl">Your Travel Guide
					to the World
				</h1>
				<p class="my-4 sm:my-6 text-tiny sm:text-xl text-gray-300">Discover holiday ideas, guides, and stories
					unique to your next getaway
				</p>


				<div class="max-w-xs mx-auto w-full lg:max-w-md"><label for="search" class="sr-only">Search</label>
					<div class="relative text-white focus-within:text-gray-600">
						<div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
							<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd">

								</path>
							</svg>
						</div>
						<form id="search-post" action="<?php echo home_url('/'); ?>" method="get" autocomplete="off" class="d-flex mb-3 div-search mt-4">
							<input id="search" class="block w-full text-white bg-white bg-opacity-20 py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 focus:text-gray-900 placeholder-white focus:outline-none focus:bg-opacity-100 focus:border-transparent focus:placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Search" type="search" name="s">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="relative bg-white overflow-hidden">
			<div class="max-w-7xl mx-auto mt-6">
				<div class="grid grid-cols-12">
					<div class="col-span-12 lg:col-span-9">
						<section class="relative mb-6 px-4">
							<div class="text-left">
								<div class="sm:flex sm:items-baseline sm:justify-between">
									<h1 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
										<span class="block xl:inline">Latest Posts</span>
									</h1>
								</div>
								<p class="my-2 text-md text-gray-500 sm:text-md sm:max-w-prose md:text-md lg:mx-0">
									posts by category <?php single_cat_title(); ?>
								</p>
							</div>
						</section>

						<div class="space-y-4 container xl:max-w-7xl mx-auto px-4 py-8 lg:py-8">
							<div class="space-y-4 sm:space-y-10">
								<?php if (have_posts()) :
									while (have_posts()) : the_post(); ?>

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
													<div class="inline-flex flex-shrink-0"><a href="#">
															<?php
															$avatar = get_avatar_url(get_the_author_meta('ID')); ?>
															<img class="h-10 w-10 rounded-full" src="<?php echo $avatar; ?>" alt="Roel Aufderehar"></a>
														<div class="ml-3">
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
													<div class="place-self-end"><a href="<?php the_permalink() ?>" class="text-sm font-medium text-slate-700 hover:text-slate-900">
															<div class="p-2 bg-gray-100 rounded-full md:px-8">Read more<span aria-hidden="true" class="ml-1">→</span></div>
														</a></div>
												</div>
											</div>
										</div>

									<?php endwhile; ?>
								<?php endif; ?>


							</div>
						</div>


					</div>
					<div class="col-span-12 md:col-span-3">
						<section class="relative mt-3 px-6">
							<div class="sm:flex">
								<h1 class="text-xl tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-2xl">
									<span class="block xl:inline">Popular Posts</span>
								</h1>
							</div>
							<p class="my-2 text-md text-gray-500 sm:text-md sm:max-w-prose md:text-md lg:mx-0">A list of our most popular blog posts
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
													<div class="mt-6 flex items-center justify-between">
														<div class="inline-flex flex-shrink-0">
															<a href="#">
																<?php $avatar = get_avatar_url(get_the_author_meta('ID')); ?>
																<img class="h-10 w-10 rounded-full" src="<?php echo $avatar; ?>" alt="Roel Aufderehar">
															</a>
															<div class="ml-3">
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
													</div>
												</div>

												<a href="<?php the_permalink() ?>" class="text-sm font-medium text-slate-700 hover:text-slate-900">
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
				</div>
			</div>
		</div>
		<?php get_template_part('template/global/newsletter') ?>
	</div>
</main>
<?php get_footer() ?>
<div class="block sm:hidden bg-white border-t sticky bottom-0 left-0 right-0 z-10 pt-3 pb-2">
	<?php get_template_part('template/global/shortcut') ?>
</div>