<?php
/*
Template Name: App
*/
?>

<?php get_header(); ?>
	 <div class="u-gridCol8 height" id="container">
	 	<section id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<div class="bg-title"> <h2 class="pagetitle"><?php the_title(); ?></h2> </div>
					<div>
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
		</section>
<?php get_footer(); ?>