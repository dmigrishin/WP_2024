<?php

function evolution_files() {
  wp_enqueue_style('evolution_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'evolution_files');