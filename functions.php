<?php

    function load_stylesheets()
    {
        wp_register_style('font', get_template_directory_uri() . '/lib/flaticon/font/flaticon.css', array(), 1, 'all');
        wp_enqueue_style('font');

        wp_register_style('bootstrap',get_template_directory_uri() . '/css/style.css', array(), 1, 'all' );
        wp_enqueue_style('bootstrap');

        wp_register_style('carousal',get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), 1, 'all' );
        wp_enqueue_style('carousal');

        wp_register_style('lightbox',get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', array(), 1, 'all' );
        wp_enqueue_style('lightbox');
    
        wp_register_style('custom',get_template_directory_uri() . '/custom.css', array(), 1, 'all' );
        wp_enqueue_style('custom');
    }
    add_action('wp_enqueue_scripts','load_stylesheets');    

    /* load scripts */

    function addjs()
    {
        wp_register_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array() , 1, 1, 1);
        wp_enqueue_script('easing');

        wp_register_script('carousal', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array() , 1, 1, 1);
        wp_enqueue_script('carousal');

        wp_register_script('isotope', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array() , 1, 1, 1);
        wp_enqueue_script('isotope');

        wp_register_script('lightbox', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array() , 1, 1, 1);
        wp_enqueue_script('lightbox');

        wp_register_script('bootstrap', get_template_directory_uri() . '/mail/jqBootstrapValidation.min.js', array() , 1, 1, 1);
        wp_enqueue_script('bootstrap');

        wp_register_script('mail', get_template_directory_uri() . '/mail/contact.js', array() , 1, 1, 1);
        wp_enqueue_script('mail');

        wp_register_script('jquery', get_template_directory_uri() . '/js/main.js', array() , 1, 1, 1);
        wp_enqueue_script('jquery');

        wp_register_script('custom', get_template_directory_uri() . '/custom.js', array() , 1, 1, 1);
        wp_enqueue_script('custom');
    } 


/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/
// Create 1 Custom Post type for a Demo, called projects

function post_type_project(){
	
	$singular = 'project';
	$plural = 'projects';

$labels = array(
	'name' 					=> $plural,
	'singular_name' 		=> $singular,
	'add_name' 				=> 'Add New'. $singular,
	'add_new_item'			=> 'Add New' . $singular,
	'edit' 					=> 'Edit'. $singular,
	'edit_item'				=> 'Edit' . $singular,
	'all_items'             => 'All ' . $plural,
    'view' 					=> 'view'. $singular,
	'view_item' 			=> 'View' . $singular,	
	'search_term' 			=> 'Search' . $plural,
	'parent' 				=> 'Parent' . $singular,
	'not_found' 			=> 'No' . $plural .'found',
	'not_found_in_trash'	=> 'No' . $plural .'found in trash',
);

$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'projects' ),
		'menu_icon'          => 'dashicons-products',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title',  'thumbnail' , 'editor', 'excerpt' )
	);

register_post_type('projects-post', $args);


}
add_action('init','post_type_project');


//Category

function register_taxonomy_projects_category(){

	$singular = 'project Category';
	$plural = 'projects Category ';

    $labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search' .$plural ,
		'popular_items'              => 'Popular' .$plural ,
		'all_items'                  => 'All' .$plural ,
		'parent_item'                =>  null,
		'parent_item_colon'          =>  null,
		'edit_item'                  => 'Edit' .$singular ,
		'update_item'                => 'Update' .$singular ,
		'add_new_item'               => 'Add' .$singular ,
		'new_item_name'              => 'New' .$singular. 'Name',
		'separate_items_with_commas' => 'separate' .$singular. 'With commas',
		'add_or_remove_items'        => 'Add or Remove' .$plural ,
		'choose_from_most_used'      => 'choose from most used' .$plural ,
		'not_found'                  => 'No' . $plural .'found',
		'menu_name'                  => $plural,
	);

 $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'projects-category' ),
	);

