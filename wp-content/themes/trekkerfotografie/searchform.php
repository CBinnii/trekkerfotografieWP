<?php 
/**
 * Template Name: Search Form
 **/
?>
<div class="header-site-search">
    <span class="header-site-search-icon">
        <span class="material-symbols-outlined">
            search
        </span>
    </span>
    <form method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>" accept-charset="utf-8" id="searchform" role="search">
        <input class="header-site-search-input" name="s" id="s" type="text" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
</div>