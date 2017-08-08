<?php get_header();?>
	<section class="container">
		<?php get_template_part('/template-parts/banner'); ?>
		<header class="entry-header">
			<h2 class="text-center hidden"><?php single_term_title(); ?></h2>
		</header>
		<?php
			$term = $wp_query->queried_object;
			$current_term = $term->slug;
			$args = array(
			'post_type' => 'products',
			'taxonomy' => 'collections',
			'tax_query' => array(
	            'relation' => 'AND',
		            array(
		                'taxonomy' => $term->taxonomy,
		                'field' => 'slug',
		                'terms' => $term->slug
		            ),
		        ),
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'posts_per_page' => -1
			);
		$products = new WP_Query( $args );
		while ( $products->have_posts() ) : $products->the_post();
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

		<?php if ($image){ ?>
			<a href="<?php the_permalink(); ?>" style="margin-bottom: 8px;display: block;">
				<img class="img-responsive" src="<?php echo $image[0];?>" alt="<?php the_title(); ?>" />
			</a>
		<?php } ?>
		<?php endwhile;?>
	</section>
<?php get_footer();?>