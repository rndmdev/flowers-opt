<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

//$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
//$post_thumbnail_id = $product->get_image_id();
//$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
//	'woocommerce-product-gallery',
//	'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
//	'woocommerce-product-gallery--columns-' . absint( $columns ),
//	'images',
//) );

global $post, $product;
$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$thumbnail_size    = apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' );
$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
$full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id, $thumbnail_size );
$placeholder       = has_post_thumbnail() ? 'with-images' : 'without-images';
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . $placeholder,
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	) );
$thumb             = get_the_post_thumbnail_url( $post->ID, 'shop_thumbnail' ); ?>
<?php

$attributes = array(
	'title'                   => get_post_field( 'post_title', $post_thumbnail_id ),
	'data-caption'            => get_post_field( 'post_excerpt', $post_thumbnail_id ),
	'data-large_image_width'  => $full_size_image[1],
	'data-large_image_height' => $full_size_image[2],
);

if ( has_post_thumbnail() ) {
	$html = '<div class="swiper-slide big_tov">';
	$html .= '<a href="'.get_the_post_thumbnail_url($post->ID, "full").'">';
	$html .= get_the_post_thumbnail( $post->ID, 'shop_single', $attributes );
	$html .= '</a>';
	$html .= '</div>';
} else {
	$html = '<div class="swiper-slide">';
	$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
	$html .= '</div>';
}
?>

<div class="product-card-slider">
	<div class="swiper-container gallery-top product-card-slider-main">
		<div class="swiper-wrapper">
			<?php

			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
			do_action( 'woocommerce_product_thumbnails' );
			?>
		</div>
	</div>
	<div class="swiper-container gallery-thumbs product-card-slider-thumbs">
		<div class="swiper-wrapper">
			<?php

			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
			do_action( 'woocommerce_product_thumbnails' );
			?>
		</div>
	</div>
	<div class="next-gallery-thumbs-slider"></div>
	<div class="prev-gallery-thumbs-slider"></div>
</div>
