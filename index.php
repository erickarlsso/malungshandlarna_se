<?php
get_header();

  get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());

get_footer();
?>
