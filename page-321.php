<?php // Media
	get_header();?>
	<section id="page" class="container">
		<?php while(have_posts()) : the_post();?>

			<article class="entry" style="padding: 0 15px 4%;">
				<h1 class="hidden"><?php the_title();?></h1>
				<?php the_content();?>
				<div class="clearfix"></div>
			</article>

		<?php endwhile;?>
	</section>
<?php get_footer();?>