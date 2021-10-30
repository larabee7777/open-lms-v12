<?php
/**
 * Plugin Name: Open LMS
 * Plugin URI: larawhybrow.com
 * Description: Open Source Learn Management System
 * Version: 1.0
 * Author: Lara Whybrow
 * Author URI: larawhybrow.com
 */


 //Custom Post Type
function course_init() {
    // set up course labels
    $labels = array(
        'name' => 'Courses',
        'singular_name' => 'Course',
        'add_new' => 'Add New Course',
        'add_new_item' => 'Add New Course',
        'edit_item' => 'Edit Course',
        'new_item' => 'New Course',
        'all_items' => 'All Courses',
        'view_item' => 'View Courses',
        'search_items' => 'Search Courses',
        'not_found' =>  'No Courses Found',
        'not_found_in_trash' => 'No Courses found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Courses',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'course'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'course', $args );
    
    // register taxonomy
    register_taxonomy('course_category', 'course', array('hierarchical' => true,'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'course-category' )));
}
add_action( 'init', 'course_init' );


