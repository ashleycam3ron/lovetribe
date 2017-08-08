<?php
/*
Template Name: Shop
*/

get_header(); ?>

<div id="shop" class="container">
	<header class="entry-header">
		<h2 class="text-center hidden"><?php the_title();?></h2>
	</header>

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
    <section>
    <h3 class="hidden"><?php echo $term->name; ?></h3>

	<?php
		$taxonomy = $term->taxonomy;
		$term_id = $term->term_id;
		$parent = $term->parent;
		$image = get_field('featured_banner_image', $taxonomy . '_' . $term_id);
		$promo_img = get_field('promo_image', $taxonomy . '_' . $term_id);
		$promo = $promo_img['sizes']['medium']; ?>

<?php if ($term_id != 27 && $parent != 27 ){ ?>
	<div id="banner">
	    <img class="img-responsive" src="<?php echo $image['url'];?>" alt="<?php the_title(); ?>" />
	</div>
<?php } ?>
    <?php if ( $collections->have_posts() ) : ?>

	    <?php if ( $term->description !== "" ){ ?>
	    <article class="about col-xs-12 col-sm-4 col-md-3  <?php if( $promo ){ ?>has-promo<?php } ?>">
		    <?php if( $promo ){ ?>
				<img class="img-responsive promo" src="<?php echo $promo; ?>" alt="<?php the_title(); ?> detail" />
			<?php } ?>
		    <?php echo $term->description; ?>
		</article>
		<?php } ?>

	    <?php while ( $collections->have_posts() ) : $collections->the_post(); ?>
       <?php get_template_part('content', 'product'); ?>
    <?php endwhile; endif; ?>

    <div class="clearfix"></div>
    </section>
    <?php
    // Reset things, for good measure
    $collections = null;
    wp_reset_postdata();
}
?></div>

<?php get_footer();?>