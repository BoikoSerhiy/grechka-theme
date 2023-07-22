<?php get_header(); ?>
<main id="main">
	<div class="container">
		<div class="page-wrap">
			<div class="page-wrap__col page-wrap__col--main">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'template-sections/article_post' ); ?>
				<?php endwhile; ?>
			</div>
			<?php get_template_part('template-sections/aside');?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
