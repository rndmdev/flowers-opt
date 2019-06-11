<?php

/* Регистрация 2 меню */
register_nav_menus(
	array(
		'top'    => 'Верхнее',
		'bottom' => 'Внизу',
	)
);

/* Регистрация сайдбара */
register_sidebar(
	array(
		'name'          => 'Колонка слева',
		'id'            => "left-sidebar",
		'description'   => 'Обычная колонка в сайдбаре',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<span class="widgettitle">',
		'after_title'   => "</span>\n",
	)
);

register_sidebar(
	array(
		'name'          => 'Footer 1',
		'id'            => "footer-1",
		'description'   => 'Область виджетов в футере',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<span class="widgettitle">',
		'after_title'   => "</span>\n",
	)
);

register_sidebar(
	array(
		'name'          => 'Footer 2',
		'id'            => "footer-2",
		'description'   => 'Область виджетов в футере',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<span class="widgettitle">',
		'after_title'   => "</span>\n",
	)
);

register_sidebar(
	array(
		'name'          => 'Footer 3',
		'id'            => "footer-3",
		'description'   => 'Область виджетов в футере',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<span class="widgettitle">',
		'after_title'   => "</span>\n",
	)
);
