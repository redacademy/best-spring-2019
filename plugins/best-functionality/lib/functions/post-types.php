<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function best_post_type()
{

    $labels = array(
        'name'                  => 'Programs',
        'singular_name'         => 'Program',
        'menu_name'             => 'Program Types',
        'name_admin_bar'        => 'Program Type',
        'archives'              => 'Program Archives',
        'attributes'            => 'Program Attributes',
        'parent_item_colon'     => 'Parent Program:',
        'all_items'             => 'All Programa',
        'add_new_item'          => 'Add New Program',
        'add_new'               => 'Add New Program',
        'new_item'              => 'New Program',
        'edit_item'             => 'Edit Program',
        'update_item'           => 'Update Program',
        'view_item'             => 'View Program',
        'view_items'            => 'View Programs',
        'search_items'          => 'Search Program',
        'not_found'             => 'Program Not found',
        'not_found_in_trash'    => 'Program Not found in Trash',
        'featured_image'        => 'Featured Program Image',
        'set_featured_image'    => 'Set featured Program image',
        'remove_featured_image' => 'Remove featured Program image',
        'use_featured_image'    => 'Use as featured Program image',
        'insert_into_item'      => 'Insert into Program',
        'uploaded_to_this_item' => 'Uploaded to this Program',
        'items_list'            => 'Programs list',
        'items_list_navigation' => 'Programs list navigation',
        'filter_items_list'     => 'Filter Programs list',
    );
    $args = array(
        'label'                 => 'Program',
        'description'           => 'BEST Community Programs',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-location-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'programs',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type('program', $args);
}
add_action('init', 'best_post_type', 0);
