<?php

  $query = new WP_Query( array( 'post_type' => 'logo', 'posts_per_page' => 1 ) );

  if ( $query->have_posts() ) :

      while ( $query->have_posts() ) : $query->the_post(); ?>

          <!-- Get custom meta values -->
          <?php 
            $label      = get_post_meta($post->ID,'_logo_label',true);
            $labelcolor = get_post_meta($post->ID,'_logo_labelc',true);
            $link       = get_post_meta($post->ID,'_logo_upload',true);
            $plogoId    = get_post_meta($post->ID, '_logo_logo_1', true);
            $plogoUrl   = wp_get_attachment_image_src($plogoId,'logo', true);
            $slogoId    = get_post_meta($post->ID, '_logo_logo_2', true);
            $slogoUrl   = wp_get_attachment_image_src($slogoId,'logo', true);

            $logos      = get_post_meta($post->ID,'_logos',true);
          ?>

        <article id="logo">

            <h2 class="sidebar-link">Logo</h2>

            <div class="logo__content">
                <?php the_content(); ?>
            </div>

<!--             <figure class="logopackage">
                <div class="logopackage__logocontainer">
                    <div class="logopackage__single">
                        <img src="<?php // echo $plogoUrl[0]; ?>" alt="">

                    </div>
                    <div class="logopackage__single">
                        <img src="<?php // echo $slogoUrl[0]; ?>" alt="">
                    </div>
                </div>
            </figure> -->

            <figure class="logo-samples">
                <!-- For loop cycle through Array -->
                <?php if($logos) {
                    foreach($logos as $logo) {

                    // Get custom meta values    
                    $singlelogo     = $logo['_logo'];
                    $logourl        = wp_get_attachment_image_src($singlelogo,'logos', true);
                    $descrip        = $logo['_descrip'];
                    $slink          = $logo['_upload'];
                ?>

                    <figure class="logo-samples__single">
                        <?php if ($singlelogo) {
                            echo '<img src="' . $logourl[0] . '" alt="'. $name .'"/>'; 
                        } else { } ?>
                        
                        <figcaption class="logo-descrip">
                            <p class="logo-descrip__text"><?php echo $descrip; ?></p>
                            <p class="logo-descrip__download">
                                <a href="<?php echo $slink; ?>"><i class="fa fa-download"></i></a>
                            </p>
                        </figcaption>
                    </figure>
                            
                <?php
                        }
                    }
                ?> <!-- End foreach and if loop for cuztom bundle -->  
            </figure>

            <figcaption class="logopack__download">
                <a href="<?php echo $link; ?>">
                    <h3 class="logopackage__caption"><?php echo $label; ?></h3>
                </a>
            </figcaption>

        </article>

      <?php endwhile;

  endif;

?>