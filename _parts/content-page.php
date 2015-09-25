<main class="main--wrapper">

  <div class="container main--content">

    <?php
      global $post;
      $children = get_pages( array( 'child_of' => $post->ID ) );
      if ( is_page() && ($post->post_parent || count( $children ) > 0  )) : 

        echo '<aside class="col--palm--12 col--portable--3">';
          get_template_part( '_parts/module', 'subnav' );
        echo '</aside>';

        echo '<article class="col--palm--12 col--portable--9">';
          the_title('<h1>', '</h1>');
          get_template_part( '_parts/module', 'sharebox' );
          the_content();
        echo '</article>';

      else :

        echo '<article class="col--palm--12 col--portable--12">';
          the_title('<h1>', '</h1>');
          the_content();
        echo '</article>';

      endif;
    ?>

  </div>

</main>
