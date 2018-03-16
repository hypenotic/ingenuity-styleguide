<?php

			$query = new WP_Query( array( 'post_type' => 'styleguide', 'posts_per_page' => 1 ) );

			if ( $query->have_posts() ) :

			    while ( $query->have_posts() ) : $query->the_post(); ?>

	<!-- Get custom meta values -->
	<?php 
		// $maincolor = get_post_meta($post->ID,'_sgbasics_maincolor',true);
		$maintitle = get_post_meta($post->ID,'_sgheader_title',true);
		$picker = get_post_meta($post->ID,'_sgbasics_name_color',true);
		$headerImageId = get_post_meta($post->ID, '_sgheader_logo', true);
	    $headerImageUrl = wp_get_attachment_image_src($headerImageId,'sgheader', true);
	?>


	<aside id="left"> 
		<nav id="submenu" class="sidebar__nav">
			<ul id="mainmenu" class="injection-menu">
				<!-- Sidebar links are created dynamically by js -->
			</ul>
		</nav>
		<div class="get-in-touch">
			<p>Need help?</p>
			<p>Situation not covered?</p>
			<a href="mailto:s3c2e8i7q1z8n5i6@hypenotic.slack.com">
			<?php if ($picker): 
			   echo '<button class="sidebar__button" style="background-color: ' . $picker . ';">'; 
			endif ?>
					<h3>Bat Phone</h3>
				</button>
			</a>
		</div>
	</aside>

<?php endwhile; endif; ?>
