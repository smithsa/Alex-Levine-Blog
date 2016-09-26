<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<div class="row full-width">
					<div class="columns large-4 medium-12 small-12 left">
						<a href="#"><img src="<?= get_template_directory_uri().'/assets/images/global/logo-footer.png' ?>" width="247" height="110"/></a>
					</div>
					<div class="columns large-8 medium-12 small-12 right">
						<ul>
							<li><a href="">Tags</a></li>
							<li><a href="">About</a></li>
							<li><a href="">House</a></li>
							<li><a href="">Beauty</a></li>
							<li><a href="">Archive</a></li>
							<li><a href="">Contact</a></li>
						</ul>
						<div class="form-field">
							<label>Newsletter</label> <input type="text" placeholder="E-mail" />
							<a href="#"><img src="<?= get_template_directory_uri().'/assets/images/global/email-icon.png' ?>" class="email-icon"/></a>
						</div>
					</div>
				</div>

			</footer>
		</div>



		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<script type="text/javascript" src="<?= get_template_directory_uri().'/assets/javascript/vendor/velocity/velocity.min.js' ?>"></script>
<script type="text/javascript" src="<?= get_template_directory_uri().'/assets/javascript/pages/global.js' ?>"></script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>