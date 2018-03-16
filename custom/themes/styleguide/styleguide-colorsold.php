<?php

	$query = new WP_Query( array( 'post_type' => 'colours', 'posts_per_page' => 1 ) );

	if ( $query->have_posts() ) :

	    while ( $query->have_posts() ) : $query->the_post(); ?>

	  		<article class="colors" id="colours">
	  			<h2 class="sidebar-link">Colours</h2>
	  			<div class="colors__holder">

		  		<div class="color__content">
		  			<?php the_content(); ?>
		  		</div>
	  		
	  		<!-- Get custom meta values -->
	  		<?php 
	  			$colors = get_post_meta($post->ID,'_color',true);
	  		?>

	       	<!-- For loop cycle through Array -->
	       	<?php if($colors) {
	       	    foreach($colors as $color) {

	       	    // Get custom meta values    
	       	    $hex   = $color['_hex'];
	       	    $pms  = $color['_pms'];
	       	    $cyan = $color['_cyan'];
	       	    $magenta  = $color['_magenta'];
	       	    $yellow  = $color['_yellow'];
	       	    $key  = $color['_black'];
	       	?>
	       	
	       	<?php if ($hex): 
	       	   echo '<figure class="colors__column-3" style="background-color: ' . $hex . ';">'; 
	       	endif ?>

           	<figcaption>
	           	<?php if ($pms): 
	           	   echo '<h3 class="colors__pms">' . 'PMS ' . $pms . '</h3>'; 
	           	endif ?>

	           	<?php if ($cyan || $cyan == 0): 
	           	   echo '<h3>' . 'C  ' . $cyan . '</h3>';
	           	endif ?>

	           	<?php if ($magenta || $magenta == 0): 
	           	   echo '<h3>' . 'M ' . $magenta . '</h3>';
	           	endif ?>

	           	<?php if ($yellow || $yellow == 0): 
	           	   echo '<h3>' . 'Y ' . $yellow . '</h3>';
	           	endif ?>

	           	<?php if ($key || $key == 0): 
	           	   echo '<h3>' . 'K ' . $key . '</h3>';
	           	endif ?>
	           	
	           	<?php if ($hex): 
	           	   echo '<h3 class="colors__hex">' . $hex . '</h3>';
	           	endif ?>
           	</figcaption>

	       	</figure>
	       	
	       	<?php
	       	        }
	       	    }
	       	?>
					</div>
				</article>
	    <?php endwhile;

	endif;

?>