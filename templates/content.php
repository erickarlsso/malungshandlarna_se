<main class="main--wrap">

<div class="container">

  <div class="row with--aside">

    <aside class="hidden-xs-down col-sm-4 col-lg-3 aside--wrap">

      <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area')) ?>

    </aside>

    <div class="col-xs-12 col-sm-8 post--content">
      <?php while (have_posts()) : the_post(); ?>

        <?php if ( has_post_thumbnail() ) : ?>
          <div class="row">

            <figure class="col-xs-12 col-sm-4">
              <?php the_post_thumbnail( 'gallerycover' ); ?>
            </figure>

            <article <?php post_class('col-xs-12 col-sm-8'); ?>>
              <?php the_title('<h2>', '</h2>'); ?>
              <?php the_excerpt(); ?>
            </article>

          </div>

        <?php else : ?>

          <div class="row">

            <article <?php post_class('col-xs-12'); ?>>
              <?php the_title('<h2>', '</h2>'); ?>
              <?php the_excerpt(); ?>
            </article>

          </div>

        <?php endif; ?>


      <?php endwhile; ?>
    </div>

  </div>

</div>

</main>
