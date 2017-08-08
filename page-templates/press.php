<?php
/*
Template Name: Press
*/

get_header();?>
	<section id="press" class="container-fluid">
		<h1 class="inverse row text-center"><?php the_title();?></h1>
		<?php get_template_part('content','press'); ?>
	</section>

	<?php //get_template_part('/template-parts/subscribe'); ?>

<?php get_footer();?>