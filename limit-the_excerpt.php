<?php

/**
 * @file limit the_excerpt()
 *
 * This should go into the functions.php of yourTheme.
 * Replace yourTheme with your theme name.
 *
 * @see http://codex.wordpress.org/Function_Reference/the_excerpt#Control_Excerpt_Length_using_Filters
 */
function yourTheme_excerpt_length( $length ) {
  // set words count here
  return 20;
}

add_filter( 'excerpt_length', 'yourTheme_excerpt_length', 999 );

?>
