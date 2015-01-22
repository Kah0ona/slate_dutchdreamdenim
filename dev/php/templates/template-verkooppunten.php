<?php
/*
Template Name: Verkooppunten
*/
?>

<?php get_header(); ?>
	 <div class="u-gridCol8 height" id="container">
	 	<section id="content">
	 		<div class="bg-title"> <h2 class="pagetitle"><?php the_title(); ?></h2> </div>
			<div class="verkooppunten">
				<!--<iframe src="https://mapsengine.google.com/map/embed?mid=zpfWxv7IHvzU.kVAJ6JqaGZBY" width="640" height="480"></iframe>-->
       
        <?php echo do_shortcode('[google_maps id="947"]'); ?>

        </div>

	 		<div class="u-gridRow verkooppunten-row">
			
			<?php
				$temp = $wp_query;
  				$wp_query = null;
  				$wp_query = new WP_Query();
  				$permalink = 'Verkooppunten'; // Default, Post name
  				$post_type = 'verkooppunt';
  				$show_posts = 50;  //How many post you want on per page
   
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

 	
  				while ($wp_query->have_posts()) : $wp_query->the_post();
  			?>
  			



  			<!--Do stuff-->
          	<div class="u-gridCol4 verkooppunt-box">
	            <h3 class="verkooppunt-title"><?php the_title(); ?></h3>
	           	<p><?php the_field('straat_huisnummer'); ?></p>
	            <p><?php the_field('postcode_plaats'); ?></p>
          	</div>

  			<?php the_content(); ?>
			<?php endwhile;?>

		</div>

	</section>
<?php get_footer(); ?>