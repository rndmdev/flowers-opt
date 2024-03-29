<?php
/*
Template Name: Главная
*/

?>
<?php get_header(); ?>

<div class="section hero" style="background-image:url('<?php the_field("hero_image"); ?>');">
	<div class="container">
		<div class="hero-wrap">
			<div class="hero-title"><?php the_field('hero_title'); ?></div>
			<div class="hero-descr"><?php the_field('hero_subtitle'); ?></div>
			<a href="<?php echo get_field('hero_link')['url']; ?>" class="hero-btn btn btn-white"><?php echo get_field('hero_link')['title']; ?></a>
		</div>
	</div>
</div>

<div class="section popular">
	<div class="container">
		<div class="section-title">
			<span>ПОПУЛЯРНЫЕ ТОВАРЫ</span>
			<div class="popular-nav">
				<div class="swiper-button-prev popular-slider-prev"></div>
				<div class="swiper-button-next popular-slider-next"></div>
			</div>
		</div>

		<div class="popular-slider swiper-container">
			<div class="swiper-wrapper woocommerce">
                <?php scf_get_popular_products(); ?>
			</div>
		</div>
	</div>
</div>

<div class="section proposal">
	<div class="container">
		<div class="section-title"><span>СПЕЦИАЛЬНОЕ ПРЕДЛОЖЕНИЕ</span></div>
	</div>
	<div class="section-wrap">
		<div class="container">
			<div class="proposal-wrap">
				<div class="proposal-img"><img src="<?php the_field('spec_image'); ?>" alt=""></div>
				<div class="proposal-text">
					<div class="proposal-title"><?php the_field('spec_title'); ?></div>
					<div class="proposal-discount"><?php the_field('spec_subtitle'); ?></div>
					<div class="proposal-descr"><?php the_field('spec_descr'); ?></div>
					<div class="proposal-timer" id="countdowntimer_single"><span id="future_date_single" data-future-date="<?php the_field('spec_date'); ?>"></span></div>
					<div class="proposal-btn"><a href="<?php echo get_field('spec_link')['url']; ?>" class="btn btn-grey"><?php echo get_field('spec_link')['title']; ?></a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section about">
	<div class="container">
		<div class="section-title"><span>О НАС</span></div>
		<div class="section-wrap">
			<div class="section-btn">
				<div class="section-btn-text">Текст в две строки</div>
				<a href="#" class="section-btn-link btn btn-accent-borderd">КНОПКА</a>
			</div>
			<div class="section-img"></div>
			<div class="section-text">
				<h2>Доставка цветов по Москве уже через 2 часа после заказа</h2>
				<h3>Подзаголовок</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
					nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
					culpa qui officia deserunt mollit anim id est laborum. </p>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
			</div>
		</div>
	</div>
</div>

<?php $reviews = get_field('reviews');
if ($reviews): ?>
	<div class="section reviews">
		<div class="container">
			<div class="section-title"><span>ОТЗЫВЫ</span></div>
		</div>
		<div class="section-wrap">
			<div class="container">
				<div class="reviews-wrap">

					<div class="left">
						<div class="reviews-icon"><img src="<?php echo THEME_IMG; ?>ricon.png" alt=""></div>
						<div class="reviews-slider swiper-container">
							<div class="swiper-wrapper">

                                <?php foreach($reviews as $review): ?>
									<div class="swiper-slide">
										<div class="reviews-item">
											<div class="reviews-text"><?php echo $review['text']; ?></div>
											<div class="reviews-name"><?php echo $review['author']; ?></div>
										</div>
									</div>
                                <?php endforeach; ?>

							</div>
							<div class="reviews-pagination"></div>
						</div>
					</div>

					<div class="right">
						<div class="reviews-img"><img src="<?php echo THEME_IMG; ?>fdbk.png" alt=""></div>
					</div>

				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php get_template_part('template-parts/feedback'); ?>

<div class="section instagram">
	<div class="instagram-title"><span>#ПервыйЦветочныйОптовый</span></div>
	<div class="instagram-gallery swiper-container">
		<div class="swiper-wrapper">
            <?php $instagram_gallery = get_field('instagram_raw', 'options'); ?>
            <?php foreach ($instagram_gallery as $instagram_item) : ?>
				<div class="swiper-slide">
					<a href="<?php echo get_field('instagram_link', 'options'); ?>" class="instagram-gallery-item" target="_blank"><img src="<?php echo $instagram_item; ?>"></a>
				</div>
            <?php endforeach; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
