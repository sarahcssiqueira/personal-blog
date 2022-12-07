<?php
/**
 * Theme functions and definitions
 * Functions prefix => pb
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */
?>
<?php 

/* Enqueue Styles */

add_action ( 'wp_enqueue_scripts' , 'pb_register_styles' );

function pb_register_styles () {
        
    $version = wp_get_theme()->get ( 'Version' );
    wp_enqueue_style( 'pb_style' , get_template_directory_uri() . "/style.css" , array(), $version,'all');
    wp_enqueue_style(' pb_style_font-awesome' , "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css", array(), '6.2.1','all');
    wp_enqueue_style( 'pb_style_jquery' , "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '6.2.0','all');
};


/* Enqueue Scripts */

add_action( 'wp_enqueue_scripts' , 'pb_register_scripts' );

function pb_register_scripts() {

    wp_enqueue_script( 'pb_script_js' , get_template_directory_uri()."/inc/js/main.js", array(), '1.0',true);
    wp_enqueue_script( 'pb_script_jquery' , "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '3.5.1',true);
    
};


/* Custom Post Types => Projects */


add_action( 'init' , 'pb_new_cpt_projects' );

function pb_new_cpt_projects() {
    $supports = array(
        'title',
        'editor',
        'author', 
        'thumbnail', 
        'excerpt', 
        'revisions', 
        'post-formats', 
        );

    $labels = array(
        'name' => _x('projects', 'plural'),
        'singular_name' => _x('Projects', 'singular'),
        'menu_name' => _x('Projects', 'admin menu'),
        'name_admin_bar' => _x('Projects', 'admin bar'),
        'add_new' => _x('Add Project', 'add new project'),
        'add_new_item' => __('Add New Project'),
        'new_item' => __('New Project', 'New project'),
        'edit_item' => __( 'Edit project' ),
        'view_item' => __( 'View projects' ),
        'all_items' => __('All Projects'),
        'search_items' => __('Search projects'),
        'not_found' => __('No projects found.'),
        );
        
        $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'projects'),
        'has_archive' => true,
        'hierarchical' => false,
        );

        
    register_post_type('projects', $args);
    };


/* Register Menus */


add_action ( 'init' , 'pb_menus' );

function pb_menus () {    
    $locations = array(
           'primary'=>"Primary Menu" ,
           'footer'=>"Footer Menu"
    );

    register_nav_menus($locations);
};


