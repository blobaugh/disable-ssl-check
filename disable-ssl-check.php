/*
 * Name: Disable SSL Check
 * Description: Disables check for local server SSL certificate in WordPress. This check can cause updates and other HTTP requests to fail if the local cert is self signed.
 * Version: 0.6
 */

add_filter( 'https_local_ssl_verify', '__return_false' );
