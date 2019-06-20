<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">

	<label class="search-content">
		<input type="search" class="search-field" placeholder="   Search BEST..." value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="Search for:" />
		<img class="search-toggle-icon" src="<?php echo get_template_directory_uri(); ?>/assets/vector-icons/icons/search.svg" alt="">
	</label>

	<button class="search-submit screen-reader-text"> Search BEST...</button>



</form>