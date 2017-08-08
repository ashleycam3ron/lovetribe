<section id="slider">
    <h2 style="display: none;">Carousel</h2>
    <div id="carousel1" class="carousel slide">
    	<?php $slider = new WP_Query(array(
				'post_type' => 'products',
				'meta_query' => array(
			        array(
			            'key' => 'availability',
			            'value' => array ( 'available','new','featured' ),
			            'compare' => 'IN'
			        ),
			    ),
			    'tax_query' => array(
		            array(
						'taxonomy' => 'collections',
						'field'    => 'term_id',
						'terms'    => 27,
						'operator' => 'NOT IN',
					)
		        ),
				'posts_per_page' => -1,
				'orderby' => 'rand',
				));
			  $count = 0;
		    ?>
        <ol class="carousel-indicators hidden-xs">
          <?php while($slider->have_posts()): $slider->the_post();
	          $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
          <?php if ( $image ){ ?>
            <li <?php if ( $count == 0){ echo 'class="active"';} ?> data-target="#carousel" data-slide-to="<?php echo $count++; ?>"></li>

		<?php } ?>
          <?php endwhile;  wp_reset_postdata(); ?>
        </ol>
        <div class="carousel-inner">
          <?php
			 $count = 0;
             while ($slider->have_posts()) : $slider->the_post();
             $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
             ?>
          <?php if ( $image ){ ?>
			<div class="item <?php if ( $count == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>" style="background:url(<?php echo $image[0];?>) no-repeat center; background-size:cover;">
			     <h3 class="hidden"><?php the_title();?></h3>
			     <a style="position: absolute;width: 100%;height: 100%;" href="<?php the_permalink(); ?>"></a>
			</div><!-- item active -->
		  <?php } ?>
			<?php endwhile; wp_reset_postdata(); ?>

        </div>
        <a class="carousel-control prev" href="#carousel1" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="carousel-control next" href="#carousel1" data-slide="next"><i class="fa fa-chevron-right"></i></a>
    </div><!-- end #carousel -->
</section>

<script>
	jQuery(function($){
		jQuery('#carousel1').carousel({
		    interval: 6000
		});
	});
</script>