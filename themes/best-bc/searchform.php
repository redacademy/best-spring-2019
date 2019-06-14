<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

	<label>
		<input type="search" class="search-field" placeholder=" Looking for..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
	</label>

	<button class="search-submit creen-reader-text">
		<img src="<?php echo get_template_directory_uri(); ?>/Assets/vector-icons/icons/search.svg" alt="">
	</button>
	
</form>
