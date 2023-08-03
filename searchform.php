<form role="search" id="searchform" class="searchform" action="<?php echo esc_url(home_url( '/' )) ?>">
    <div>
        <label class="screen-reader-text" for="s"><?php _e('Search for', 'wp-devs') ?>:</label>

        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">

        <input type="submit" id="searchsubmit" value="<?php _e('Search', 'wp-devs') ?>">

        <!-- <input type="hidden" name="post_type" value="post" id="post_type"> -->
    </div>
</form>