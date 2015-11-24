<?php
/**
* Template Name: Startsida
*/
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

  <?php if ( has_post_thumbnail() ) :
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'cover' );
    echo '<section class="feature feature--intro" style="background-image:url(' . $url = $thumb['0'] . ');">'; ?>
      <div class="container">

          <article class="col-xs-12 v--align">

            <h1>Landsbygdsshopping<br>när den är som bäst</h1>

            <p class="btn-group btn-group-lg" role="group" aria-label="...">
              <button type="button" class="btn btn-primary">
                <a href="<?php esc_url(home_url('/')); ?>handlare">
                  <i class="fa fa-arrow-circle-o-right">&nbsp;</i>
                  Hitta handlare
                </a>
              </button>
              <button type="button" class="btn btn-primary">
                <a href="<?php esc_url(home_url('/')); ?>arrangemang">
                  <i class="fa fa-calendar"> </i>
                  Vad händer just nu?
                </a>
              </button>
            </p>

          </article>

      </div>
    </section>
  <?php endif; ?>

    <section class="feature feature--about">
      <div class="container">

        <article class="col-xs-12 col-sm-offset-1 col-sm-10 post--content">
          <h2>Välkummin jåt</h2>
          <?php the_content(); ?>
        </article>

      </div>
    </section>

    <section class="feature feature--feed--down feature--news">
      <div class="container">

        <article class="col-xs-12 col-sm-6">

          <div class="widget">

            <div class="widget--title">
              <h4>Aktuellt just nu!</h4>
            </div>

            <div class="widget--body">
              <ul class="nav nav-pills nav-stacked">
              <?php
              	$args = array( 'numberposts' => '10' );
              	$recent_posts = wp_get_recent_posts( $args );
              	foreach( $recent_posts as $recent ){
              		echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a>';
                  echo '</li> ';
              	}
              ?>
              </ul>
            </div>

          </div>

        </article>

        <article class="hidden-xs-down col-sm-6">

          <div class="widget facebook--widget">

            <div class="widget--title">
              <h4>Facebook</h4>
            </div>

            <div class="widget--body">
              <div class="fb-page"
              data-href="https://www.facebook.com/malungshandlarna"
              data-small-header="true"
              data-adapt-container-width="true"
              data-hide-cover="true"
              data-show-facepile="true"
              data-show-posts="true">
                <div class="fb-xfbml-parse-ignore">
                  <blockquote cite="https://www.facebook.com/malungshandlarna">
                    <a href="https://www.facebook.com/malungshandlarna">
                      MalungsHandlarna
                    </a>
                  </blockquote>
                </div>
              </div>
            </div>

          </div>

        </article>

      </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
