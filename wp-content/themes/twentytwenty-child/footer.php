<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" class="header-footer-group">

				<div class="footer-inner section-inner">

					<?php
					if ( function_exists( 'the_privacy_policy_link' ) ) {
						the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
					} else {
                        ?>
                        <p class="privacy-policy">
                            <a class="privacy-policy-link" href="#">Mention légales</a>
                        </p>
                    <?php
                    }
					?>

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
