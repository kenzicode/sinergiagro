<?php
add_action( 'init', 'sa_blog_post_type' );

function sa_blog_post_type() {
    $labels = array(
        'name'  => _x('Blog', 'post type general name', 'sinergiagro'),
        'singular_name' => _x('Blog', 'post type singular name', 'sinergiagro'),
        'menu_name' => _x('Blog', 'admin menu', 'sinergiagro'),
        'name_admin_bar'    => _x('Blog', 'add new on admin bar', 'sinergiagro'),
        'add_new'   => __('Add New Blog', 'sinergiagro'),
        'add_new_item' => __('Add New Blog', 'sinergiagro'),
        'new_item'  => __('New Blog', 'sinergiagro'),
        'edit_item' => __('Edit Blog', 'sinergiagro'),
        'view_item' => __('View Blog', 'sinergiagro'),
        'all_items' => __('All Blog', 'sinergiagro'),
        'search_items'  => __('Search Blog', 'sinergiagro'),
        'not_found' => __('Blog Not Found', 'sinergiagro'),
        
    );

    $args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'sinergiagro' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
        'rewrite'            => array( 'slug' => 'blog' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'template'			=> true,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'blog', $args );
}

// hook into the init action and call create_product_taxonomies when it fires
add_action( 'init', 'sa_blog_taxonomies', 0 );

function sa_blog_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Type', 'taxonomy general name', 'danken-theme' ),
		'singular_name'     => _x( 'Type', 'taxonomy singular name', 'danken-theme' ),
		'search_items'      => __( 'Search Type', 'danken-theme' ),
		'all_items'         => __( 'All Type', 'danken-theme' ),
		'parent_item'       => __( 'Parent Type', 'danken-theme' ),
		'parent_item_colon' => __( 'Parent Type:', 'danken-theme' ),
		'edit_item'         => __( 'Edit Type', 'danken-theme' ),
		'update_item'       => __( 'Update Type', 'danken-theme' ),
		'add_new_item'      => __( 'Add New Type', 'danken-theme' ),
		'new_item_name'     => __( 'New Blog Type', 'danken-theme' ),
		'menu_name'         => __( 'Type', 'danken-theme' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'blogtype' ),
	);

	register_taxonomy( 'blogtype', array( 'blog' ), $args );

}



?>