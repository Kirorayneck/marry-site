<?php 
if (! function_exists('Sizovfamily_setup')) {
  function Sizovfamily_setup() {
    
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( full );
		
  }
  add_action( 'after_setup_theme', 'Sizovfamily_setup' );
}
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'sizovfamily_scripts' );
function sizovfamily_scripts() {
	
  wp_enqueue_style( 'sizovfamily', get_template_directory_uri() . '/css/style.css');

  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
	wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), true );
	wp_enqueue_script( 'slick-activate', get_template_directory_uri() . '/js/slick-activate.js', array('slick'), true );
	
	
}

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('gallery', array(
		'labels'             => array(
			'name'               => 'Фото', // Основное название типа записи
			'singular_name'      => 'Фото', // отдельное название записи типа Book
			'add_new'            => 'Добавить фото',
			'add_new_item'       => 'Добавить новое фото',
			'edit_item'          => 'Редактировать фото',
			'new_item'           => 'Новая фото',
			'view_item'          => 'Посмотреть фото',
			'search_items'       => 'Найти фото',
			'not_found'          => 'фото не найдено',
			'not_found_in_trash' => 'В корзине фото не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Фото'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-format-gallery',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	) );
}