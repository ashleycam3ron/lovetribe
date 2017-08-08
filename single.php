<?php get_header();?>
	<section class="container">
		<?php while(have_posts()) : the_post(); ?>

			<?php if ( is_singular('products') ){
					get_template_part('/template-parts/banner');
					get_template_part('content', 'single-product');
				} else { ?>
					<article class="entry col-md-10 col-md-offset-1">
						<?php the_content();?>
					</article>
			<?php } ?>
		<?php endwhile;?>

		<?php //comment_form(); ?>
		<?php //comments_template( $file, $separate_comments ); ?>
	</section>
<?php get_footer();?>