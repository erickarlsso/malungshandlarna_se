<?php
/**
 * Template Name: Startsida
 */
?>

<?php get_header(); ?>

<main class="main--wrapper">

  <section class="group feature feature--blank">
    <div class="container--full">

      <article class="col--palm--12 col--portable--offset--1 col--portable--6">
        <img class="image--border" src="http://erickarlsson.nu/malungshandlarna/wp-content/uploads/2015/07/Ica-1170x658.jpg">
        <h1>
          Landsbygdsshopping när den är som bäst
        </h1>
        <p>
          Letar Du efter nån?
          <a class="" href="<?php esc_url(home_url('/')); ?>handlare">Hitta handlare <i class="fa fa-arrow-circle-o-right"> </i></a>
        </p>
      </article>

      <figure class="col--palm--offset--2 col--palm--8 col--portable--offset--0 col--portable--3">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/img/mh-malkom.png">
      </figure>

    </div>
  </section>

  <section class="group feature feature--about">
    <div class="container">

      <article class="col--palm--12 col--portable--offset--1 col--portable--4 content--box">
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
