<?php
/**
 * Template Name: Arrangemang
 */
?>

<?php get_header(); ?>

<main class="main--wrapper">

  <section class="feature feature--text">
    <div class="container">

      <?php
      if ( have_posts() ) :

        while ( have_posts() ) : the_post();

          the_content();

        endwhile;

      endif;
      ?>

    </div>
  </section>

  <section class="feature feature--feed--down feature--timeline">
    <div class="container">

      <?php get_template_part( '_parts/module', 'timeline' ); ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>
