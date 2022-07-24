<?php
add_action( 'init', 'sa_productvariant_post_type' );

function sa_productvariant_post_type() {
    $labels = array(
        'name'  => _x('Product Variants', 'post type general name', 'sinergiagro'),
        'singular_name' => _x('Product Variant', 'post type singular name', 'sinergiagro'),
        'menu_name' => _x('Product Variant', 'admin menu', 'sinergiagro'),
        'name_admin_bar'    => _x('Product Variant', 'add new on admin bar', 'sinergiagro'),
        'add_new'   => __('Add Product Variant', 'sinergiagro'),
        'add_new_item' => __('Add New Product Variant', 'sinergiagro'),
        'new_item'  => __('New Product Variant', 'sinergiagro'),
        'edit_item' => __('Edit', 'sinergiagro'),
        'view_item' => __('View', 'sinergiagro'),
        'all_items' => __('All Variant', 'sinergiagro'),
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
        'rewrite'            => array( 'slug' => 'variant' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'template'			=> true,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'productvariant', $args );
}


?>