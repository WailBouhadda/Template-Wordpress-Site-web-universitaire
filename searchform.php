<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( '', 'label', '' ); ?></span>
        <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', '' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit">
    	<span class="screen-reader-text">
			<?php echo _x( '', 'submit button', '' ); ?>
        </span>
        <i class="fa fa-search"></i>
    </button>
</form>