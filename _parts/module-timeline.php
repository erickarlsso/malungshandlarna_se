<?php
  if ( is_page('arrangemang') ) :

    $archive_args = array(
      post_type => 'arrangemang',
      'posts_per_page'=> -1,
      'orderby' => 'date',
      'order'   => 'ASC'
    );

    $archive_query = new WP_Query( $archive_args );
    while ( $archive_query->have_posts() ) : $archive_query->the_post(); ?>
      <article class="col--palm--offset--1 col--palm--11 col--portable--offset--0 col--portable--5 timeline--panel">
        <div class="timeline--header">
          <?php the_title('<h4>', '</h4>'); ?>
          <p class="timeline--date">
            <i class="fa fa-clock"> </i>
            <?php the_field('date'); ?>
             -
            <i class="fa fa-map-marker"> </i>
            <?php the_field('location'); ?>
          </p>
        </div>
        <div class="timeline--body">
          <?php the_content(); ?>
        </div>
      </article>
    <?php
    endwhile;
    wp_reset_postdata();

  endif;
?>
