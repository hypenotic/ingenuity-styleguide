<?php
include('includes/wp-cuztom-helper/cuztom.php');
//Include post custom posts type. Dependent on /wp-cuztom-helper classes.
// include('includes/wp-cuztom-posts/custom-post-team.php'); example from pfennings
include('includes/wp-cuztom-posts/custom-post-styleguide.php');
include('includes/wp-cuztom-posts/custom-post-about.php');
include('includes/wp-cuztom-posts/custom-post-overview.php');
include('includes/wp-cuztom-posts/custom-post-logo.php');
include('includes/wp-cuztom-posts/custom-post-colour.php');
include('includes/wp-cuztom-posts/custom-post-typography.php');
include('includes/wp-cuztom-posts/custom-post-photography.php');
include('includes/wp-cuztom-posts/custom-post-tone.php');
include('includes/wp-cuztom-posts/custom-post-templates.php');
include('includes/wp-cuztom-posts/custom-generic.php');

//Load custom functions
require_once('includes/functions/enqueue-style.php');
require_once('includes/functions/enqueue-script.php');

//Load shortcodes
require_once('includes/shortcodes/template-bullets.php');

?>