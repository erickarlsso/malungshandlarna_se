<?php
/**
 * Template Name: Handlare
 */
?>

<?php get_header(); ?>

<main class="main--wrapper">
  <div class="container main--content">

    <div class="group">

    <?php
    while (have_posts()) : the_post(); ?>

      <section class="col--palm--12 col--portable--12 filter--box">

        <div class="group widget expander">

          <div class="widget--header">
            <h5 class="widget--title">
              <i class="hide--palm fa fa-bars"> </i>
              Välj kategori
              <a href="#" class="expander--toggle">
                <i class="fa fa-bars"> </i>
              </a>
            </h5>
          </div>

          <div class="widget--body expander--content">
            <ul class="nav nav--tabs" role="tablist">

               <li class="nav-item col--palm--12 col--portable--2">
                 <a class="nav-link" href="javascript:void(0)" aria-controls="livs-detaljhandel" aria-selected="true" role="tab">
                   <span>Livs & Detaljhandel</span>
                 </a>
               </li>

               <li class="nav-item col--palm--12 col--portable--2" role="tab">
                 <a class="nav-link" href="javascript:void(0)" aria-controls="klader-mode" aria-selected="false" role="tab">
                   <span>Kläder & Mode</span>
                 </a>
               </li>

               <li class="nav-item col--palm--12 col--portable--2" role="tab">
                 <a class="nav-link" href="javascript:void(0)" aria-controls="mat-dryck" aria-selected="false" role="tab">
                   <span>Mat & Dryck</span>
                 </a>
               </li>

               <li class="nav-item col--palm--12 col--portable--2" role="tab">
                 <a class="nav-link" href="javascript:void(0)" aria-controls="samhalle-service" aria-selected="false" role="tab">
                   <span>Samhälle & Service</span>
                 </a>
               </li>

               <li class="nav-item col--palm--12 col--portable--2" role="tab">
                 <a class="nav-link" href="javascript:void(0)" aria-controls="halsa-skonhet" aria-selected="false" role="tab">
                   <span>Hälsa & Skönhet</span>
                 </a>
               </li>

               <li class="nav-item col--palm--12 col--portable--2" role="tab">
                 <a class="nav-link" href="javascript:void(0)" aria-controls="bygg-bil" aria-selected="false" role="tab">
                   <span>Bygg & Bil</span>
                 </a>
               </li>

             </ul>

          </div>

        </div>
        <!-- /Widget -->

      </section>

      <article class="col--palm--12 col--portable--12 tabs content--box">

          <div class="tab--panel" id="livs-detaljhandel" role="tabpanel" aria-hidden="false">

            <?php
            $archive_args = array(
      			  post_type => 'medlemmar',
              'category_name' => 'livs-detaljhandel',
      			  'posts_per_page'=> -1,
      			  'orderby' => 'title',
      				'order'   => 'ASC'
      			);
      			$archive_query = new WP_Query( $archive_args );
      			while ( $archive_query->have_posts() ) : $archive_query->the_post();
              echo '<figure class="col--palm--6 col--portable--3 panel--box">';
                echo '<div class="inner">';
          				echo get_the_post_thumbnail( $id, storecover );
          				echo '<figcaption>';
          				  echo '<h4>' . get_the_title() . '</h4>';
          				echo '</figcaption>';
                  echo '<div class="btn-group">';
                    echo '<a class="btn btn-primary col--palm--8 col--portable--6" href="' . get_the_permalink() . '">Läs mer</a>';
                    if (get_field('website')) {
                      echo '<a class="btn btn--invert col--palm--4 col--portable--6" href="' . get_field('website') . '" target="_blank"><span class="hide--palm">Hemsida</span><i class="fa fa-external-link hide--portable">&nbsp;</i></a>';
                    }
                  echo '</div>';
                echo '</div>';
              echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>
          <div class="tab--panel" id="klader-mode" role="tabpanel" aria-hidden="true">

            <?php
            $archive_args = array(
      			  post_type => 'medlemmar',
              'category_name' => 'klader-mode',
      			  'posts_per_page'=> -1,
      			  'orderby' => 'title',
      				'order'   => 'ASC'
      			);
      			$archive_query = new WP_Query( $archive_args );
      			while ( $archive_query->have_posts() ) : $archive_query->the_post();
            echo '<figure class="col--palm--6 col--portable--3 panel--box">';
              echo '<div class="inner">';
                echo get_the_post_thumbnail( $id, storecover );
                echo '<figcaption>';
                  echo '<h4>' . get_the_title() . '</h4>';
                echo '</figcaption>';
                echo '<div class="btn-group">';
                  echo '<a class="btn btn-primary col--palm--8 col--portable--6" href="' . get_the_permalink() . '">Läs mer</a>';
                  if (get_field('website')) {
                    echo '<a class="btn btn--invert col--palm--4 col--portable--6" href="' . get_field('website') . '" target="_blank"><span class="hide--palm">Hemsida</span><i class="fa fa-external-link hide--portable">&nbsp;</i></a>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>
          <div class="tab--panel" id="mat-dryck" role="tabpanel" aria-hidden="true">

            <?php
            $archive_args = array(
      			  post_type => 'medlemmar',
              'category_name' => 'mat-dryck',
      			  'posts_per_page'=> -1,
      			  'orderby' => 'title',
      				'order'   => 'ASC'
      			);
      			$archive_query = new WP_Query( $archive_args );
      			while ( $archive_query->have_posts() ) : $archive_query->the_post();
            echo '<figure class="col--palm--6 col--portable--3 panel--box">';
              echo '<div class="inner">';
                echo get_the_post_thumbnail( $id, storecover );
                echo '<figcaption>';
                  echo '<h4>' . get_the_title() . '</h4>';
                echo '</figcaption>';
                echo '<div class="btn-group">';
                  echo '<a class="btn btn-primary col--palm--8 col--portable--6" href="' . get_the_permalink() . '">Läs mer</a>';
                  if (get_field('website')) {
                    echo '<a class="btn btn--invert col--palm--4 col--portable--6" href="' . get_field('website') . '" target="_blank"><span class="hide--palm">Hemsida</span><i class="fa fa-external-link hide--portable">&nbsp;</i></a>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>
          <div class="tab--panel" id="samhalle-service" role="tabpanel" aria-hidden="true">

            <?php
            $archive_args = array(
      			  post_type => 'medlemmar',
              'category_name' => 'samhalle-service',
      			  'posts_per_page'=> -1,
      			  'orderby' => 'title',
      				'order'   => 'ASC'
      			);
      			$archive_query = new WP_Query( $archive_args );
      			while ( $archive_query->have_posts() ) : $archive_query->the_post();
            echo '<figure class="col--palm--6 col--portable--3 panel--box">';
              echo '<div class="inner">';
                echo get_the_post_thumbnail( $id, storecover );
                echo '<figcaption>';
                  echo '<h4>' . get_the_title() . '</h4>';
                echo '</figcaption>';
                echo '<div class="btn-group">';
                  echo '<a class="btn btn-primary col--palm--8 col--portable--6" href="' . get_the_permalink() . '">Läs mer</a>';
                  if (get_field('website')) {
                    echo '<a class="btn btn--invert col--palm--4 col--portable--6" href="' . get_field('website') . '" target="_blank"><span class="hide--palm">Hemsida</span><i class="fa fa-external-link hide--portable">&nbsp;</i></a>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>
          <div class="tab--panel" id="halsa-skonhet" role="tabpanel" aria-hidden="true">

            <?php
            $archive_args = array(
      			  post_type => 'medlemmar',
              'category_name' => 'halsa-skonhet',
      			  'posts_per_page'=> -1,
      			  'orderby' => 'title',
      				'order'   => 'ASC'
      			);
      			$archive_query = new WP_Query( $archive_args );
      			while ( $archive_query->have_posts() ) : $archive_query->the_post();
            echo '<figure class="col--palm--6 col--portable--3 panel--box">';
              echo '<div class="inner">';
                echo get_the_post_thumbnail( $id, storecover );
                echo '<figcaption>';
                  echo '<h4>' . get_the_title() . '</h4>';
                echo '</figcaption>';
                echo '<div class="btn-group">';
                  echo '<a class="btn btn-primary col--palm--8 col--portable--6" href="' . get_the_permalink() . '">Läs mer</a>';
                  if (get_field('website')) {
                    echo '<a class="btn btn--invert col--palm--4 col--portable--6" href="' . get_field('website') . '" target="_blank"><span class="hide--palm">Hemsida</span><i class="fa fa-external-link hide--portable">&nbsp;</i></a>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>
          <div class="tab--panel" id="bygg-bil" role="tabpanel" aria-hidden="true">

            <?php
            $archive_args = array(
      			  post_type => 'medlemmar',
              'category_name' => 'bygg-bil',
      			  'posts_per_page'=> -1,
      			  'orderby' => 'title',
      				'order'   => 'ASC'
      			);
      			$archive_query = new WP_Query( $archive_args );
      			while ( $archive_query->have_posts() ) : $archive_query->the_post();
            echo '<figure class="col--palm--6 col--portable--3 panel--box">';
              echo '<div class="inner">';
                echo get_the_post_thumbnail( $id, storecover );
                echo '<figcaption>';
                  echo '<h4>' . get_the_title() . '</h4>';
                echo '</figcaption>';
                echo '<div class="btn-group">';
                  echo '<a class="btn btn-primary col--palm--8 col--portable--6" href="' . get_the_permalink() . '">Läs mer</a>';
                  if (get_field('website')) {
                    echo '<a class="btn btn--invert col--palm--4 col--portable--6" href="' . get_field('website') . '" target="_blank"><span class="hide--palm">Hemsida</span><i class="fa fa-external-link hide--portable">&nbsp;</i></a>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>

      </article>

    <?php
    endwhile; ?>

    </div>

  </div><!-- /Container -->

</main>

<?php get_footer(); ?>
