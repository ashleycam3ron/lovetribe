<?php
	$front_img = get_field('front');
	$front = $front_img['sizes']['medium'];
	$back_img = get_field('back');
	$back = $back_img['sizes']['medium'];
	$detail_img = get_field('detail');
	$detail = $detail_img['sizes']['medium'];
	$link = get_field('link'); ?>

<?php if( $link ): ?>
<article class="product col-xs-6 col-sm-4 col-md-3">
	<a href="<?php the_permalink(); ?>">
		<div class="item">
			<?php
				$field = get_field_object('availability');
				$value = $field['value'];
				$label = $field['choices'][ $value ];
				if ($label == "Available") { ?>
				<?php } elseif ($label == "New"){ ?>
					<div class="tag new"><?php echo $label; ?></div>
				<?php } elseif ($label == "Featured"){ ?>
					<div class="tag featured"><?php echo $label; ?></div>
				<?php } elseif ($label == "Sold Out"){ ?>
					<div class="tag soldout"><?php echo $label; ?></div>
				<?php } ?>

			<?php if( $front || $back ){ ?>
				<?php if( $detail ){ ?>
					<img class="img-responsive detail" src="<?php echo $detail; ?>" alt="<?php the_title(); ?> detail" />
				<?php } else { ?>
					<img class="img-responsive bottom" src="<?php echo $back; ?>" alt="<?php the_title(); ?> back" />
				<?php } ?>
					<img class="img-responsive top" src="<?php echo $front; ?>" alt="<?php the_title(); ?> front" />
			<?php } else { ?>
				<img class="img-responsive" src="http://via.placeholder.com/327x400/f8f8f8/cccccc">
			<?php } ?>
			<?php if ($label != "Sold Out"){ ?><a class="shop" target="_blank" href="<?php echo $link; ?>">Shop Now</a><?php } ?>
		</div>
		<?php if( is_page_template( 'page-templates/shop.php' ) ): ?>
			<h4><?php the_title(); ?></h4>
		<?php else : ?>
			<h3><?php the_title(); ?></h3>
		<?php endif; ?>
	</a>
</article>
<?php endif; ?>