register_taxonomy( 'projects-category','projects-post', $args );
}
add_action('init','register_taxonomy_projects_category');


//Tag

function register_taxonomy_projects_tag(){

	$singular = 'project Tag';
	$plural = 'projects Tag';


$labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search' .$plural ,
		'popular_items'              => 'Popular' .$plural ,
		'all_items'                  => 'All' .$plural ,
		'parent_item'                =>  null,
		'parent_item_colon'          =>  null,
		'edit_item'                  => 'Edit' .$singular ,
		'update_item'                => 'Update' .$singular ,
		'add_new_item'               => 'Add' .$singular ,
		'new_item_name'              => 'New' .$singular. 'Name',
		'separate_items_with_commas' => 'separate' .$singular. 'With commas',
		'add_or_remove_items'        => 'Add or Remaove' .$plural ,
		'choose_from_most_used'      => 'choose from most used' .$plural ,
		'not_found'                  => 'No' . $plural .'found',
		'menu_name'                  => $plural,
	);

 $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'projects-tag' ),
	);

register_taxonomy( 'projects-tag', 'projects-post', $args );
}
add_action('init','register_taxonomy_projects_tag');

// fetured image 

	add_theme_support( 'post-thumbnails' );
    the_post_thumbnail(); 
    set_post_thumbnail_size( 50, 50);
    add_image_size( 'single-post-thumbnail', 590, 180 );
    the_post_thumbnail( 'single-post-thumbnail' );

/* end custom post type code*/

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/
// Create 1 Custom Post type for a Demo, called teams

function post_type_team(){
	
	$singular = 'team';
	$plural = 'teams';

$labels = array(
	'name' 					=> $plural,
	'singular_name' 		=> $singular,
	'add_name' 				=> 'Add New'. $singular,
	'add_new_item'			=> 'Add New' . $singular,
	'edit' 					=> 'Edit'. $singular,
	'edit_item'				=> 'Edit' . $singular,
	'all_items'             => 'All ' . $plural,
    'view' 					=> 'view'. $singular,
	'view_item' 			=> 'View' . $singular,	
	'search_term' 			=> 'Search' . $plural,
	'parent' 				=> 'Parent' . $singular,
	'not_found' 			=> 'No' . $plural .'found',
	'not_found_in_trash'	=> 'No' . $plural .'found in trash',
);

$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'teams' ),
		'menu_icon'          => 'dashicons-businessman',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title',  'thumbnail' , 'editor', 'excerpt' )
	);

register_post_type('teams-post', $args);


}
add_action('init','post_type_team');


//Category

function register_taxonomy_teams_category(){

	$singular = 'team Category';
	$plural = 'teams Category ';

    $labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search' .$plural ,
		'popular_items'              => 'Popular' .$plural ,
		'all_items'                  => 'All' .$plural ,
		'parent_item'                =>  null,
		'parent_item_colon'          =>  null,
		'edit_item'                  => 'Edit' .$singular ,
		'update_item'                => 'Update' .$singular ,
		'add_new_item'               => 'Add' .$singular ,
		'new_item_name'              => 'New' .$singular. 'Name',
		'separate_items_with_commas' => 'separate' .$singular. 'With commas',
		'add_or_remove_items'        => 'Add or Remove' .$plural ,
		'choose_from_most_used'      => 'choose from most used' .$plural ,
		'not_found'                  => 'No' . $plural .'found',
		'menu_name'                  => $plural,
	);

 $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'teams-category' ),
	);

register_taxonomy( 'teams-category','teams-post', $args );
}
add_action('init','register_taxonomy_teams_category');


//Tag

