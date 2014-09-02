<?php
/*
Template Name: Contactpage
*/
?>
<?php get_header(); ?>
	 <div class="u-gridCol8" id="container">
	 	<section id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article>
					<div class="Content-entry">
						<div class="bg-title"> <h2 class="pagetitle"><?php the_title(); ?></h2> </div>
						<div class="Content-text">

							<div class="u-gridRow">					
								<div class="adress u-gridCol4">
									<div class="adress-info">
										<h3> Contactgegevens </h3>
										<p>dutchdreamdenim</p>
										<p>Leeuwenburg 135</p>
										<p>2994 EJ Barendrecht</p>
										<p>Email: <a href="mailto:info@dutchdreamdenim.com">info@dutchdreamdenim.com </a></p>
										<p>Tel: 06-49726713</p>
									</div>
			
								</div>					
								<div class="adress-map u-gridCol8">
									<div id="map_canvas"></div>
								</div>

							</div> <!-- /gridRow -->

							<div class="u-gridRow">						
								<?php the_content(); ?>
							
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>

						</div> <!-- content-text -->
					</div>
				</article>
			<?php endwhile; endif; ?>
		</section>
<?php get_footer(); ?>
