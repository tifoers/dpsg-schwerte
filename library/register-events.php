<?php

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function dpsg_dahl_register_event_posttype() {

	$labels = array(
		'name'                => __( 'Veranstaltungen', 'dpsg-schwerte' ),
		'singular_name'       => __( 'Veranstaltung', 'dpsg-schwerte' ),
		'add_new'             => _x( 'Veranstaltung hinzufügen', 'dpsg-schwerte', 'dpsg-schwerte' ),
		'add_new_item'        => __( 'Veranstaltung hinzufügen', 'dpsg-schwerte' ),
		'edit_item'           => __( 'Veranstaltung bearbeiten', 'dpsg-schwerte' ),
		'new_item'            => __( 'New Veranstaltung', 'dpsg-schwerte' ),
		'view_item'           => __( 'Veranstaltung ansehen', 'dpsg-schwerte' ),
		'search_items'        => __( 'Veranstaltungen suchen', 'dpsg-schwerte' ),
		'not_found'           => __( 'Keine Veranstaltungen gefunden', 'dpsg-schwerte' ),
		'not_found_in_trash'  => __( 'Keine Veranstaltungen im Papierkorb gefunden', 'dpsg-schwerte' ),
		'parent_item_colon'   => __( 'Eltern Veranstaltung:', 'dpsg-schwerte' ),
		'menu_name'           => __( 'Veranstaltungen', 'dpsg-schwerte' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'thumbnail',
			'excerpt', 'revisions'
			)
	);

	register_post_type( 'dpsg-event', $args );
}

add_action( 'init', 'dpsg_dahl_register_event_posttype' );



/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function dpsg_dahl_register_event_type() {

	$labels = array(
		'name'					=> _x( 'Veranstaltungstypen', 'Taxonomy plural name', 'dpsg-schwerte' ),
		'singular_name'			=> _x( 'Veranstaltungstyp', 'Taxonomy singular name', 'dpsg-schwerte' ),
		'search_items'			=> __( 'Veranstaltungstyp suchen', 'dpsg-schwerte' ),
		'popular_items'			=> __( 'Meistverwendete Veranstaltungstypen', 'dpsg-schwerte' ),
		'all_items'				=> __( 'Alle Veranstaltungstypen', 'dpsg-schwerte' ),
		'parent_item'			=> __( 'Übergeordneter Veranstaltungstyp', 'dpsg-schwerte' ),
		'parent_item_colon'		=> __( 'Übergeordneter Veranstaltungstyp', 'dpsg-schwerte' ),
		'edit_item'				=> __( 'Veranstaltungstyp bearbeiten', 'dpsg-schwerte' ),
		'update_item'			=> __( 'Veranstaltungstyp aktualisieren', 'dpsg-schwerte' ),
		'add_new_item'			=> __( 'Veranstaltungstyp hinzufügen', 'dpsg-schwerte' ),
		'new_item_name'			=> __( 'Neuer Veranstaltungstyp Name', 'dpsg-schwerte' ),
		'add_or_remove_items'	=> __( 'Veranstaltungstyp hinzufügen oder entfernen', 'dpsg-schwerte' ),
		'choose_from_most_used'	=> __( 'Aus dem meistgenutzten Veranstaltungstypen wählen', 'dpsg-schwerte' ),
		'menu_name'				=> __( 'Veranstaltungstyp', 'dpsg-schwerte' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => false,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'dpsg-event-type', array( 'dpsg-event' ), $args );
}

add_action( 'init', 'dpsg_dahl_register_event_type' );



/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function dpsg_dahl_register_event_group() {

	$labels = array(
		'name'					=> _x( 'Veranstaltungs Gruppen', 'Taxonomy plural name', 'dpsg-schwerte' ),
		'singular_name'			=> _x( 'Veranstaltungsgruppe', 'Taxonomy singular name', 'dpsg-schwerte' ),
		'search_items'			=> __( 'Gruppen durchsuchen', 'dpsg-schwerte' ),
		'popular_items'			=> __( 'Meistverwendete Veranstaltungs Gruppen', 'dpsg-schwerte' ),
		'all_items'				=> __( 'Alle Veranstaltungs Gruppen', 'dpsg-schwerte' ),
		'parent_item'			=> __( 'Parent Veranstaltungsgruppe', 'dpsg-schwerte' ),
		'parent_item_colon'		=> __( 'Parent Veranstaltungsgruppe', 'dpsg-schwerte' ),
		'edit_item'				=> __( 'Veranstaltungsgruppe bearbeiten', 'dpsg-schwerte' ),
		'update_item'			=> __( 'Update Veranstaltungsgruppe', 'dpsg-schwerte' ),
		'add_new_item'			=> __( 'Gruppe hinzufügen', 'dpsg-schwerte' ),
		'new_item_name'			=> __( 'Neuer Gruppen Name', 'dpsg-schwerte' ),
		'add_or_remove_items'	=> __( 'Gruppe hinzufügen oder entfernen', 'dpsg-schwerte' ),
		'choose_from_most_used'	=> __( 'Choose from most used dpsg-schwerte', 'dpsg-schwerte' ),
		'menu_name'				=> __( 'Veranstaltungsgruppe', 'dpsg-schwerte' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'dpsg-event-group', array( 'dpsg-event' ), $args );
}

add_action( 'init', 'dpsg_dahl_register_event_group' );