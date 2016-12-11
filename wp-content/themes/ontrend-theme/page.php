<?php get_header(); ?>

			<div id="content" class="content-page">

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
							</section> <?php // end article section ?>
						</article>
						<?php endwhile; endif; ?>
					</main>
				</div>
			</div>
<?php get_footer(); ?>
