<?php

add_action('admin_notices', function() {
    echo '<div class="notice notice-success"><p>functions.php is working</p></div>';
});

function rtcamp_enqueue_styles() {
    wp_enqueue_style(
        'rtcamp-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'rtcamp_enqueue_styles');


function rtcamp_register_projects_cpt() {

    register_post_type('project', array(
        'labels' => array(
            'name'          => 'Projects',
            'singular_name' => 'Project',
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-portfolio',
        'supports'     => array('title', 'editor'),
    ));

}

add_action('init', 'rtcamp_register_projects_cpt');