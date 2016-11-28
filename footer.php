<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="column row">
		
		
			<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_id'        => 'footer-menu',
					'container'       => 'span',
					'menu_class'     => 'menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'link_before'     => '<span>',
					'link_after'      => '</span>',
					'depth'           => 0,
				) );
				
			?>
			
			<div class="site-info">
	
				<span class="copyright-text"><?php printf( esc_html__( '&copy; %1$s Company. All rights reserved.', '_s' ), date( 'Y' ) ); ?></span>
				
				<?php	
				wp_nav_menu( array(
					'theme_location' => 'copyright',
					'menu_id'        => 'copyright-menu',
					'container'       => 'span',
					'menu_class'     => 'menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'link_before'     => '<span>',
					'link_after'      => '</span>',
					'depth'           => 0,
				) );
	
				?>
				
			</div><!-- .site-info -->
		
		</div><!-- .column.row -->

			</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
