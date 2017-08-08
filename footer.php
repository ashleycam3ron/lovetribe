	</div><!-- end .wrapper -->
<section id="instagram" class="text-center">
	<h2 class="hidden">Instagram</h2>
	<div class="container">
		<?php get_sidebar();?>
		<div class="clear"></div>
	</div>
</section>
	<footer id="footer" class="container-fluid clear">
		<div class="container">
			<div class="text-center row">
				<h5 class="hidden">Follow Us</h5>
				<?php wp_nav_menu( array('menu' => 'social')); ?>
			</div>
			<div class="col-sm-5 col-md-4">
				<h5 class="hidden">About</h5>
				<p>We are the passionate voice of a new generation of young women poised to take over the world. We are bold and fearless. We recognize that our differences make us special, but we are stronger when we stand together as a tribe. We are Love Tribe Apparel–stylish clothing for bold fashionistas.</p>
			</div>
			<div class="col-sm-2 col-md-2 col-md-offset-1 text-center">
				<h5 class="hidden">Footer Navigation</h5>
				<?php wp_nav_menu( array('menu' => 'footer')); ?>
			</div>
			<div class="col-sm-4 col-md-offset-1 ">
				<h5 style="margin-top: 0;">Join the Tribe</h5>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
			</div>

			<div class="clear" style="padding: 6px 0 22px; border-top: 1px solid #ffc0cb;margin-top: 20px;float: left;width: 100%;">
				<p class="copyright">&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
		    </div>
	    </div>
	</footer>

  </body>
</html>
<?php wp_footer();?>