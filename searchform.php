<form id="search" action="<?php echo home_url('/'); ?>" method="get">
    <input type="search" name="s" placeholder="To search, type and hit enter&hellip;" value="<?php echo the_search_query(); ?>" />
</form>