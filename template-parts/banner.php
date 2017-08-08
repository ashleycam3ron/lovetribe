<?php if (is_tax()){
	$term = $wp_query->queried_object;
	$image = get_field('featured_banner_image', $term); ?>
	<div id="banner" style="background:url(<?php echo $image['url']; ?>) no-repeat center;">
<?php } elseif (is_singular('products')){
     	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
    <div id="banner">
	    <?php if ( $image ){ ?>
		    <img class="img-responsive" src="<?php echo $image[0];?>" alt="<?php the_title(); ?>" />
		<?php } else { ?>
		    <img class="img-responsive" src="http://placehold.it/2000x600" alt="placeholder">
		<?php } ?>
<?php } elseif (has_post_thumbnail()){
     	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
    <div id="banner" style="background:url(<?php echo $image[0];?>) no-repeat center;">
<?php } else { ?>
    <div id="banner" style="background: url(http://placehold.it/1240x400) no-repeat center;">
 <?php } ?>
 	</div>