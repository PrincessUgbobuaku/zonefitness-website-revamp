<?php

function zonefitness_register_club_cpt() {

    $labels = array(
        'name'               => 'Clubs',
        'singular_name'      => 'Club',
        'menu_name'          => 'Clubs',
        'name_admin_bar'     => 'Club',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Club',
        'new_item'           => 'New Club',
        'edit_item'          => 'Edit Club',
        'view_item'          => 'View Club',
        'all_items'          => 'All Clubs',
        'search_items'       => 'Search Clubs',
        'not_found'          => 'No clubs found',
        'not_found_in_trash' => 'No clubs found in Trash'
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'clubs'),
        'menu_icon'     => 'dashicons-location-alt',
        'supports'      => array('title', 'editor', 'thumbnail'),
        'show_in_rest'  => true,

        // this enables taxonomy UI support in admin
        'taxonomies'    => array('region')
    );

    register_post_type('club', $args);
}

add_action('init', 'zonefitness_register_club_cpt');