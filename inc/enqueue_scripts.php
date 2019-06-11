<?php

/* правильный способ подключить стили и скрипты */
function scf_theme_scripts() {

	// Подключаем стили
	wp_enqueue_style( 'swiper-style', THEME_CSS . 'swiper.min.css' );
	wp_enqueue_style( 'magnific-style', THEME_CSS . 'magnific-popup.min.css' );
	wp_enqueue_style( 'main-style', THEME_CSS . 'main.css' );
	wp_enqueue_style( 'wp-style', get_stylesheet_uri() );

	// Подключаем скрипты
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/40f995607d.js', array( 'jquery' ) );
	wp_enqueue_script( 'swiper', THEME_JS . 'swiper.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'magnific', THEME_JS . 'magnific-popup.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'timer-scr', THEME_JS . 'jQuery.countdownTimer.min.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_script( 'timer-localize-scr', THEME_JS . 'jQuery.countdownTimer-ru.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_script( 'main-scr', THEME_JS . 'main.js', array( 'jquery' ), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'scf_theme_scripts' );

