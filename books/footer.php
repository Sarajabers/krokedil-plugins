<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
		<div> 
Saras Plugin
</div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

function custom_footer_template($template) {
   
    if (is_singular('home')) { 
        $custom_template = locate_template('custom-footer.php');

        if (!empty($custom_template)) {
            
            return $custom_template;
        }
    }

   
    return $template;
}

add_filter('template_include', 'custom_footer_template');


</body>
</html>
