<?php $subscribe = new WP_Query( 'page_id=32' );
	    while ( $subscribe->have_posts() ) : $subscribe->the_post();
	    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
	    <section class="clear" id="subscribe" style="background:url(<?php echo $image[0];?>) no-repeat center; background-size:cover;">
	        <div id="form" class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
		        <h3>Join the Tribe</h3>
		        <img class="detail" src="<?php echo get_stylesheet_directory_uri(); ?>/images/x.png" alt="x detail"/>
		        <?php the_content(); ?>
		    </div>
	        <div class="clear"></div>
	    </section>
	  <?php endwhile;
	  wp_reset_postdata(); ?>