<?php

    function alexsharke_custom_posts(){

        //Header Images
        $headerImg_labels = array(
            'name'                  => _x( 'Header Images', 'Post Type General Name', 'alexsharke' ),
            'singular_name'         => _x( 'Header Images', 'Post Type Singular Name', 'alexsharke' ),
            'menu_name'             => __( 'Header Images', 'alexsharke' ),
            'name_admin_bar'        => __( 'Header Images', 'alexsharke' ),
            'archives'              => __( 'Header Images Archives', 'alexsharke' ),
            'parent_item_colon'     => __( 'Parent Header Images:', 'alexsharke' ),
            'all_items'             => __( 'All Header Images', 'alexsharke' ),
            'add_new_item'          => __( 'Add New Header Image', 'alexsharke' ),
            'add_new'               => __( 'Add New', 'alexsharke' ),
            'new_item'              => __( 'New Header Image', 'alexsharke' ),
            'edit_item'             => __( 'Edit Header Image', 'alexsharke' ),
            'update_item'           => __( 'Update Header Image', 'alexsharke' ),
            'view_item'             => __( 'View Header Image', 'alexsharke' ),
            'search_items'          => __( 'Search Header Image', 'alexsharke' ),
            'not_found'             => __( 'Not found', 'alexsharke' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'alexsharke' ),
            'featured_image'        => __( 'Featured Image', 'alexsharke' ),
            'set_featured_image'    => __( 'Set featured image', 'alexsharke' ),
            'remove_featured_image' => __( 'Remove featured image', 'alexsharke' ),
            'use_featured_image'    => __( 'Use as featured image', 'alexsharke' ),
            'insert_into_item'      => __( 'Insert into Header Image', 'alexsharke' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Header Image', 'alexsharke' ),
            'items_list'            => __( 'Header Images list', 'alexsharke' ),
            'items_list_navigation' => __( 'Header Images list navigation', 'alexsharke' ),
            'filter_items_list'     => __( 'Filter Header Images list', 'alexsharke' ),
        );
        
        register_post_type('header_image',
            [
                'labels'      => $headerImg_labels,
                'public'      => true,
                'has_archive' => false,
                'rewrite'     => ['slug' => 'header_image'], // my custom slug
                'supports'		=> ['title'],
                'menu_icon'		=> 'dashicons-images-alt',
                'exclude_from_search'   => false,
            ]
        );



    }
    add_action('init', 'alexsharke_custom_posts');