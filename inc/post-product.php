<?php
add_action( 'init', 'sa_product_post_type' );

function sa_product_post_type() {
    $labels = array(
        'name'  => _x('Product', 'post type general name', 'sinergiagro'),
        'singular_name' => _x('Product', 'post type singular name', 'sinergiagro'),
        'menu_name' => _x('Product', 'admin menu', 'sinergiagro'),
        'name_admin_bar'    => _x('Product', 'add new on admin bar', 'sinergiagro'),
        'add_new'   => __('Add Product', 'sinergiagro'),
        'add_new_item' => __('Add New Product', 'sinergiagro'),
        'new_item'  => __('New Product', 'sinergiagro'),
        'edit_item' => __('Edit Product', 'sinergiagro'),
        'view_item' => __('View Product', 'sinergiagro'),
        'all_items' => __('All Products', 'sinergiagro'),
        'search_items'  => __('Search Products', 'sinergiagro'),
        'not_found' => __('No Products Found', 'sinergiagro'),
        
    );

    $args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'sinergiagro' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
        'rewrite'            => array( 'slug' => 'product' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'template'			=> true,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'product', $args );
}

// hook into the init action and call create_product_taxonomies when it fires
add_action( 'init', 'sa_product_taxonomies', 0 );

function sa_product_taxonomies() {
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
		'new_item_name'     => __( 'New Crops Type', 'danken-theme' ),
		'menu_name'         => __( 'Type', 'danken-theme' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'type' ),
	);

	register_taxonomy( 'type', array( 'product' ), $args );

}



?>