<main class="main-wrapper">
  <div class="container main--content">

    <article class="col-xs-12 col-sm-12 content--box">

      <div class="row">

        <?php the_title('<h1>', '</h1>'); ?>

      </div>

      <div class="row">

        <figure class="col-xs-12 col-sm-6">
          <?php the_post_thumbnail( 'storecover' ); ?>
        </figure>

        <figure class="col-xs-12 col-sm-6">
          <?php
    				$location = get_field('map');
    				if( !empty($location) ):
    					echo '<div class="map" style="height:300px;">';
    						echo '<div class="marker" data-lat="' . $location['lat'] . '" data-lng="' . $location['lng'] . '"></div>';
    					echo '</div>';
    				endif;
    			?>
        </figure>

      </div>

      <div class="row">

        <figure class="col-xs-12 col-sm-6">

          <div>
            <span class="lead">Kontaktuppgifter</span>
            <ul class="nav">
              <li>
                <a href="mailto:<?php the_field('e-mail'); ?>">
                  <i class="fa fa-envelope"> </i>
                  <?php the_field('e-mail'); ?>
                </a>
              </li>
              <li>
                <a href="tel:<?php the_field('phone'); ?>">
                  <i class="fa fa-phone"> </i>
                  <?php the_field('e-mail'); ?>
                </a>
              </li>
              <li>
                <a href="javscript:void">
                  <i class="fa fa-map-marker"> </i>
                  <?php the_field('address'); ?>
                </a>
              </li>
            </ul>
          </div>

        </figure>

      </div>

      <div class="row">

        <article class="col-xs-12 col-sm-12">
          <?php the_content(); ?>
        </article>

      </div>

  </div>
</main>
