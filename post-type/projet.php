<?php
function cpt_produits() {
	$menuName = 'Projets';
	$single = 'Projet';
	$plural = 'Projets';
	$slug_post = 'projet';
	$dashicon = 'dashicons-admin-links';
  
	$labels = array(
		'name'                  => _x( $plural, 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( $single, 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( $menuName, 'text_domain' ),
		'name_admin_bar'        => __( $menuName, 'text_domain' ),
		'archives'              => __( 'Archive', 'text_domain' ),
		'attributes'            => __( 'Attributs', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent', 'text_domain' ),
		'all_items'             => __( 'Tous', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter', 'text_domain' ),
		'add_new'               => __( 'Ajouter', 'text_domain' ),
		'new_item'              => __( 'Ajouter', 'text_domain' ),
		'edit_item'             => __( 'Editer', 'text_domain' ),
		'update_item'           => __( 'Mettre à jour', 'text_domain' ),
		'view_item'             => __( 'Voir', 'text_domain' ),
		'view_items'            => __( 'Voir', 'text_domain' ),
		'search_items'          => __( 'Rechercher', 'text_domain'),
		'not_found'             => __( 'Non trouvé','text_domain' ),
		'not_found_in_trash'    => __( 'Non trouvé', 'text_domain' ),
		'featured_image'        => __( 'Image à la une', 'text_domain' ),
		'set_featured_image'    => __( 'Définir', 'text_domain' ),
		'remove_featured_image' => __( 'Retirer', 'text_domain'),
		'use_featured_image'    => __( 'Utiliser', 'text_domain' ),
		'insert_into_item'      => __( 'Insérer', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded', 'text_domain' ),
		'items_list'            => __( 'List', 'text_domain' ),
		'items_list_navigation' => __( 'List', 'text_domain' ),
		'filter_items_list'     => __( 'Filtre', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( $single, 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'editor' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => $dashicon,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'show_in_rest'			=> true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( $slug_post, $args );

}
add_action( 'init', 'cpt_produits', 0 );

?>