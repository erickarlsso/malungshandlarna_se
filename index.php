<?php
get_header();

  if ( is_singular('medlemmar') ) :

    get_template_part('templates/template', 'shop');

  else :

    get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());

  endif;

get_footer();
?>
