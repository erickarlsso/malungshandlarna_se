<?php

  get_header();

    if ( have_posts() ) :

      while ( have_posts() ) : the_post();

        if ( is_singular('medlemmar') ) :

				      get_template_part( '_parts/template', 'shop' );

        else :

              get_template_part( '_parts/content', get_post_type );

        endif;

			endwhile;

    else :

      get_template_part( '_parts/content', 'none' );

    endif;

  get_footer();

?>
