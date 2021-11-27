
<?php
	          
/** list serveat */
function list_serveat() {
	$labels = array(
		'name'               => 'Liste Serveat',
		'singular_name'      => 'Liste Serveat',
		'menu_name'          => 'Liste Serveat',
		'name_admin_bar'     => 'Liste Serveat',
		'add_new'            => 'Ajouter un nouveau bloc liste',
		'add_new_item'       => 'Ajouter un bloc liste',
		'new_item'           => 'Nouveau bloc liste',
		'edit_item'          => 'Editer un bloc liste',
		'view_item'          => 'Voir un bloc liste',
		'all_items'          => 'Tous les blocs listes',
		'search_items'       => 'Rechercher un bloc liste',
		'parent_item_colon'  => 'Parent Item',
		'not_found'          => 'Aucun bloc liste',
		'not_found_in_trash' => 'Aucun bloc liste dans la corbeille'
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'solutionpost/custom-post-solution.php',
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'list-serveat' ),
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-groups',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => 4,
		'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail','revisions','page-attributes'),
	);

	register_post_type( 'list-serveat', $args );
}
list_serveat();


/** pack serveat */
function pack_serveat() {
	$labels = array(
		'name'               => 'Pack Solution',
		'singular_name'      => 'Pack Solution',
		'menu_name'          => 'Pack Solution',
		'name_admin_bar'     => 'Pack Solution',
		'add_new'            => 'Ajouter un nouveau bloc du pack',
		'add_new_item'       => 'Ajouter un bloc du pack',
		'new_item'           => 'Nouveau bloc du pack',
		'edit_item'          => 'Editer un bloc du pack',
		'view_item'          => 'Voir un bloc du pack',
		'all_items'          => 'Tous les blocs du pack',
		'search_items'       => 'Rechercher un bloc du pack',
		'parent_item_colon'  => 'Parent Item',
		'not_found'          => 'Aucun bloc du pack',
		'not_found_in_trash' => 'Aucun bloc du pack dans la corbeille'
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'solutionpost/custom-post-solution.php',
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'pack-serveat' ),
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-groups',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => 4,
		'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail','revisions','page-attributes'),
	);

	register_post_type( 'pack-serveat', $args );
}
pack_serveat();


/** card asset */
function card_asset() {
	$labels = array(
		'name'               => 'Atout Serveat',
		'singular_name'      => 'Atout Serveat',
		'menu_name'          => 'Atout Serveat',
		'name_admin_bar'     => 'Atout Serveat',
		'add_new'            => 'Ajouter un nouveau atout',
		'add_new_item'       => 'Ajouter un atout',
		'new_item'           => 'Nouveau atout',
		'edit_item'          => 'Editer un atout',
		'view_item'          => 'Voir un atout',
		'all_items'          => 'Tous les atouts',
		'search_items'       => 'Rechercher un atout',
		'parent_item_colon'  => 'Parent Item',
		'not_found'          => 'Aucun atout',
		'not_found_in_trash' => 'Aucun atout dans la corbeille'
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'solutionpost/custom-post-solution.php',
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'atout-serveat' ),
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-groups',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => 4,
		'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail','revisions','page-attributes'),
	);

	register_post_type( 'atout-serveat', $args );
}
card_asset();
			
			
