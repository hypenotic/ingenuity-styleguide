<?php get_header(); ?>	

	<div class="contentwrapper"> <!-- contentwrapper begins here -->
		<?php get_sidebar(); ?>
			
		<section class="mainarticles"> <!-- ARTICLE WRAP begins here -->
			
			<!-- IF OVERVIEW -->
			<?php

			$query = new WP_Query( array( 'post_type' => 'overview' ) );

			if ( $query->have_posts() ) :

			    while ( $query->have_posts() ) : $query->the_post(); ?>
			  		<article id="overview">
			  			<h2 class="sidebar-link">Overview</h2>

            	<div class="overview__content"><?php the_content(); ?></div>
            </article>

			    <?php endwhile;

			endif;

			?>
			<!-- END OVERVIEW -->

			<!-- IF LOGO -->
			<?php get_template_part( 'styleguide', 'logo' ); ?> 
			<!-- END LOGO -->
			
			<!-- IF COLOURS -->
			<?php get_template_part( 'styleguide', 'colors' ); ?> 
			<!-- END COLOURS -->
			
			<!-- IF TYPOGRAPHY -->
			<?php get_template_part( 'styleguide', 'typography' ); ?> 
			<!-- END TYPOGRAPHY -->
				
			<!-- IF PHOTOGRAPHY -->	
			<?php

			$query = new WP_Query( array( 'post_type' => 'photography' ) );

			if ( $query->have_posts() ) :

			    while ( $query->have_posts() ) : $query->the_post(); ?>

			  		<article id="photography">
			  			<h2 class="sidebar-link">Photography</h2>

            	<div class="photography__content"><?php the_content(); ?></div>
						</article> 
			    <?php endwhile;

			endif;

			?>
			<!-- END PHOTOGRAPHY -->

			<!-- IF TONE -->
			<?php

			$query = new WP_Query( array( 'post_type' => 'tone' ) );

			if ( $query->have_posts() ) :

			    while ( $query->have_posts() ) : $query->the_post(); ?>

			  		<article id="tone">
			  			<h2 class="sidebar-link">Tone</h2>

            	<div class="tone__content"><?php the_content(); ?></div>

            </article>

			    <?php endwhile;

			endif;

			?>
			<!-- END TONE -->

			<!-- IF TEMPLATES -->
			<?php get_template_part( 'styleguide', 'templates' ); ?> 
			<!-- END TEMPLATES -->
			

			<footer class="contact">
				<h3>Need something special?</h3>
				<p>We're happy to help. Contact Barry at Hypenotic.</p>
				<p class="no-space">416-363-5215.</p>
				<p class="no-space">bam@hypenotic.com</p>
			</footer>

		</section> <!-- ARTICLE WRAP ends here -->
	</div> <!-- contentWrapper ends here -->
<?php get_footer(); ?>