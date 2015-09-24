<?php
/**
 * Template Name: Startsida
 */
?>

<?php get_header(); ?>

<main class="main--wrapper">

  <section class="group feature feature--blank">
    <div class="container--full">

      <article class="col--palm--12 col--portable--offset--1 col--portable--5">
        <h1>
          Landsbygdsshopping<br>
          När den är som bäst
        </h1>
        <p>
          Letar Du efter nån? <a href="<?php esc_url(home_url('/')); ?>handlare">Hitta handlare <i class="fa fa-arrow-circle-o-right"> </i></a>
        </p>
      </article>

      <figure class="col-xs-12 col-sm-3">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/img/mh-malkom.png">
      </figure>

    </div>
  </section>

  <section class="group feature feature--about">
    <div class="container">

      <article class="col--palm--12 col--portable--offset--1 col--portable--5 content--box">
        <h2>Välkummin jåt</h2>
        <?php
        while ( have_posts() ) : the_post();

          the_content();

        endwhile;
        ?>
      </article>

      <article class="col-xs-12 col-sm-5 news--box">

      </article>

    </div>
  </section>

</main>

<?php get_footer(); ?>
