<?php

	$query = new WP_Query( array( 'post_type' => 'typography', 'posts_per_page' => 1 ) );

	if ( $query->have_posts() ) :

	    while ( $query->have_posts() ) : $query->the_post(); ?>

        <article id="typography">
            <h2 class="sidebar-link">Typography</h2>

            <div class="typography__content">
                <?php the_content(); ?>
            </div>
      		
            <h3>Examples</h3>

  	  		<!-- Get custom meta values -->
  	  		<?php 
  	  			$types      = get_post_meta($post->ID,'_type',true);
  	  			// INTRO TEXT
  	  			$introfont  = get_post_meta($post->ID,'_introtext_introfont',true);
  	  			$introex    = get_post_meta($post->ID,'_introtext_introexample',true);
  	  			$introsize  = get_post_meta($post->ID,'_introtext_fsize',true);
  	  			$introweight= get_post_meta($post->ID,'_introtext_fweight',true);
  	  			$introstyle = get_post_meta($post->ID,'_introtext_fstyle',true);
  	  			$introcase  = get_post_meta($post->ID,'_introtext_case',true);
  	  			// BODY COPY
  	  			$bodyfont   = get_post_meta($post->ID,'_bodyfont_bodyfont',true);
  	  			$bodyex     = get_post_meta($post->ID,'_bodyfont_bodyexample',true);
  	  			$bodysize   = get_post_meta($post->ID,'_bodyfont_fsize',true);
  	  			$bodyweight = get_post_meta($post->ID,'_bodyfont_fweight',true);
  	  			$bodystyle  = get_post_meta($post->ID,'_bodyfont_fstyle',true);
  	  			$bodycase   = get_post_meta($post->ID,'_bodyfont_case',true);
  	  			// QUOTATION
  	  			$quotefont  = get_post_meta($post->ID,'_quotetext_quotefont',true);
  	  			$quoteex    = get_post_meta($post->ID,'_quotetext_quoteexample',true);
  	  			$quotesize  = get_post_meta($post->ID,'_quotetext_fsize',true);
  	  			$quoteweight= get_post_meta($post->ID,'_quotetext_fweight',true);
  	  			$quotestyle = get_post_meta($post->ID,'_quotetext_fstyle',true);
  	  			$quotecase  = get_post_meta($post->ID,'_quotetext_case',true);
  	  			// QUOTATION SOURCE
  	  			$srcfont    = get_post_meta($post->ID,'_quotetext_srcfont',true);
  	  			$srcex      = get_post_meta($post->ID,'_quotetext_srcex',true);
  	  			$srcsize    = get_post_meta($post->ID,'_quotetext_fsize_2',true);
  	  			$srcweight  = get_post_meta($post->ID,'_quotetext_fweight_2',true);
  	  			$srcstyle   = get_post_meta($post->ID,'_quotetext_fstyle_2',true);
  	  			$srccase    = get_post_meta($post->ID,'_quotetext_case_2',true);
  	  		?>

  	       	<!-- For loop cycle through Array -->
  	       	<?php if($types) {
  	       	    foreach($types as $type) {

  	       	    // Get custom meta values    
  	       	    $name    = $type['_fontname'];
  	       	    $examp   = $type['_extext'];
  	       	    $size    = $type['_fsize'];
                $lheight = $type['_lineheight'];
  	       	    $weight  = $type['_fweight'];
  	       	    $style   = $type['_fstyle'];
  	       	    $case    = $type['_case'];
                $space   = $type['_spacing'];

  	       	?>

            <p class="font-meta"><?php echo $name; ?> – <?php echo $size; ?></p>
  	       	
  	       	<?php if ($name || $examp || $size || $lheight || $weight || $style || $case): 
  	       	   echo '<p class="custom-heading" style="font-family: ' . $name . ';' . 'font-size:' . $size . ';' . 'font-weight:' . $weight . ';' . 'font-style:' . $style . ';' . 'letter-spacing:' . $space . ';' . 'text-transform:' . $case . ';">' . $examp . '</p>'; ?> 

  	       	<?php endif ?>

  	       	<?php
  	       	        }
  	       	    }
  	       	?> <!-- END OF FOR LOOP FOR HEADINGS -->

					<!-- INTRO TEXT -->
					<?php if ($introfont || $introex || $introsize || $introweight || $introstyle || $case): 
					   echo '<p style="font-family: ' . $introfont . ';' . 'font-size:' . $introsize . ';' . 'font-weight:' . $introweight . ';' . 'font-style:' . $introstyle . ';' . 'text-transform:' . $introcase . '">' . $introex . '</p>';  
					endif ?>

					<!-- BODY TEXT -->
					<?php if ($bodyfont || $bodyex || $bodysize || $bodyweight || $bodystyle || $bodycase): 
					   echo '<p style="font-family: ' . $bodyfont . ';' . 'font-size:' . $bodysize . ';' . 'font-weight:' . $bodyweight . ';' . 'font-style:' . $bodystyle . ';' . 'text-transform:' . $bodycase . '">' . $bodyex . '</p>';  
					endif ?>

					<!-- QUOTATION TEXT -->
					<?php if ($quotefont || $quoteex || $quotesize || $quoteweight || $quotestyle || $quotecase): 
					   echo '<p style="margin-bottom: 0; font-family: ' . $quotefont . ';' . 'font-size:' . $quotesize . ';' . 'font-weight:' . $quoteweight . ';' . 'font-style:' . $quotestyle . ';' . 'text-transform:' . $quotecase . '">' . $quoteex . '</p>';  
					endif ?>

					<!-- QUOTATION SOURCE TEXT -->
					<?php if ($srcfont || $srcex || $srcsize || $srcweight || $srcstyle || $srccase): 
					   echo '<p style="font-family: ' . $srcfont . ';' . 'font-size:' . $srcsize . ';' . 'font-weight:' . $srcweight . ';' . 'font-style:' . $srcstyle . ';' . 'text-transform:' . $srccase . '">' . $srcex . '</p>';  
					endif ?>

        </article>

        <?php endwhile;

	endif;
    
?>