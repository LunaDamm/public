<?php
function recipe_load_theme() {
    wp_enqueue_style("main-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("font-awesome-style", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css");
}
add_action("wp_enqueue_scripts", "recipe_load_theme");

function disable_gutenberg_for_pages() {
    remove_post_type_support("page", "editor");
}
add_action('init', 'disable_gutenberg_for_pages');