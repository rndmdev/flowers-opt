<?php

/* включаем поддержку миниатюр */
add_theme_support('post-thumbnails');

/* Автоматический title через хук wp_head() */
add_theme_support( 'title-tag' );

/* Страница настроек */
if( function_exists('acf_add_options_page') ) {
	$option_page = acf_add_options_page(array(
		'page_title'  => 'Настройки сайта',
		'menu_title'  => 'Настройки сайта',
		'menu_slug'   => 'theme-general-settings',
		'capability'  => 'edit_posts',
		'redirect'    => false
	));
}

function scf_insta_photos() {
	$user = get_field('instagram_user', 'options');
	$count = get_field('instagram_counts', 'options');

	$instagram = new \InstagramScraper\Instagram();
	$medias = $instagram->getMedias($user, $count);

	$images_array = array();

	foreach ( $medias as $media) {
		$images_array[] = $media->getImageThumbnailUrl();
	}

	update_field('instagram_raw', $images_array, 'options');
}

if ( ! wp_next_scheduled( 'scf_do_instagram' ) ) {
	wp_schedule_event( time(), 'hourly', 'scf_do_instagram' );
}

// добавляем крон хук
add_action( 'scf_do_instagram', 'scf_insta_photos' );
