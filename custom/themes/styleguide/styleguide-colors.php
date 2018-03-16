<?php

	$query = new WP_Query( array( 'post_type' => 'colours', 'posts_per_page' => 1 ) );

	if ( $query->have_posts() ) :

	    while ( $query->have_posts() ) : $query->the_post(); ?>

	  		<article class="colors" id="colours">
	  			<h2 class="sidebar-link">Colours</h2>

		  		<div class="color__content">
		  			<?php the_content(); ?>
		  		</div>

				<h3>Primary Colours</h3>

		  		<div class="color-container">
		  		
		  		<!-- Get custom meta values -->
		  		<?php 
		  			$colors = get_post_meta($post->ID,'_color',true);
		  		?>

		       	
		       	<?php // For loop cycle through array 
		       		if($colors) {
		       	    foreach($colors as $color) {

		       	    // Get custom meta values    
		       	    $hex   		= $color['_hex'];
		       	    $pms  		= $color['_pms'];
		       	    $cyan 		= $color['_cyan'];
		       	    $magenta  	= $color['_magenta'];
		       	    $yellow  	= $color['_yellow'];
		       	    $key  		= $color['_black'];
		       	?>
		       	
		       	<div class="single-color">
		       		<?php if ($hex): 
		       		   echo '<figure class="colors__column-4" style="background-color: ' . $hex . ';">'; 
		       		endif ?>
		       		
		       		</figure>
		       		
		       		<figcaption>
			           <div class="color-details">
			           		<p><?php echo $hex; ?></p>
			           		<?php if ($pms) { ?>
			           			<p>PMS <?php echo $pms; ?></p>
			           		<?php } ?>
			           		<p>CMYK (<?php echo $cyan; ?>, <?php echo $magenta; ?>, <?php echo $yellow; ?>, <?php echo $key; ?>)</p>
			           </div>
		           	</figcaption>
		       		
		       	</div> 
		       	<!-- end of single chip -->
		       		<?php
		       		        }
		       		    }
		       		?>
				</div>
				<!-- end of primary color container -->

				<h3>Secondary Colours</h3>

				<div class="secondary-colors">
				<!-- Get custom meta values -->
		  		<?php 
		  			$scolors = get_post_meta($post->ID,'_secondary',true);
		  		?>

		       	<!-- For loop cycle through Array -->
		       	<?php if($scolors) {
		       	    foreach($scolors as $scolor) {

		       	    // Get custom meta values    
		       	    $shex 		= $scolor['_hex'];
		       	    $spms  		= $scolor['_pms'];
		       	    $scmyk 		= $scolor['_cmyk'];
		       	?>
		       	
			       	<div class="single-scolor">
			       	<?php if ($shex): 
			       		   echo '<figure class="scolors__column" style="background-color: ' . $shex . ';">'; 
			       		endif ?>
			       		
			       		</figure>
			       		
			       		<figcaption>
				           <div class="scolor-details">
				           		<p><?php echo $shex; ?></p>
				           		<?php if ($spms) { ?>
				           			<p>PMS <?php echo $spms; ?></p>
				           		<?php } ?>
				           		<p>CMYK (<?php echo $scmyk; ?>)</p>
				           </div>
			           	</figcaption>
			       		
			       	</div> 
			       	<!-- end of single chip -->
	       		<?php
	       		        }
	       		    }
	       		?>
		       	</div>
		       	<!-- end of secondary colors div -->
			</article>

	    <?php endwhile;

	endif;

?>