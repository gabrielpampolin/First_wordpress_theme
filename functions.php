<?php

require get_template_directory() . '/inc/customizer.php';

function wpdevs_load_scripts() {
    // carrega nossos arquivos css (id, puxando css, arquivo dependente, versão, formato do arquivo)
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css' ), 'all');
    
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?Poppins:wght@400;700&family=Vollkorn:ital,wght@0,400;0,700;1,400&display=swap', array(), null, 'all');

    // Chamando arquivo JS para menu mobile (handle - id, onde ele esta localizado, é dependende de outro arquivo, versão, onde ele é puxado, depois do footer ou dentro do header... true = depois do footer )
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');

function wpdevs_config() {
    // Registrando menu footer e header
    register_nav_menus( 
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu'
        )
    );

    add_theme_support('custom-header', array(
        'height' => 225,
        'width' => 1920
    ));

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height' => 110,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true
    ));

    add_theme_support('automatic-feed-links');

    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'wpdevs_config', 0);


add_action('widgets_init', 'wpdevs_sidebars');

function wpdevs_sidebars() {
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'This is the Blog Sidebar, you can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Service 1',
            'id' => 'services-1',
            'description' => 'First Service Area.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Service 2',
            'id' => 'services-2',
            'description' => 'Second Service Area.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Service 3',
            'id' => 'services-3',
            'description' => 'Third Service Area.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}

function add_column( $columns ){
	$columns['post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
	return $columns;
}
add_filter('manage_posts_columns', 'add_column', 5);

function column_content( $column, $id ){
	if( $column === 'post_id_clmn')
		echo $id;
}
add_action('manage_posts_custom_column', 'column_content', 5, 2);

if(! function_exists('wp_body_open')) {
    function wp_body_open() {
        do_action('wp_body_open');
    }
}