<main class="main--wrapper">
  <div class="container main--content">

      <div class="group">

        <figure class="col--palm--12 col--portable--12 store--cover">
          <?php the_post_thumbnail( 'gallerycover' ); ?>
        </figure>

      </div>

      <div class="group">

        <article class="col--palm--12 col--portable--12 store--info">
          <?php the_title('<h1>', '</h1>'); ?>
          <ul class="nav">
            <li class="col--palm-12 hide--portable">
              <h5>
                <i class="fa fa-facebook"> </i>
                Facebook
              </h5>
              <p>
                <a href="tel:<?php the_field('facebook'); ?>" target="_blank">Klicka här</a>
              </p>
            </li>
            <li class="col--palm-12 col--portable--3">
              <h5>
                <i class="fa fa-external-link"> </i>
                Hemsida
              </h5>
              <p>
                <a href="<?php the_field('website'); ?>" target="_blank">Klicka här</a>
              </p>
            </li>
            <li class="col--palm-12 col--portable--3">
              <h5>
                <i class="fa fa-map-marker"> </i>
                Besöksadress
              </h5>
              <p>
                <a href="#"><?php the_field('address'); ?></a>
              </p>
            </li>
            <li class="col--palm-12 col--portable--3">
              <h5>
                <i class="fa fa-envelope"> </i>
                E-post
              </h5>
              <p>
                <a href="mailto:<?php the_field('e-mail'); ?>"><?php the_field('e-mail'); ?></a>
              </p>
            </li>
            <li class="col--palm-12 col--portable--3">
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

      <div class="group">

        <aside class="col--palm--12 col--portable--4">

          <div class="group widget widget--map">
            <?php
      				$location = get_field('map');
      				if( !empty($location) ):
      					echo '<div class="map" style="height:300px;">';
      						echo '<div class="marker" data-lat="' . $location['lat'] . '" data-lng="' . $location['lng'] . '"></div>';
      					echo '</div>';
      				endif;
      			?>
          </div>

          <?php
          if ( get_field('facebook') ) : ?>
          <div class="group widget widget--feed">
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
          <?php
          endif;
          ?>

        </aside>

        <article class="col--palm--12 col--portable--8 store--content">
          <?php the_content(); ?>
        </article>

      </div>

  </div>
</main>
