<div id="slider" class="container" style="padding: 0 20px;">
    <h2 style="display: none;">Featured Videos</h2>
	<?php if( have_rows('feature_videos') ): ?>
		<div id="carousel" class="carousel slide">
			<div class="carousel-inner">
    	<?php $count = 0;
	    	while ( have_rows('feature_videos') ) : the_row(); ?>
	    	<div class="item <?php if ( $count == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>">
			     <?php the_sub_field('video');?>
			</div>
    <?php endwhile; ?>
			</div>
        <a class="carousel-control prev" href="#carousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="carousel-control next" href="#carousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
		</div>
    <?php endif; ?>
</div>

<script>
	jQuery(function($){
		jQuery('#carousel').carousel({
		    interval: false
		});
	});
</script>
