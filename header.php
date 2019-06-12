<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<link href="https://fonts.googleapis.com/css?family=Lora|Montserrat:300,400,400i,500,600,700,800&display=swap&subset=cyrillic" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
	<div class="container">
		<div class="header-box">

			<a href="/" class="logo header-main-logo"><img src="<?php echo THEME_IMG; ?>logo.png" alt=""></a>

			<div class="header-icon"><img src="<?php echo THEME_IMG; ?>header-logo.png" alt=""></div>

			<div class="header-nav">

				<a href="/" class="logo"><img src="<?php echo THEME_IMG; ?>logo.png" alt=""></a>

				<div class="header-info">
					<div class="header-title">ДОСТАВКА БУКЕТОВ</div>
					<a href="tel:89857626004" class="header-phone">8 (985) 762-60-04</a>
					<div class="header-messengers">
						<a href="https://wa.me/79167358890" class="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
						<a href="tg://resolve?domain=79167358890" class="telegram" target="_blank"><i class="fab fa-telegram-plane"></i></a>
						<a href="tel:89167358890" class="phone">8 (916) 735-88-90</a>
					</div>
				</div>

				<div class="header-menu">
					<span class="menu-toggle"><span></span></span>
					<div class="menu-wrap">
						<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</header>
