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

        <div class="widget">

          <h5 class="widget--header">
            Hitta din butik
            <a href="#" class="btn--toggle pull--right" data-toggle="collapse" data-target="#filter" aria-expanded="false" aria-controls="filter" type="button">
              <i class="fa fa-th-list">&nbsp;</i>
            </a>
          </h5>

          <div id="filter" class="collapse">
            <ul class="nav" role="tablist">

               <li class="nav-item col--palm--12 col--portable--2" role="presentation">
                 <a class="nav-link active" href="#livs-detaljhandel" aria-controls="livs-detaljhandel" role="tab" data-toggle="tab">
                   <span>Livs & Detaljhandel</span>
                 </a>
               </li>

               <li class="nav-item col--palm--12 col--portable--2" role="presentation">
                 <a class="nav-link" href="#klader-mode" aria-controls="klader-mode" role="tab" data-toggle="tab">
                   <span>Kläder & Mode</span>
                 </a>
               </li>

               <li class="nav-item col--palm--12 col--portable--2" role="presentation">
                 <a class="nav-link" href="#mat-dryck" aria-controls="mat-dryck" role="tab" data-toggle="tab">
                   <span>Mat & Dryck</span>
                 </a>
               </li>

               <li class="nav-item col--palm--12 col--portable--2" role="presentation">
                 <a class="nav-link" href="#samhalle-service" aria-controls="samhalle-service" role="tab" data-toggle="tab">
                   <span>Samhälle & Service</span>
                 </a>
               </li>

               <li class="nav-item col--palm--12 col--portable--2" role="presentation">
                 <a class="nav-link" href="#halsa-skonhet" aria-controls="halsa-skonhet" role="tab" data-toggle="tab">
                   <span>Hälsa & Skönhet</span>
                 </a>
               </li>

               <li class="nav-item col--palm--12 col--portable--2" role="presentation">
                 <a class="nav-link" href="#bygg-bil" aria-controls="bygg-bil" role="tab" data-toggle="tab">
                   <span>Bygg & Bil</span>
                 </a>
               </li>

             </ul>

          </div>

        </div>
        <!-- /Widget -->

      </section>

      <article class="col--palm--12 col--portable--12 tab-content content--box">

          <div role="tabpanel" class="tab-pane active" id="livs-detaljhandel">

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
                      echo '<a class="btn btn-inverse col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="visible-xs-up">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                    }
                  echo '</div>';
                echo '</div>';
              echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>
          <div role="tabpanel" class="tab-pane" id="klader-mode">

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
                    echo '<a class="btn btn-inverse col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="visible-xs-up">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>
          <div role="tabpanel" class="tab-pane" id="mat-dryck">

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
                    echo '<a class="btn btn-inverse col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="visible-xs-up">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>
          <div role="tabpanel" class="tab-pane" id="samhalle-service">

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
                    echo '<a class="btn btn-inverse col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="visible-xs-up">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>
          <div role="tabpanel" class="tab-pane" id="halsa-skonhet">

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
                    echo '<a class="btn btn-inverse col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="visible-xs-up">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</figure>';
      			endwhile;
      			wp_reset_postdata();
      			?>

          </div>
          <div role="tabpanel" class="tab-pane" id="bygg-bil">

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
                    echo '<a class="btn btn-inverse col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="visible-xs-up">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
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