function register_taxonomy_teams_tag(){

	$singular = 'team Tag';
	$plural = 'teams Tag';


$labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search' .$plural ,
		'popular_items'              => 'Popular' .$plural ,
		'all_items'                  => 'All' .$plural ,
		'parent_item'                =>  null,
		'parent_item_colon'          =>  null,
		'edit_item'                  => 'Edit' .$singular ,
		'update_item'                => 'Update' .$singular ,
		'add_new_item'               => 'Add' .$singular ,
		'new_item_name'              => 'New' .$singular. 'Name',
		'separate_items_with_commas' => 'separate' .$singular. 'With commas',
		'add_or_remove_items'        => 'Add or Remaove' .$plural ,
		'choose_from_most_used'      => 'choose from most used' .$plural ,
		'not_found'                  => 'No' . $plural .'found',
		'menu_name'                  => $plural,
	);

 $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'teams-tag' ),
	);

register_taxonomy( 'teams-tag', 'teams-post', $args );
}
add_action('init','register_taxonomy_teams_tag');


/* end custom post type code*/

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/
// Create 1 Custom Post type for a Demo, called Services

function post_type_Service(){
	
	$singular = 'Service';
	$plural = 'Services';

$labels = array(
	'name' 					=> $plural,
	'singular_name' 		=> $singular,
	'add_name' 				=> 'Add New'. $singular,
	'add_new_item'			=> 'Add New' . $singular,
	'edit' 					=> 'Edit'. $singular,
	'edit_item'				=> 'Edit' . $singular,
	'all_items'             => 'All ' . $plural,
    'view' 					=> 'view'. $singular,
	'view_item' 			=> 'View' . $singular,	
	'search_term' 			=> 'Search' . $plural,
	'parent' 				=> 'Parent' . $singular,
	'not_found' 			=> 'No' . $plural .'found',
	'not_found_in_trash'	=> 'No' . $plural .'found in trash',
);

$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Services' ),
		'menu_icon'          => 'dashicons-businessman',
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title',  'thumbnail' , 'editor', 'excerpt' )
	);

register_post_type('Services-post', $args);


}
add_action('init','post_type_Service');


//Category

function register_taxonomy_Services_category(){

	$singular = 'Service Category';
	$plural = 'Services Category ';

    $labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search' .$plural ,
		'popular_items'              => 'Popular' .$plural ,
		'all_items'                  => 'All' .$plural ,
		'parent_item'                =>  null,
		'parent_item_colon'          =>  null,
		'edit_item'                  => 'Edit' .$singular ,
		'update_item'                => 'Update' .$singular ,
		'add_new_item'               => 'Add' .$singular ,
		'new_item_name'              => 'New' .$singular. 'Name',
		'separate_items_with_commas' => 'separate' .$singular. 'With commas',
		'add_or_remove_items'        => 'Add or Remove' .$plural ,
		'choose_from_most_used'      => 'choose from most used' .$plural ,
		'not_found'                  => 'No' . $plural .'found',
		'menu_name'                  => $plural,
	);

 $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Services-category' ),
	);

register_taxonomy( 'Services-category','Services-post', $args );
}
add_action('init','register_taxonomy_Services_category');


//Tag

function register_taxonomy_Services_tag(){

	$singular = 'Service Tag';
	$plural = 'Services Tag';


$labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search' .$plural ,
		'popular_items'              => 'Popular' .$plural ,
		'all_items'                  => 'All' .$plural ,
		'parent_item'                =>  null,
		'parent_item_colon'          =>  null,
		'edit_item'                  => 'Edit' .$singular ,
		'update_item'                => 'Update' .$singular ,
		'add_new_item'               => 'Add' .$singular ,
		'new_item_name'              => 'New' .$singular. 'Name',
		'separate_items_with_commas' => 'separate' .$singular. 'With commas',
		'add_or_remove_items'        => 'Add or Remaove' .$plural ,
		'choose_from_most_used'      => 'choose from most used' .$plural ,
		'not_found'                  => 'No' . $plural .'found',
		'menu_name'                  => $plural,
	);

 $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Services-tag' ),
	);

register_taxonomy( 'Services-tag', 'Services-post', $args );
}
add_action('init','register_taxonomy_Services_tag');


/* end custom post type code*/