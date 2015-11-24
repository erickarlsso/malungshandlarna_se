<main class="main--wrap">
  <div class="container">

      <div class="row">

        <figure class="col-xs-12 post--image">
          <?php the_post_thumbnail( 'gallerycover' ); ?>
        </figure>

      </div>

      <div class="row">

        <article class="col-xs-12 store--info">
          <?php the_title('<h1>', '</h1>'); ?>
          <ul class="nav">
            <li class="hidden-sm-up col-xs-12">
              <h5>
                <i class="fa fa-facebook"> </i>
                Facebook
              </h5>
              <p>
                <a href="<?php the_field('facebook'); ?>" target="_blank">Klicka här</a>
              </p>
            </li>
            <li class="col-xs-12 col-sm-3">
              <?php if ( get_field('website') ) : ?>
              <h5>
                <i class="fa fa-external-link"> </i>
                Hemsida
              </h5>
              <p>
                <a href="<?php the_field('website'); ?>" target="_blank">Klicka här</a>
              </p>
              <?php endif; ?>
            </li>
            <li class="col-xs-12 col-sm-3">
              <h5>
                <i class="fa fa-map-marker"> </i>
                Besöksadress
              </h5>
              <p>
                <a href="#"><?php the_field('address'); ?></a>
              </p>
            </li>
            <li class="col-xs-12 col-sm-3">
              <h5>
                <i class="fa fa-envelope"> </i>
                E-post
              </h5>
              <p>
                <a href="mailto:<?php the_field('e-mail'); ?>"><?php the_field('e-mail'); ?></a>
              </p>
            </li>
            <li class="col-xs-12 col-sm-3">
              <h5>
                <i class="fa fa-phone"> </i>
                Telefon
              </h5>
              <p>
                <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
              </p>
            </li>
          </ul>
        </article>

      </div>

      <div class="row with--aside">

        <aside class="hidden-xs-down col-sm-4 col-lg-3 aside--wrap">

          <div class="widget">

            <div class="widget--body widget--map">
              <?php
        				$location = get_field('map');
        				if( !empty($location) ):
        					echo '<div class="map" style="height:300px;">';
        						echo '<div class="marker" data-lat="' . $location['lat'] . '" data-lng="' . $location['lng'] . '"></div>';
        					echo '</div>';
        				endif;
        			?>
            </div>

          </div>

          <?php
          if ( get_field('facebook') ) : ?>
          <div class="widget">

            <div class="widget--body widget--feed">
              <div class="fb-page"
                data-href="<?php the_field('facebook'); ?>"
                data-small-header="false"
                data-adapt-container-width="true"
                data-hide-cover="false"
                data-width="360"
                data-show-facepile="true"
                data-show-posts="true">
                <div class="fb-xfbml-parse-ignore">
                  <blockquote cite="<?php the_field('facebook'); ?>">
                    <a href="<?php the_field('facebook'); ?>"><?php the_title(); ?></a>
                  </blockquote>
                </div>
              </div>
            </div>

          </div>
          <?php
          endif;
          ?>

        </aside>

        <article class="col-xs-12 col-sm-8 col-lg-9 post--content">
          <?php
          while (have_posts()) : the_post();
            the_content();
          endwhile;
          ?>

        </article>

      </div>

  </div>
</main>
