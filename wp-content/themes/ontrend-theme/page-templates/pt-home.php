<?php
/*
 Template Name: Page: Home
*/
?>
<?php get_header(); ?>
			<div id="content" class="home-page">
				<div id="inner-content" class="wrap cf">
					<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<!-- Image carousel -->
							<?php if( have_rows('carousel') ): ?>
								<ul class="slides">
								<?php while( have_rows('carousel') ): the_row(); 
									// vars
									$attachment_id = get_sub_field('image');
									$image_fullsize = 'home carousel';
									$image_full = wp_get_attachment_image_src( $attachment_id, $image_fullsize );
									?>
									<li class="slide">
										<img src="<?php echo $image_full[0]; ?>" />
									</li>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>

							<!-- Hero image END -->
							<section class="entry-content cf" itemprop="articleBody">
								<?php
									the_content();
								?>
							</section>
						</article>
						<?php endwhile;  endif; ?>
					</main>
				</div>
			</div>
<?php get_footer(); ?>
