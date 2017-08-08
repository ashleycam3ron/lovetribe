<?php
/*
Template Name: Videos/Media
*/

get_header(); ?>

<div id="videos">
	<header class="entry-header">
		<h1 class="text-center hidden"><?php the_title();?></h1>
	</header>

	<?php get_template_part('/template-parts/slider','videos'); ?>

    <div class="container" style="margin-bottom: 25px">
	    <?php if( have_rows('videos') ):
    		while ( have_rows('videos') ) : the_row(); ?>
			<div class="col-sm-6 col-md-4"><?php the_sub_field('videos');?></div>
		<?php endwhile; endif; ?>
   	</div>
</div>

<?php get_footer();?>