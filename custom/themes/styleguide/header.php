<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<!-- FONTS -->
	<script>
	  (function(d) {
	    var config = {
	      kitId: 'vsf1qtm',
	      scriptTimeout: 3000
	    },
	    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- CSS -->
<!-- 	 <link rel='stylesheet' href='<?php // bloginfo('template_directory'); ?>/style.css' async='async' type='text/css' media='all' /> -->
	<?php wp_head(); ?> 
</head>
<body>

	<?php // Loop starts

		$query = new WP_Query( array( 'post_type' => 'styleguide', 'posts_per_page' => 1 ) );

		if ( $query->have_posts() ) :

		    while ( $query->have_posts() ) : $query->the_post(); ?>

	
	<?php // Get custom meta values
		$maincolor 		= get_post_meta($post->ID,'_sgbasics_name_color',true);
		$headercolor 	= get_post_meta($post->ID,'_sgbasics_headercol',true);
	    $maintitle 		= get_post_meta($post->ID,'_sgheader_title',true);
	    $headerImageId 	= get_post_meta($post->ID, '_sgheader_logo', true);
	    $headerImageUrl = wp_get_attachment_image_src($headerImageId,'sgheader', true);
	?>

	<!-- These are all accent colors from cuztom post fields -->
	<style>
		/* The sidebar inview color accent */
		.selected {
			border-left: 2px solid <?php echo $headercolor; ?>;
			padding-left: 8px;
		}
		
		/* BAT PHONE hover colour */
		.get-in-touch a:hover h3 {
			color: <?php echo $headercolor; ?>;
		}

		/* Highlighted text colour */
		::selection {
		  background: <?php echo $headercolor; ?>;
		}
		
		/* Body copy links */
		article a:hover {
			background-color: <?php echo $headercolor; ?>;
		}
		
		/* Logo package download button hover */
		figcaption.logopack__download:hover {
			background-color: <?php echo $headercolor; ?>;
		}
	</style>

	<nav id="nav-mobile">
		<ul id="mobile-menu" class="injection-menu">
			
		</ul>
	</nav>

	<div id="menu-toggle">
		<i class="fa fa-bars"></i>
	</div>

	<?php if ($headercolor) { ?> 
        <header class="main-header" style="background-color:<?php echo $headercolor; ?>;"> 
      <?php }  else { ?>
		<header class="main-header">
      <?php }?>
		<div class="main-wrapper">
			<a href="<?php echo get_home_url(); ?>"><img class="main-logo" src="<?php echo $headerImageUrl[0]; ?>" alt="Main Logo"></a>
			<h1><?php bloginfo('name'); ?></h1>
		</div>
	</header>
	
	<main> <!-- mainWrapper begins here -->

	<?php endwhile; endif; ?>