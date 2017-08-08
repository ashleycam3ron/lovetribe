<?php get_header();?>
	<section id="page" class="container">
		<?php get_template_part('/template-parts/banner'); ?>
		<?php while(have_posts()) : the_post();?>

			<article class="entry col-md-8 col-md-offset-2" style="padding: 5% 15px;">
				<h1 class="text-center"><?php the_title();?></h1>
				<?php the_content();?>
			</article>

		<?php endwhile;?>

		<?php //comment_form(); ?>
		<?php //comments_template( $file, $separate_comments ); ?>
	</section>
<?php get_footer();?>