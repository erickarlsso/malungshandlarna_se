<?php
/**
 * Template Name: Startsida
 */
?>

<?php get_header(); ?>

<main class="main--wrapper">

  <section class="feature feature--blank">
    <div class="container">

      <?php
      if ( get_field('gallery') ) :
        get_template_part( '_parts/module', 'carousel' );
      endif;
      ?>

      <div class="group">

        <article class="col--palm--12 col--portable--12 text--intro">
          <h1>Landsbygdsshopping när den är som bäst</h1>
          <p>
            <a class="btn" href="<?php esc_url(home_url('/')); ?>handlare">Hitta handlare <i class="fa fa-arrow-circle-o-right"> </i></a>
            <a class="btn" href="<?php esc_url(home_url('/')); ?>handlare">Se arrangemang <i class="fa fa-arrow-circle-o-right"> </i></a>
          </p>
        </article>

      </div>

    </div>
  </section>

  <section class="feature feature--feed--down feature--about">
    <div class="container">

      <article class="col--palm--12 col--portable--offset--1 col--portable--5 content--box">
        <h2>Välkummin jåt</h2>
        <?php
        while ( have_posts() ) : the_post();

          the_content();

        endwhile;
        ?>
      </article>

      <article class="col--palm--12 col--portable--5 news--box">

      </article>

    </div>
  </section>

</main>

<?php get_footer(); ?>
