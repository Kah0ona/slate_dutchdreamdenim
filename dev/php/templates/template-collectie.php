<?php
/*
Template Name: Collectie II
*/
?>

<?php get_header(); ?>
	 <div class="u-gridCol8 height" id="container">
	 	<section id="content">
	 		<div class="bg-title"> <h2 class="pagetitle"><?php the_title(); ?></h2> </div>

	 		<div class="u-gridRow">
			
			<?php
				$temp = $wp_query;
  				$wp_query = null;
  				$wp_query = new WP_Query();
  				$permalink = 'Collecties'; // Default, Post name
  				$post_type = 'collectie';
   
			  	//Know the current URI
			  	$req_uri =  $_SERVER['REQUEST_URI']; 
   
  				//Permalink set to default
  				if($permalink == 'Default') {
  					$req_uri = explode('paged=', $req_uri);
   
  				if($_GET['paged']) {
  					$uri = $req_uri[0] . 'paged=';
  				} else {
  					$uri = $req_uri[0] . '&paged=';
  				}


  				//Permalink is set to Post name
  				} elseif ($permalink == 'Post name') {
  					if (strpos($req_uri,'page/') !== false) {
	   					$req_uri = explode('page/',$req_uri);
	    				$req_uri = $req_uri[0] ;
  					}
    				$uri = $req_uri . 'page/';
  				}
   
  				//Query
 				$wp_query->query('showposts='.$show_posts.'&post_type='. $post_type .'&paged='.$paged);
  				
  				//count posts in the custom post type
				$count_posts = wp_count_posts('collectie');
 	
  				while ($wp_query->have_posts()) : $wp_query->the_post();
  			?>
  			
  			<!--Do stuff-->
          	<div class="u-gridCol4">
				<?php 

				$image = get_field('collectie_afbeelding');

				if( !empty($image) ): ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?> 
          	</div>
  
  			<?php the_content(); ?>
			<?php endwhile;?>

		</div>
 
  		<?php
  			$wp_query = null;
  			$wp_query = $temp;  // Reset
		?>

	</section>
<?php get_footer(); ?>