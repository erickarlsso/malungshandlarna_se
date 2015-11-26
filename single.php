<?php
get_header();

  if ( is_singular('medlemmar') ) :

    get_template_part('templates/template', 'shop');

  else :

    get_template_part('templates/content', 'single');

  endif;

get_footer();
?>
