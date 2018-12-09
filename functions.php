<?php

	add_action('wp_footer', function() {
		echo "1111";
	});

	//регистрация меню
	add_action('after_setup_theme', function() {
		register_nav_menu('top','Вверхнее меню');
	});

	// add_action('wp_head', function() {
	// 	echo "sdsdd";
	// });

	add_action('wp_enqueue_scripts', function () {
		wp_enqueue_style('test-main', get_stylesheet_uri());
	});

	//регистрация сайдбара

	add_action('widgets_init', function() {
	register_sidebar([
		'name' => 'Sidebar Right',
		'id' => 'my-sidebar',
		'description' => 'Правая колонка'
		]);
	});

	// add_action('wp_enqueue_scripts', function () {
	// 	wp_enqueue_style('test-main', get_template_directory_uri().'/assets/main.js');
	// });

