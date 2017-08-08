<ul id="sidebar" class="col-md-2">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Press Sidebar')) :
	    else : ?>

        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php get_search_form(); ?>

	<?php endif; ?>

</ul>