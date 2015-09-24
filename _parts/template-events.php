<?php
/**
 * Template Name: Arrangemang
 */
?>

<?php get_header(); ?>

<main class="main-wrapper">

  <!-- Container -->
  <div class="container main--content">

    <div class="row">

      <ul class="nav content--box timeline">

        <?php
        $archive_args = array(
          post_type => 'arrangemang',
          'posts_per_page'=> -1,
          'orderby' => 'date',
          'order'   => 'ASC'
        );
        $archive_query = new WP_Query( $archive_args );
        while ( $archive_query->have_posts() ) : $archive_query->the_post();
        echo '<li class="col-xs-12 col-sm-5">';
          echo '<div class="timeline--badge info"><i class="fa"></i></div>';
          echo '<article class="timeline--panel">';
            echo '<div class="timeline--header">';
              the_title('<h2>','</h2>');
              echo '<span>';
                echo '<i class="fa fa-clock"> </i>';
                echo the_field('date');
                echo ' - ';
                echo the_field('location');
              echo '</span>';
            echo '</div>';
            echo '<div class="timeline--body">';
              the_content();
            echo '</div>';
          echo '</article>';
        echo '</li>';
        endwhile;
        wp_reset_postdata();
        ?>

      </ul>

    </div>

  </div><!-- /Container -->

</main>

<?php get_footer(); ?>
