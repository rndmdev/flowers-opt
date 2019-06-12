<?php get_header(); ?>
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'loop' ); ?>
		<?php endwhile;
		else: echo '<h2>Нет записей.</h2>'; endif; ?>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
