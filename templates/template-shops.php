<?php
/**
 * Template Name: Handlare
 */
?>

<?php get_header(); ?>

<main class="main--wrap">
  <div class="container">

    <div class="row">

    <?php
    while (have_posts()) : the_post(); ?>

      <article class="col-xs-12 post--filter">

        <div id="accordion" class="filter--box" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="hidden-sm-up panel-heading" role="tab" id="collapseToggle">
              <a class="panel-title collapse--toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTarget" aria-expanded="true" aria-controls="collapseOne">
                Välj kategori
                <i class="fa icon--switch fa-bars">&nbsp;</i>
              </a>
            </div>
            <div id="collapseTarget" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseToggle">
              <ul class="nav nav--tabs" role="tablist">

                 <li class="nav-item">
                   <a class="nav-link" href="javascript:void(0)" aria-controls="livs-detaljhandel" aria-selected="false" role="tab">
                     <span>Livs & Detaljhandel</span>
                   </a>
                 </li>

                 <li class="nav-item">
                   <a class="nav-link" href="javascript:void(0)" aria-controls="klader-mode" aria-selected="false" role="tab">
                     <span>Kläder & Mode</span>
                   </a>
                 </li>

                 <li class="nav-item">
                   <a class="nav-link" href="javascript:void(0)" aria-controls="mat-dryck" aria-selected="false" role="tab">
                     <span>Mat & Dryck</span>
                   </a>
                 </li>

                 <li class="nav-item">
                   <a class="nav-link" href="javascript:void(0)" aria-controls="samhalle-service" aria-selected="false" role="tab">
                     <span>Samhälle & Service</span>
                   </a>
                 </li>

                 <li class="nav-item">
                   <a class="nav-link" href="javascript:void(0)" aria-controls="halsa-skonhet" aria-selected="false" role="tab">
                     <span>Hälsa & Skönhet</span>
                   </a>
                 </li>

                 <li class="nav-item">
                   <a class="nav-link" href="javascript:void(0)" aria-controls="bygg-bil" aria-selected="false" role="tab">
                     <span>Bygg & Bil</span>
                   </a>
                 </li>

               </ul>
            </div>
          </div>
        </div>

      </article>

      <article class="col-xs-12 post--content">

          <div class="tab--panel" role="tabpanel" aria-hidden="false">

            <div class="row">

              <article class="col-xs-12">
                <?php the_title(); ?>
                <?php the_content(); ?>
              </article>

            </div>

          </div>

          <div class="tab--panel" id="livs-detaljhandel" role="tabpanel" aria-hidden="true">
            <div class="row">

              <?php
              $archive_args = array(
        			  'post_type' => 'medlemmar',
                'category_name' => 'livs-detaljhandel',
        			  'posts_per_page'=> -1,
        			  'orderby' => 'title',
        				'order'   => 'ASC'
        			);
        			$archive_query = new WP_Query( $archive_args );
        			while ( $archive_query->have_posts() ) : $archive_query->the_post();
                echo '<figure class="col-xs-6 col-sm-3">';
                  echo '<div class="panel--box">';
            				echo get_the_post_thumbnail( $id, 'storecover' );
            				echo '<figcaption>';
            				  echo '<h4>' . get_the_title() . '</h4>';
            				echo '</figcaption>';
                    echo '<div class="btn-group">';
                      echo '<a class="btn col-xs-8 col-sm-6" href="' . get_the_permalink() . '">Läs mer</a>';
                      if (get_field('website')) {
                        echo '<a class="btn col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="hidden-xs-down">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                      }
                    echo '</div>';
                  echo '</div>';
                echo '</figure>';
        			endwhile;
        			wp_reset_postdata();
        			?>

            </div>
          </div>

          <div class="tab--panel" id="klader-mode" role="tabpanel" aria-hidden="true">
            <div class="row">

              <?php
              $archive_args = array(
        			  'post_type' => 'medlemmar',
                'category_name' => 'klader-mode',
        			  'posts_per_page'=> -1,
        			  'orderby' => 'title',
        				'order'   => 'ASC'
        			);
        			$archive_query = new WP_Query( $archive_args );
        			while ( $archive_query->have_posts() ) : $archive_query->the_post();
              echo '<figure class="col-xs-6 col-sm-3">';
                echo '<div class="panel--box">';
                  echo get_the_post_thumbnail( $id, 'storecover' );
                  echo '<figcaption>';
                    echo '<h4>' . get_the_title() . '</h4>';
                  echo '</figcaption>';
                  echo '<div class="btn-group">';
                    echo '<a class="btn col-xs-8 col-sm-6" href="' . get_the_permalink() . '">Läs mer</a>';
                    if (get_field('website')) {
                      echo '<a class="btn col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="hidden-xs-down">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                    }
                  echo '</div>';
                echo '</div>';
              echo '</figure>';
        			endwhile;
        			wp_reset_postdata();
        			?>

            </div>
          </div>

          <div class="tab--panel" id="mat-dryck" role="tabpanel" aria-hidden="true">
            <div class="row">

              <?php
              $archive_args = array(
        			  'post_type' => 'medlemmar',
                'category_name' => 'mat-dryck',
        			  'posts_per_page'=> -1,
        			  'orderby' => 'title',
        				'order'   => 'ASC'
        			);
        			$archive_query = new WP_Query( $archive_args );
        			while ( $archive_query->have_posts() ) : $archive_query->the_post();
              echo '<figure class="col-xs-6 col-sm-3">';
                echo '<div class="panel--box">';
                  echo get_the_post_thumbnail( $id, 'storecover' );
                  echo '<figcaption>';
                    echo '<h4>' . get_the_title() . '</h4>';
                  echo '</figcaption>';
                  echo '<div class="btn-group">';
                    echo '<a class="btn col-xs-8 col-sm-6" href="' . get_the_permalink() . '">Läs mer</a>';
                    if (get_field('website')) {
                      echo '<a class="btn col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="hidden-xs-down">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                    }
                  echo '</div>';
                echo '</div>';
              echo '</figure>';
        			endwhile;
        			wp_reset_postdata();
        			?>

            </div>
          </div>

          <div class="tab--panel" id="samhalle-service" role="tabpanel" aria-hidden="true">
            <div class="row">

              <?php
              $archive_args = array(
        			  'post_type' => 'medlemmar',
                'category_name' => 'samhalle-service',
        			  'posts_per_page'=> -1,
        			  'orderby' => 'title',
        				'order'   => 'ASC'
        			);
        			$archive_query = new WP_Query( $archive_args );
        			while ( $archive_query->have_posts() ) : $archive_query->the_post();
              echo '<figure class="col-xs-6 col-sm-3">';
                echo '<div class="panel--box">';
                  echo get_the_post_thumbnail( $id, 'storecover' );
                  echo '<figcaption>';
                    echo '<h4>' . get_the_title() . '</h4>';
                  echo '</figcaption>';
                  echo '<div class="btn-group">';
                    echo '<a class="btn col-xs-8 col-sm-6" href="' . get_the_permalink() . '">Läs mer</a>';
                    if (get_field('website')) {
                      echo '<a class="btn col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="hidden-xs-down">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                    }
                  echo '</div>';
                echo '</div>';
              echo '</figure>';
        			endwhile;
        			wp_reset_postdata();
        			?>

            </div>
          </div>

          <div class="tab--panel" id="halsa-skonhet" role="tabpanel" aria-hidden="true">
            <div class="row">

              <?php
              $archive_args = array(
        			  'post_type' => 'medlemmar',
                'category_name' => 'halsa-skonhet',
        			  'posts_per_page'=> -1,
        			  'orderby' => 'title',
        				'order'   => 'ASC'
        			);
        			$archive_query = new WP_Query( $archive_args );
        			while ( $archive_query->have_posts() ) : $archive_query->the_post();
              echo '<figure class="col-xs-6 col-sm-3">';
                echo '<div class="panel--box">';
                  echo get_the_post_thumbnail( $id, 'storecover' );
                  echo '<figcaption>';
                    echo '<h4>' . get_the_title() . '</h4>';
                  echo '</figcaption>';
                  echo '<div class="btn-group">';
                    echo '<a class="btn col-xs-8 col-sm-6" href="' . get_the_permalink() . '">Läs mer</a>';
                    if (get_field('website')) {
                      echo '<a class="btn col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="hidden-xs-down">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                    }
                  echo '</div>';
                echo '</div>';
              echo '</figure>';
        			endwhile;
        			wp_reset_postdata();
        			?>

            </div>
          </div>

          <div class="tab--panel" id="bygg-bil" role="tabpanel" aria-hidden="true">
            <div class="row">

              <?php
              $archive_args = array(
        			  'post_type' => 'medlemmar',
                'category_name' => 'bygg-bil',
        			  'posts_per_page'=> -1,
        			  'orderby' => 'title',
        				'order'   => 'ASC'
        			);
        			$archive_query = new WP_Query( $archive_args );
        			while ( $archive_query->have_posts() ) : $archive_query->the_post();
              echo '<figure class="col-xs-6 col-sm-3">';
                echo '<div class="panel--box">';
                  echo get_the_post_thumbnail( $id, 'storecover' );
                  echo '<figcaption>';
                    echo '<h4>' . get_the_title() . '</h4>';
                  echo '</figcaption>';
                  echo '<div class="btn-group">';
                    echo '<a class="btn col-xs-8 col-sm-6" href="' . get_the_permalink() . '">Läs mer</a>';
                    if (get_field('website')) {
                      echo '<a class="btn col-xs-4 col-sm-6" href="' . get_field('website') . '" target="_blank"><span class="hidden-xs-down">Hemsida</span><i class="fa fa-external-link hidden-sm-up">&nbsp;</i></a>';
                    }
                  echo '</div>';
                echo '</div>';
              echo '</figure>';
        			endwhile;
        			wp_reset_postdata();
        			?>

            </div>
          </div>

      </article>

    <?php
    endwhile; ?>

    </div>

  </div><!-- /Container -->

</main>

<?php get_footer(); ?>
