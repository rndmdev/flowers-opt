<?php

/* включаем поддержку миниатюр */
add_theme_support('post-thumbnails');

/* Автоматический title через хук wp_head() */
add_theme_support( 'title-tag' );

/* woocommerce */
add_theme_support( 'woocommerce' );

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

// Remove woocommerce breadcrumbs
// * Hook: woocommerce_before_main_content.
// * @hooked woocommerce_breadcrumb - 20
remove_action('woocommerce_before_main_content','woocommerce_breadcrumb', 20);

add_action('init', function(){
	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
	add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
});

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
	function woocommerce_template_loop_product_thumbnail() {
		echo woocommerce_get_product_thumbnail();
	}
}

if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {
	function woocommerce_get_product_thumbnail( $size = 'shop_catalog' ) {
		global $post, $woocommerce;
		$output = '<div class="product-thumb-wrap">';

		if ( has_post_thumbnail() ) {
			$output .= get_the_post_thumbnail( $post->ID, $size );
		} else {
			$output .= wc_placeholder_img( $size );
			// Or alternatively setting yours width and height shop_catalog dimensions.
			// $output .= '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />';
		}
		$output .= '</div>';
		return $output;
	}
}
