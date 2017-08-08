

<?php
	$front_img = get_field('front');
	$front = $front_img['sizes']['medium'];
	$back_img = get_field('back');
	$back = $back_img['sizes']['medium'];
	$detail_img = get_field('detail');
	$detail = $detail_img['sizes']['thumbnail'];
	$detail2_img = get_field('detail');
	$detail2 = $detail_img2['sizes']['thumbnail'];
	$link = get_field('link');
	//product status
	$field = get_field_object('availability');
	$value = $field['value'];
	$label = $field['choices'][ $value ]; ?>

<div id="shop-now">
	<div class="title col-xs-12 col-sm-9 col-sm-offset-0 <?php if ( $label == "Sold Out" ){ ?>col-md-12<?php } else { echo "col-md-10"; } ?> col-md-offset-1">
		<div><h2><?php the_title();?></h2></div>
	</div>
	<?php if ($label !== "Sold Out" && $link ): ?>
		<a class="btn-default" style="display: inline-block;" target="_blank" href="<?php the_field('link'); ?>">Shop Now</a>
	<?php endif; ?>
	<div class="clear"></div>
</div>

<article class="product">

<?php
	$terms = get_the_terms( $post->ID, 'collections' );
    $term = array_shift( $terms );
    $term_id = $term->term_id;
    $promo_img = get_field('promo_image', 'collections' . '_' . $term_id);
	$promo = $promo_img['sizes']['medium']; ?>

<?php if( $promo ){ ?>
	<img class="img-responsive promo hidden-sm" src="<?php echo $promo; ?>" alt="<?php the_title(); ?> promo" />
<?php } ?>
	<img class="img-responsive bottom" src="<?php echo $back; ?>" alt="<?php the_title(); ?> back" />
	<img class="img-responsive top" src="<?php echo $front; ?>" alt="<?php the_title(); ?> front" />
	<div class="detail">
		<?php if ( $detail ){ ?>
		<img class="img-responsive detail" src="<?php echo $detail; ?>" alt="<?php the_title(); ?>  detail" />
		<?php } ?>
		<?php if ( $detail2 ){ ?>
		<img class="img-responsive detail" src="<?php echo $detail2; ?>" alt="<?php the_title(); ?>  detail 2" />
		<?php } ?>
	</div>
</article>
