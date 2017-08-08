<section id="slider" class="row">
    <h2 style="display: none;">Carousel</h2>
    <div id="carousel" class="carousel slide">
    	<?php $slider = new WP_Query(array(
				'post_type' => 'home-slider',
				'posts_per_page' => 7,
				'orderby' => 'menu_order',
				'order' => 'ASC',
				));
			  $count = 0;
		    ?>
        <ol class="carousel-indicators">
          <?php while($slider->have_posts()): $slider->the_post(); ?>
            <li <?php if ( $count == 0){ echo 'class="active"';} ?> data-target="#carousel" data-slide-to="<?php echo $count++; ?>"></li>
          <?php endwhile;  wp_reset_postdata(); ?>
        </ol>

        <div class="carousel-inner">
          <?php $count = 0;
             while ($slider->have_posts()) : $slider->the_post();
             $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
             ?>
			<div class="item <?php if ( $count == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>" style="background:url(<?php echo $image[0];?>) no-repeat center; background-size:cover;min-height: 600px;">
			     <h3 class="hidden"><?php the_title();?></h3>
			     <a href="<?php the_field('link');?>" style="width: 100%;height: 100%;position: absolute;"></a>
			</div><!-- item active -->
			<?php endwhile; wp_reset_postdata(); ?>

        </div>
        <a class="carousel-control prev" href="#carousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="carousel-control next" href="#carousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
    </div><!-- end #carousel -->
</section>

<script>
	jQuery(function($){
		jQuery('#carousel').carousel({
		    interval: 4000
		});
	});
</script>
