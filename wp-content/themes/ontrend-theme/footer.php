			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<!-- Address and Phone -->
					<p><?php the_field('address', 'option'); ?></p>
					<p><?php the_field('phone', 'option'); ?></p>

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

					<!-- Icon links for fixed positioning web app style -->
					<div class="footer-nav mobile-first">
						<a href="javascript:void(0);">
							<i class="fa fa-home"></i>
							Home
						</a>
						<a href="javascript:void(0);">
							<i class="fa fa-cutlery"></i>
							Menu
						</a>
						<a href="javascript:void(0);">
							<i class="fa fa-image"></i>
							Gallery
						</a>
						<a href="javascript:void(0);">
							<i class="fa fa-map-marker"></i>
							Map
						</a>
						<a href="javascript:void(0);">
							<i class="fa fa-envelope"></i>
							Contact
						</a>
					</div>
					
					<!-- Site by calling card -->
					<p class="site-by">site by <a href="http://ontrendwebsites.com" title="onTrend websites - Mobile friendly WordPress design and development" target="_blank">onTrend websites</a></p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
