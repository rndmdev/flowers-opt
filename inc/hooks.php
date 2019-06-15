<?php

/* Отключаем емоджи */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Remove woocommerce breadcrumbs
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_breadcrumb - 20
 */
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

/*
 * Редактируем страницу товара
 * */
add_action( 'wp', 'scf_woocommerce_single_product_hooks' );

function scf_woocommerce_single_product_hooks() {

	if ( is_product() ) {
		// Убираем сайдбар на странице товара
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

		// Добавляем наличие товара
		add_action( 'woocommerce_single_product_summary', 'scf_woocommerce_template_single_presence', 12 );
		function scf_woocommerce_template_single_presence() {

			if ( get_post_meta( get_the_ID(), '_stock_status', true ) == 'outofstock' ) {
				echo '<div class="presence outofstock">Статус: <span>Нет в наличии</span></div>';
			} else {
				echo '<div class="presence stock">Статус: <span>В наличии</span></div>';
			}
		}
	}
}

/**
 * Hook: woocommerce_single_product_summary.
 *
 * @hooked woocommerce_template_single_meta - 40
 */
remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta', 40);

/**
 * 	Remove Cross-Sells from the shopping cart page
 */
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');
