<?php
/*
 Template Name: Page: Menu
*/
?>
<?php get_header(); ?>

			<div id="content" class="content-page menu-page">

				<div id="inner-content" class="wrap cf">

					<!-- run loop up here to cathc the Page Featured image -->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<header>
						<h1 itemprop="headline"><?php the_title(); ?></h1>
					</header>

					<aside class="m-all t-1of3 d-2of7">
						<div class=""><?php the_post_thumbnail('aside'); ?></div>
						<div class=""><?php the_field('sidebar_text'); ?></div>
					</aside>

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<section class="entry-content cf" itemprop="articleBody">
								<?php
									// the content (pretty self explanatory huh)
									the_content();
								?>

								<?php
								// check if the repeater field has rows of data
								if( have_rows('food_type') ):
								 	// loop through the rows of data
								    while ( have_rows('food_type') ) : the_row();
								        // display a sub field value
										echo '<h2>';
										the_sub_field('food_type_name');
										echo '</h2>';

										// If has menu items inside the Food Type
										if( have_rows('menu_items') ):
										 	// loop through the rows of data
										    while ( have_rows('menu_items') ) : the_row();

												$attachment_id = get_sub_field('image');
												$image_mediumsize = 'medium';
												$image_medium = wp_get_attachment_image_src( $attachment_id, $image_mediumsize );
												$image_fullsize = 'full';
												$image_full = wp_get_attachment_image_src( $attachment_id, $image_fullsize );
												?>
												
												<a class='foobox' href="<?php echo $image_full[0]; ?>"><img src="<?php echo $image_medium[0]; ?>" /></a>
												<?php
												echo '<h4>';
												the_sub_field('title');
												echo '</h4>';
												the_sub_field('description');
												echo '<p class="price">$';
												the_sub_field('price');
												echo '</p><hr />';
											endwhile;
										else :
										endif;
										// end the menu items for this food type

								    endwhile;
								else :
								    // no rows found
								endif;
								// end the food type
								?>

							</section> <?php // end article section ?>
						</article>
						<?php endwhile; endif; ?>
					</main>
				</div>
			</div>
<?php get_footer(); ?>