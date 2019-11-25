 <form role="search"  methed="get" class="search-form d-inline-block" action="<?php echo home_url('/'); ?>">

    <div class="d-flex">
    	<input type="search" class="form-control" placeholder="Search here..." value="<?php echo the_search_query();  ?>" name="s" title="search">
        <button type="submit" class="btn btn-secondary" ><span class="icon-search"></span></button>
    </div>
</form>
<!-- <form action="/" method="get">
    <label for="search">Search in <?php //echo home_url( '/' ); ?></label>
    <input type="text" name="s" id="search" value="<?php //the_search_query(); ?>" />
    <input type="image" alt="Search" src="<?php //bloginfo( 'template_url' ); ?>/images/search.png" />
</form> -->