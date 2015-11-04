<?php

  get_template_part( 'templates/site', 'header' );

    if ( have_posts() ) :

      while ( have_posts() ) : the_post();

        if ( is_singular('medlemmar') ) :

				      get_template_part( 'templates/template', 'shop' );

        else :

              get_template_part( 'templates/content', get_post_type );

        endif;

			endwhile;

    else :

      get_template_part( 'templates/content', 'none' );

    endif;

  get_template_part( 'templates/site', 'footer' );

?>
