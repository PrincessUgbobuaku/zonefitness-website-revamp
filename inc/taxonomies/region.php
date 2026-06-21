<?php

function zonefitness_register_region_taxonomy() {

    $labels = array(
        'name'              => 'Regions',
        'singular_name'     => 'Region',
        'search_items'      => 'Search Regions',
        'all_items'         => 'All Regions',
        'edit_item'         => 'Edit Region',
        'update_item'       => 'Update Region',
        'add_new_item'      => 'Add New Region',
        'new_item_name'     => 'New Region Name',
        'menu_name'         => 'Regions',
    );

    $args = array(
        'hierarchical'      => true, // like categories (important)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'region'),
        'show_in_rest'      => true,
    );

    register_taxonomy('region', array('club'), $args);
}

add_action('init', 'zonefitness_register_region_taxonomy');