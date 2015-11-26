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

            <div class="hidden-xs-down row">

              <div class="col-xs-12">

                <div class="btn-group btn-group-lg" role="group" aria-label="...">

                  <button type="button" class="btn btn-primary">
                    <a href="<?php echo get_permalink(12); ?>">
                      <i class="fa fa-search">&nbsp;</i>
                      Hitta handlare
                    </a>
                  </button>
                  <button type="button" class="btn btn-primary">
                    <a href="<?php echo get_permalink(8); ?>">
                      <i class="fa fa-calendar"> </i>
                      Vad händer just nu?
                    </a>
                  </button>

                </div>

              </div>

            </div>

            <div class="hidden-sm-up row">

              <ul class="col-xs-12 nav">
                <li>
                  <a href="<?php echo get_permalink(12); ?>">
                    <h3 class="fa fa-search fa-2x">
                      <span>Hitta handlare</span>
                    </h3>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_permalink(8); ?>">
                    <h3 class="fa fa-calendar fa-2x">
                      <span>Händer just nu</span>
                    </h3>
                  </a>
                </li>
              </ul>

            </div>

          </article>

      </div>
    </section>
  <?php endif; ?>

    <section class="feature feature--about">
      <div class="container">

        <div class="row feature--row">

          <article class="col-xs-12 col-sm-4">

              <figure class="panel">

                <span><i class="fa fa-car"></i></span>
                <h3>Parkeringsmöjligheter</h3>
                <p>
                  Slipp storstadsmyllret av bilar och problemet att hitta en parkeringsplats, här finns parkering runt knuten!
                </p>

              </figure>

          </article>

          <article class="col-xs-12 col-sm-4">

              <figure class="panel">

                <span><i class="fa fa-heart"></i></span>
                <h3>Service med känsla</h3>
                <p>
                  Precis som med allt annat här på landsbygden så tar vi i från tårna, speciellt när det kommer till service och bemötande
                </p>

              </figure>

          </article>

          <article class="col-xs-12 col-sm-4">

              <figure class="panel">

                <span><i class="fa fa-credit-card"></i></span>
                <h3>rubrik</h3>
                <p>
                  text
                </p>

              </figure>

          </article>

        </div>

        <div class="row content--row">

          <article class="col-xs-12 col-sm-offset-1 col-sm-10">
            <h2>Välkummin jåt</h2>
            <?php the_content(); ?>
          </article>

        </div>

      </div>
    </section>

    <section class="feature feature--news">
      <div class="container">

        <article class="hidden-xs-down col-sm-4">

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

        <article class="col-xs-12 col-sm-8">

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

      </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
