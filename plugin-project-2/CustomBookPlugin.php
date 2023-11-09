<?php
/*
Plugin Name: Custom Books Plugin
Description: Custom plugin to create a custom post type and taxonomy for Books.
*/

// Register custom post type for Books 
function custom_register_books_post_type() {
    register_post_type('books', array(
        'labels' => array(
            'name' => 'Books',
            'singular_name' => 'Book',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt'),
        'has_archive' => true,
    ));
}
add_action('init', 'custom_register_books_post_type');

// Register custom taxonomy for Genres
function custom_register_genres_taxonomy() {
    register_taxonomy('genres', 'books', array(
        'labels' => array(
            'name' => 'Genres',
            'singular_name' => 'Genre',
        ),
        'hierarchical' => true,
    ));
}
add_action('init', 'custom_register_genres_taxonomy');
?>
