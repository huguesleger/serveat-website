
<?php
	   
/** card avantage */
function card_avantage() {
    $labels = array(
        'name'               => 'Avantages',
        'singular_name'      => 'Avantage',
        'menu_name'          => 'Avantages',
        'name_admin_bar'     => 'Avantages',
        'add_new'            => 'Ajouter un nouveau avantage',
        'add_new_item'       => 'Ajouter un avantage',
        'new_item'           => 'Nouveau avantage',
        'edit_item'          => 'Editer un avantage',
        'view_item'          => 'Voir un avantage',
        'all_items'          => 'Tous les avantages',
        'search_items'       => 'Rechercher un avantage',
        'parent_item_colon'  => 'Parent Item',
        'not_found'          => 'Aucun avantage',
        'not_found_in_trash' => 'Aucun avantage dans la corbeille'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => 'homepost/custom-post-home.php',
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'card-avatange' ),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-smiley',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail','revisions','page-attributes'),
    );

    register_post_type( 'card-avantage', $args );
}
card_avantage();


/** card slider */
function card_slider() {
    $labels = array(
        'name'               => 'Slider',
        'singular_name'      => 'Slide',
        'menu_name'          => 'Slider',
        'name_admin_bar'     => 'slider App',
        'add_new'            => 'Ajouter un nouveau slide',
        'add_new_item'       => 'Ajouter un slide',
        'new_item'           => 'Nouveau slide',
        'edit_item'          => 'Editer un slide',
        'view_item'          => 'Voir un slide',
        'all_items'          => 'Tous les slides',
        'search_items'       => 'Rechercher un slide',
        'parent_item_colon'  => 'Parent Item',
        'not_found'          => 'Aucun slide',
        'not_found_in_trash' => 'Aucun slide dans la corbeille'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => 'homepost/custom-post-home.php',
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'card-slider' ),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-slides',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail','revisions','page-attributes'),
    );

    register_post_type( 'card-slider', $args );
}
card_slider();


/** liste offre */
function list_offer() {
    $labels = array(
        'name'               => 'Offre',
        'singular_name'      => 'Offre',
        'menu_name'          => 'Détail Offre',
        'name_admin_bar'     => 'Détail Offre',
        'add_new'            => 'Ajouter un nouveau détail offre',
        'add_new_item'       => 'Ajouter un détail offre',
        'new_item'           => 'Nouveau détail offre',
        'edit_item'          => 'Editer un détail offre',
        'view_item'          => 'Voir un détail offre',
        'all_items'          => 'Tous les détails offre',
        'search_items'       => 'Rechercher un un détail offre',
        'parent_item_colon'  => 'Parent Item',
        'not_found'          => 'Aucun détail offre',
        'not_found_in_trash' => 'Aucun détail offre dans la corbeille'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => 'homepost/custom-post-home.php',
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'list-offer' ),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-money-alt',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail','revisions','page-attributes'),
    );

    register_post_type( 'list-offer', $args );
}
list_offer();  



/** card client */
function card_client() {
    $labels = array(
        'name'               => 'Client',
        'singular_name'      => 'Client',
        'menu_name'          => 'Satisfaction Client',
        'name_admin_bar'     => 'Satisfaction Client',
        'add_new'            => 'Ajouter un nouveau bloc client',
        'add_new_item'       => 'Ajouter un bloc client',
        'new_item'           => 'Nouveau bloc client',
        'edit_item'          => 'Editer un bloc client',
        'view_item'          => 'Voir un bloc client',
        'all_items'          => 'Tous les blocs client',
        'search_items'       => 'Rechercher un bloc client',
        'parent_item_colon'  => 'Parent Item',
        'not_found'          => 'Aucun bloc client',
        'not_found_in_trash' => 'Aucun bloc client dans la corbeille'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => 'homepost/custom-post-home.php',
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'card-client' ),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-groups',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail','revisions','page-attributes'),
    );

    register_post_type( 'card-client', $args );
}
card_client();            
