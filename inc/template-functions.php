<?php

/* включаем поддержку миниатюр */
add_theme_support('post-thumbnails');

/* Автоматический title через хук wp_head() */
add_theme_support('title-tag');

/* woocommerce */
add_theme_support('woocommerce');

/* Страница настроек */
if (function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' => 'Настройки сайта',
        'menu_title' => 'Настройки сайта',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ));
}

function scf_insta_photos()
{

    $user  = get_field('instagram_user', 'options');
    $count = get_field('instagram_counts', 'options');

    $instagram = new \InstagramScraper\Instagram();
    $medias    = $instagram->getMedias($user, $count);

    $images_array = array();

    foreach ($medias as $media) {
        $images_array[] = $media->getImageThumbnailUrl();
    }

    update_field('instagram_raw', $images_array, 'options');
}

if ( ! wp_next_scheduled('scf_do_instagram')) {
    wp_schedule_event(time(), 'hourly', 'scf_do_instagram');
}

// добавляем крон хук
add_action('scf_do_instagram', 'scf_insta_photos');

//Вывод радио-баттонов выбора вариаций (нуждается в рефакторинге)
function scf_get_variation_radio()
{

    global $woocommerce, $product, $post;

    //Получим вариации
    $variations           = $product->get_variation_attributes();
    $available_variations = $product->get_available_variations();
    $count                = 0;

    r($product);
    r($variations);
    r($available_variations);

    foreach ($variations as $variation => $options) {
        echo '
			<label><input type="radio" name="variation" data-price="' . '' . '" value="' . '' . '" >' . wc_attribute_label($variation) . '</label>';
    }

    //Выводим их
    foreach ($available_variations as $key => $value) {

        $val   = $value['attributes']['attribute_fasovka'];
        $price = esc_html(wc_price($value['display_price']));

        //выводим все, что нужно
        echo '
			<input type="radio" id="fasovka-' . $key . '" name="variation" data-price="' . $price . '" value="' . $val . '" >
			<label for="fasovka-' . $key . '">' . $val . '</label>';

        if ($count === 0) {
            echo '<span>или</span>';
        }

        $count++;
    }

}

function scf_get_popular_products()
{

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 8,
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_visibility',
                'field'    => 'name',
                'terms'    => 'featured',
            ),
        ),
    );
    $loop = new WP_Query($args);

    if ($loop->have_posts()) {

        while ($loop->have_posts()) : $loop->the_post();

            echo "<div class='swiper-slide'><ul class='products'>";
            wc_get_template_part('content', 'product');
            echo "</ul></div>";

        endwhile;

    } else {
        echo __('No products found');
    }
    wp_reset_postdata();

}
