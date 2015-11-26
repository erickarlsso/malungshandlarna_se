<?php while (have_posts()) : the_post(); ?>

  <main class="main--wrap">

    <div class="container">

      <?php if ( has_post_thumbnail() ) : ?>
      <div class="row">

        <figure class="col-xs-12 post--image">
          <?php the_post_thumbnail( 'gallerycover' ); ?>
        </figure>

      </div>
      <?php endif; ?>

      <div class="row">

        <article class="col-xs-12 post--content">
          <?php the_title('<h1 class="display-1">', '</h1>'); ?>
          <?php the_content(); ?>
        </article>

      </div>

    </div>

  </main>

<?php endwhile; ?>
