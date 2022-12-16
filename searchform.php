
<?php
/**
 * 
 * Custom search form 
 * 
 * @package _magazine
 * 
 */
?>

<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" class=" margin-bottom-0">
    <ul class="menu">
        <li><input type="search" class="form-control border-0" placeholder="Search" aria-label="search nico" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>"></li>
        <li><input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" /></li>
    </ul>
</form>

<?php
/*

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
 
*/