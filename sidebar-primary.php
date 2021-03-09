<!-- <aside id="search" class="widget widget_search">
	<?php get_search_form(); ?>
</aside>
 
<aside id="search" class="widget widget_categories">
	<?php wp_list_categories(['show_count' => true]); ?>
</aside> -->

<aside id="search"class="single_sidebar_widget search_widget"> 
	<?php get_search_form(); ?>
</aside>

<aside id="search" class="single_sidebar_widget post_category_widget">
	<?php wp_list_categories(['show_count' => true]); ?>
</aside>