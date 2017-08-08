<div class="container">
	<div class="col-md-10">
	<?php
		$big = 999999999; // need an unlikely integer
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'posts_per_page' => 6,
			'paged' => $paged,
			'orderby' => 'date',
			'cat' => 1,
			'order' => 'DESC' );
		$wp_query = new WP_Query( $args );
		while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

		<article class="entry col-md-6 col-lg-4">
		  <?php if ( has_post_thumbnail() ) { ?>
			  <div class="col-sm-5 col-md-12 feature">
			    <?php if (get_field('news_source_link')){ ?>
				  	<a target="_blank" href="<?php the_field('news_source_link'); ?>" title="<?php the_title_attribute(); ?>">
				  <?php } else { ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				  <?php } ?>
			        <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
			    	</a>
			    <div class="clear"></div>
			  </div>
			  <div class="col-sm-7 col-md-12">
				  <?php if (get_field('news_source_link')){ ?>
				  	<h2><a target="_blank" href="<?php the_field('news_source_link'); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a><i class="fa fa-external-link" style="font-size: 50%;margin: 0 5px;color: #e84990;"></i></h2>
				  <?php } else { ?>
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
				  <?php } ?>
				<small class="date">
				    by
				    <?php $posttags = get_the_tags();
						if ($posttags) {
						  foreach($posttags as $tag) {
						    echo $tag->name . ' ';
						  }

						} else { echo "Love Tribe Apparel"; } ?>
					on <?php the_time('F d, Y'); ?></small>
				<?php the_excerpt();?>
			    <p><a target="_blank" href="<?php the_field('news_source_link'); ?>">Continue reading →</a></p>

			  </div>
			<?php } else { ?>
			  <div class="col-md-12">
				<h2><a target="_blank" href="<?php the_field('news_source_link'); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
				<small class="date">
				    by <?php $posttags = get_the_tags();
						if ($posttags) {
						  foreach($posttags as $tag) {
						    echo $tag->name . ' ';
						  }
						} else { echo "Love Tribe Apparel"; } ?>
					on <?php the_time('F d, Y'); ?></small>
				<?php the_excerpt();?>
				 <p><a target="_blank" href="<?php the_field('news_source_link'); ?>">Continue reading →</a></p>
			  </div>
			<?php } ?>
		</article>

	<?php endwhile; ?>

	<?php if ($wp_query->max_num_pages > 1) { if (function_exists("wp_bs_pagination")){  wp_bs_pagination(); } } ?>
	</div>

	<?php get_sidebar('press');?>
</div>