<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">

	<label class="search-content">
		<input type="search" class="search-field" placeholder="Search BEST..." value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="Search for:" />
		
		<button class="search-toggle-icon"></button>
		<button class="search-submit screen-reader-text"></button>

	</label>
	
</form>