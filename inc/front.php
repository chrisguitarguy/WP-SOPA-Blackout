<?php
add_action( 'template_include', 'cd_sopablackout_catch_pages' );
/**
 * Hijacks the included template and replaces it with our own, nice
 * sopa blackout page.
 */
function cd_sopablackout_catch_pages( $template )
{
    return CD_SOPABLACKOUT_PATH . 'inc/template.php';
}


add_filter( 'status_header', 'cd_sopablackout_status', 10, 4 );
/**
 * Sets a 503 Service Unavailable header for all pages on the site
 * 
 * @uses get_status_header_desc
 */
function cd_sopablackout_status( $status_header, $header, $text, $protocol )
{
    $text = get_status_header_desc( 503 );
    return "$protocol 503 $text";
}


add_filter( 'wp_headers', 'cd_sopablackout_add_retry_after' );
/**
 * Adds a Retry-After header with a value of one day (86400 seconds).
 */
function cd_sopablackout_add_retry_after( $headers )
{
    $headers['Retry-After'] = 86400;
    return $headers;
}


add_filter( 'wp_title', 'cd_sopablackout_fix_title' );
/**
 * Adds a nice "Stop American Censorship" <title> to the site.
 */
function cd_sopablackout_fix_title( $title )
{
    return sprintf( __( 'Stop United States Censorship | %s' ), get_bloginfo( 'name' ) );
}
