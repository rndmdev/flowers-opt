<?php get_header(); ?>

<div class="container">
	<div class="main">
		<?php if ( have_posts() ) {
			while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();  ?></h1>
			<?php the_content(); ?>
			<?php endwhile;
		} ?>
	</div>

	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
