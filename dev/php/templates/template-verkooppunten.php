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
				<iframe src="https://mapsengine.google.com/map/embed?mid=zpfWxv7IHvzU.kVAJ6JqaGZBY" width="640" height="480"></iframe>
			</div>

	 		<div class="u-gridRow">
			
			<?php
				$temp = $wp_query;
  				$wp_query = null;
  				$wp_query = new WP_Query();
  				$show_posts = 6;  //How many post you want on per page
  				$permalink = 'Verkooppunten'; // Default, Post name
  				$post_type = 'verkooppunt';
   
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
				$count_posts = wp_count_posts('verkooppunt');
 	
  				while ($wp_query->have_posts()) : $wp_query->the_post();
  			?>
  			
  			<!--Do stuff-->
          	<div class="u-gridCol4">
	            <h3 class="verkooppunt-title"><?php the_title(); ?></h3>
	           	<p><?php the_field('straat_huisnummer'); ?></p>
	            <p><?php the_field('postcode_plaats'); ?></p>
          	</div>
  
  			<?php the_content(); ?>
			<?php endwhile;?>

		</div>
    	
    	<nav>
	    	<?php previous_posts_link('&laquo; ') ?>
	    	<?php
	    		$count_post = $count_posts->publish / $show_posts;
	     
	    		if( $count_posts->publish % $show_posts == 1 ) {
	    			$count_post++;
	    			$count_post = intval($count_post);
	    		};
	     
	    	for($i = 1; $i <= $count_post ; $i++) { ?>
	    		<a <?php if($req_uri[1] == $i) { echo 'class=active_page'; } ?> href="<?php echo $uri . $i; ?>"><?php echo $i; ?></a>
	    	<?php } ?>

	    	<?php next_posts_link(' &raquo;') ?>
    	</nav>
 
  		<?php
  			$wp_query = null;
  			$wp_query = $temp;  // Reset
		?>

	</section>
<?php get_footer(); ?>