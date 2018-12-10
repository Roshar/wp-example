<?php

	add_action('wp_footer', function() {
		echo "1111";
	});

	//регистрация меню
	add_action('after_setup_theme', function() {
		register_nav_menu('top','Вверхнее меню');
	});

	//добавление возможности вставки в статьи миниатюру
	add_action('after_setup_theme', function(){
		add_theme_support('post-thumbnails');
	});

	//добовляет возможность отображать в теге title название каждой страницы
	add_action('after_setup_theme', function(){
		add_theme_support('title-tag');
	});

	add_action('wp_enqueue_scripts', function () {
		wp_enqueue_style('test-main', get_stylesheet_uri());
	});

	//регистрация сайдбара

	add_action('widgets_init', function() {
	register_sidebar([
		'name' => 'Sidebar Right',
		'id' => 'my-sidebar',
		'description' => 'Правая колонка',
		'before_widget' => null,
		'after_widget'  => null,
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		]);
	});

	// add_action('wp_enqueue_scripts', function () {
	// 	wp_enqueue_style('test-main', get_template_directory_uri().'/assets/main.js');
	// });

