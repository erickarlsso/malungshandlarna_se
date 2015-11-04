<main class="main--wrapper">

  <div class="container main--content">

    <?php

      if ( has_post_thumbnail() ) :
        echo '<div class="group">';
          echo '<figure class="col--palm--12 col--portable--12 page--cover">';
            the_post_thumbnail( 'gallerycover' );
          echo '</figure>';
        echo '</div>';
      endif;

      global $post;
      $children = get_pages( array( 'child_of' => $post->ID ) );
      if ( is_page() && ($post->post_parent || count( $children ) > 0  )) :

        echo '<aside class="col--palm--12 col--portable--3">';
          get_template_part( 'templates/module', 'subnav' );
        echo '</aside>';

        echo '<article class="col--palm--12 col--portable--9">';
          the_title('<h1>', '</h1>');
          get_template_part( 'templates/module', 'sharebox' );
          the_content();
        echo '</article>';

      else :

        echo '<article class="col--palm--12 col--portable--12">';
          if ( has_post_thumbnail() ) :
            echo '<div class="group">';
              echo '<figure class="col--palm--12 col--portable--12">';
                the_post_thumbnail( 'gallerycover' );
              echo '</figure>';
            echo '</div';
          endif;
          the_title('<h1>', '</h1>');
          get_template_part( 'templates/module', 'sharebox' );
          the_content();
        echo '</article>';

      endif;
    ?>

  </div>

</main>
