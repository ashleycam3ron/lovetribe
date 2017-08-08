<?php
/*
Template Name: Home
*/

get_header(); ?>

<div id="home" class="container-fluid">
	<?php get_template_part('/template-parts/slider'); ?>

<div class="container quick" style="padding:10px 4px 5px;">
	<article style="padding: 0 10px;" class="col-sm-6 col-md-4">
		<h2 class="hidden">New Arrivals</h2>
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-new-arrivals.jpg" alt="new arrivals" />
		<a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/shop/">Shop Now <i class="fa fa-caret-right"></i></a>
	</article>
	<article style="padding: 0 10px;" class="col-sm-6 col-md-4">
		<h2 class="hidden">LookBooks</h2>
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-lookbooks.jpg" alt="lookbooks" />
		<a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/lookbooks/">View Collections <i class="fa fa-caret-right"></i></a>
	</article>
	<article style="padding: 0 10px;" class="col-sm-6 col-md-4">
		<h2 class="hidden">Media</h2>
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-media.jpg" alt="media" />
		<a class="btn-default" href="<?php echo esc_url( home_url() ) ?>/videos/">Watch Now <i class="fa fa-caret-right"></i></a>
	</article>
</div>

<section class="container">
	<h2 class="text-center" style="margin: 27px auto 20px;">Shop the Collection</h2>
	<?php get_template_part('/template-parts/slider','lookbook'); ?>

</section>
<script>
	jQuery(function($){
		jQuery('#carousel').carousel({
		    interval: 4000
		});
	});
</script>

<?php //get_template_part('/template-parts/subscribe'); ?>
<?php get_footer();?>