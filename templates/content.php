<main class="main--wrap">

<div class="container">

  <div class="row with--aside">

    <aside class="hidden-xs-down col-sm-4 col-lg-3 aside--wrap">

      <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area')) ?>

    </aside>

    <div class="col-xs-12 col-sm-8 post--content">
      <?php while (have_posts()) : the_post(); ?>

          <div class="row">

            <article <?php post_class('col-xs-12'); ?>>
              <?php echo '<a href="' . get_the_permalink() . '">' . '<h2>' . get_the_title() . '</h2>' . '</a>'; ?>
              <?php the_excerpt('excerpt_more'); ?>
            </article>

          </div>

      <?php endwhile; ?>
    </div>

  </div>

</div>

</main>
