<?php

function ffl_add_scripts(){
  wp_enqueue_script( 'main-js', plugins_url() . '/facebook-footer-link/js/main.js' );
  wp_enqueue_style( 'styles-css', plugins_url() . '/facebook-footer-link/css/styles.css' );
}
add_action( 'wp_enqueue_scripts', 'ffl_add_scripts' );