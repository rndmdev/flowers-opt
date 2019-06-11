<?php get_header(); ?>
<section>
	<h1><?php printf( 'Поиск по строке: %s', get_search_query() ); ?></h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/loop' ); ?>
	<?php endwhile;
	else: echo '<h2>Нет записей.</h2>'; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>


