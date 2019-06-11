<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<div class="section hero" style="background-image:url('<?php echo THEME_IMG; ?>hero.jpg');">
	<div class="container">
		<div class="hero-wrap">
			<div class="hero-title">СТИЛЬНЫЕ БУКЕТЫ</div>
			<div class="hero-descr">С БЕСПЛАТНОЙ ДОСТАВКОЙ<br>В МОСКВЕ</div>
			<a href="#" class="hero-btn btn btn-white">ВЫБРАТЬ БУКЕТ</a>
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
			<div class="swiper-wrapper">

				<?php for ( $x = 0; $x < 2; $x ++ ) : ?>
					<?php for ( $i = 1; $i < 9; $i ++ ) : ?>
						<div class="swiper-slide">
							<div class="product-item">
								<div class="product-item-img">
									<span class="label">Новинка</span>
									<img src="<?php echo THEME_IMG . 'b' . $i . '.png'; ?>" alt="">
								</div>
								<div class="product-item-title">Pearly Everlasting</div>
								<div class="product-item-price">от <span>1000 ₽</span> <span>1200 ₽</span></div>
								<a class="product-item-btn btn btn-accent">В корзину</a>
							</div>
						</div>
					<?php endfor; ?>
				<?php endfor; ?>
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
				<div class="proposal-img"><img src="<?php echo THEME_IMG; ?>proposal.png" alt=""></div>
				<div class="proposal-text">
					<div class="proposal-title">Поспешите! Горячее предложение!</div>
					<div class="proposal-discount">Скидки <span>до 20 %</span></div>
					<div class="proposal-descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</div>
					<div class="proposal-timer" id="countdowntimer_single"><span id="future_date_single" data-future-date="2019/07/19 00:00:00"></span></div>
					<div class="proposal-btn"><a href="#" class="btn btn-grey">Подробнее</a></div>
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

							<?php for ( $i = 1; $i < 4; $i ++ ) : ?>
								<div class="swiper-slide">
									<div class="reviews-item">
										<div class="reviews-text">«Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
											magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat».
										</div>
										<div class="reviews-name">Виктория, г. Москва</div>
									</div>
								</div>
							<?php endfor; ?>

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

<div class="section feedback">
	<div class="container">
		<div class="section-wrap">
			<div class="feedback-descr">
				<span>Подписка на новости сайта</span>
			</div>
			<div class="feedback-img"></div>
			<div class="feedback-text">
				<div class="feedback-title">Подписывайтесь на новости</div>
				<div class="feedback-email">Электронная почта</div>
				<div class="feedback-link"><a href="#" class="btn btn-grey">Подписаться</a></div>
				<div class="feedback-notice">Эсли вы нажали на кнопку, то согласны на<br><a href="#">обработку персональных данных</a></div>
			</div>
		</div>
	</div>
</div>

<div class="section instagram">
	<div class="instagram-title"><span>#ПервыйЦветочныйОптовый</span></div>
	<div class="instagram-gallery swiper-container">
		<div class="swiper-wrapper">
			<?php $instagram_gallery = get_field( 'instagram_raw', 'options' ); ?>
			<?php foreach ( $instagram_gallery as $instagram_item ) : ?>
				<div class="swiper-slide">
					<a href="<?php echo get_field( 'instagram_link', 'options' ); ?>" class="instagram-gallery-item" target="_blank"><img src="<?php echo $instagram_item; ?>"></a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>