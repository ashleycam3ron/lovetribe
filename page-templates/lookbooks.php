<?php
/*
Template Name: Lookbooks
*/

get_header(); ?>

<div id="lookbook" class="container">
	<header class="entry-header">
		<h1 class="text-center hidden"><?php the_title();?></h1>
	</header>

	<?php get_template_part('/template-parts/slider','lookbook'); ?>
	<div id="shop-now">
		<div class="title col-sm-12 col-md-8 col-md-offset-2 text-center">
			<h2>Settle into this summer with the latest, innovative trends</h2>
		</div>
		<div class="text-center">
			<a class="btn-default" style="padding: 11px 15px;" href="<?php echo esc_url( home_url() ) ?>/shop/">Shop These Styles</a></div>
		<div class="clear"></div>
	</div>

<?php $terms = get_terms( 'collections' );
	foreach ( $terms as $term ) {
	    $collections = new WP_Query( array(
	        'post_type' => 'products',
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'collections',
	                'field' => 'slug',
	                'terms' => array( $term->slug ),
	                'operator' => 'IN'
	            ),
	            // not in past collections
	            array(
					'taxonomy' => 'collections',
					'field'    => 'term_id',
					'terms'    => 27,
					'operator' => 'NOT IN',
				)
	        ),
	        'orderby' => 'menu_order',
			'order' => 'ASC',
			'posts_per_page' => -1
	    )); ?>

		<?php
			$taxonomy = $term->taxonomy;
			$term_id = $term->term_id;
			$image = get_field('featured_banner_image', $taxonomy . '_' . $term_id);
			$promo_img = get_field('promo_image', 'collections' . '_' . $term_id);
			$promo = $promo_img['sizes']['medium']; ?>

		<?php if ( $collections->have_posts() ) : ?>
		    <section>
			    <h2 class="hidden"><?php echo $term->name; ?></h2>
			    <div class="banner">
					<a href="<?php echo get_term_link( $term ); ?>"><img class="img-responsive" src="<?php echo $image['url']; ?>"/></a>
					<a class="view hidden-sm hidden-xs" href="<?php echo get_term_link( $term ); ?>" class="btn-default">View Collection <i class="fa fa-chevron-right"></i></a>
				</div>

			    <?php if ( $term->description !== "" ){ ?>
			    <article class="about" style="padding: 8px 0;">
				    <?php if( $promo ){ ?>
						<div class="col-md-3 hidden-sm" style="padding: 0;">
							<img class="img-responsive promo" src="<?php echo $promo; ?>" alt="<?php the_title(); ?> detail" />
						</div>
						<div class="col-md-9" style="padding:0 6%;margin: 5% auto 1%;"><?php echo $term->description; ?></div>
					<?php } else { ?>
						<div class="col-md-8 col-md-offset-2" style="padding:0 6%;margin-top: 5%;margin-bottom: 1%;"><?php echo $term->description; ?></div>
					<?php } ?>
					<div class="clearfix"></div>
				</article>
				<?php } ?>
			</section>
		<?php endif;
		} ?>

	<?php
		$term_id = 27;
		$taxonomy = 'collections';
		$term_child = get_term_children( $term_id, $taxonomy );

		if ( !empty( $term_child ) && !is_wp_error( $term_child ) ){ ?>
		<section id="past">
			<h2 class="text-center <?php if ( empty( $terms )){ echo 'hidden'; } ?>">Past Collections</h1>
			<?php foreach ( $term_child as $child ) {
			    $term = get_term_by( 'id', $child, $taxonomy_name );
				$image = get_field('featured_banner_image', $taxonomy . '_' . $child);?>
					<a href="<?php echo get_term_link( $child ); ?>"><img class="img-responsive" src="<?php echo $image['url']; ?>"/></a>
			<?php } ?>
		</section>
		<?php } ?>

    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer();?>