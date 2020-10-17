<?php

/**
 * Register and Enqueue Styles.
 */
function learnwordpress_register_styles() {

  $theme_version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style( 'asdasdasd', get_stylesheet_uri(), array(), $theme_version);

}

add_action( 'wp_enqueue_scripts', 'learnwordpress_register_styles' );