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

    <?php
    global $post;
    $children = get_pages( array( 'child_of' => $post->ID ) );
    if ( is_page() && ($post->post_parent || count( $children ) > 0  )) : ?>

      <div class="row with--aside">

        <aside class="hidden-xs-down col-sm-4 col-lg-3 aside--wrap">

          <div class="widget">

            <div class="widget--title">
              <h4>Navigering</h4>
            </div>

            <ul class="nav">
              <?php
                global $post;

                if($post->post_parent) {
                    $parent_id = get_post_ancestors($post->ID);
                    $id = end($parent_id);
                } else {
                    $id = $post->ID;
                }
                wp_list_pages('title_li=&child_of=' . $id);
              ?>
            </ul>

          </div>

        </aside>

        <article class="col-xs-12 col-sm-8 col-lg-9 post--content">
          <?php the_title('<h1>', '</h1>'); ?>
          <?php the_content(); ?>
        </article>

      </div>

    <?php
    else :
    ?>

      <div class="row">

        <article class="col-xs-12 post--content">
          <?php the_title('<h1 class="display-1">', '</h1>'); ?>
          <?php the_content(); ?>
        </article>

      </div>

    <?php
    endif;
    ?>

    </div>

  </main>

<?php endwhile; ?>
