<?php

  get_template_part( 'templates/site', 'header' );

    if ( have_posts() ) :

      while ( have_posts() ) : the_post();

				get_template_part( 'templates/content', 'page' );

			endwhile;

    else :

      get_template_part( 'templates/content', 'none' );

    endif;

  get_template_part( 'templates/site', 'footer' );

?>
