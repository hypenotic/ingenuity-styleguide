<?php get_header(); ?>	

<!-- 	<div class="hero" >
	</div> -->

	<div class="content-wrapper"> <!-- contentwrapper begins here -->
		<?php get_sidebar(); ?>
			
		<section class="main-articles"> <!-- ARTICLE WRAP begins here -->
			
			<!-- IF ABOUT -->
			<?php

			$query = new WP_Query( array( 'post_type' => 'about', 'posts_per_page' => 1 ) );

			if ( $query->have_posts() ) :

			    while ( $query->have_posts() ) : $query->the_post(); ?>
			  		<article id="about_our_brand">
			  			<h2 class="sidebar-link">About Our Brand</h2>
            			<div class="about__content"><?php the_content(); ?></div>
            		</article>

			    <?php endwhile;

			endif;

			?>
			<!-- END ABOUT -->

			<!-- IF OVERVIEW -->
			<?php

			$query = new WP_Query( array( 'post_type' => 'overview', 'posts_per_page' => 1 ) );

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

			$query = new WP_Query( array( 'post_type' => 'photography', 'posts_per_page' => 1 ) );

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

			$query = new WP_Query( array( 'post_type' => 'tone', 'posts_per_page' => 1 ) );

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

			<!-- Added Generic Sections (Regular Posts) -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="<?php the_title(); ?>">
			  		<h2 class="sidebar-link"><?php the_title(); ?></h2>
            		<div class="tone__content"><?php the_content(); ?></div>
            	</article>
			<?php endwhile; endif; ?>
			

			<footer class="contact">
				<article>
					<h3>Need something special?</h3>
					<p>We're happy to help!</p>
					<p class="no-space">416-363-5215</p>
					<p class="no-space"><a href="mailto:info@hypenotic.com" target="_blank">info@hypenotic.com</a></p>
				</article>
			</footer>

		</section> <!-- ARTICLE WRAP ends here -->
	</div> <!-- contentWrapper ends here -->
<?php get_footer(); ?>