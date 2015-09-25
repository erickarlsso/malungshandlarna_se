<div class="group widget widget--subnav expander">

  <div class="widget--header">
    <h5 class="widget--title">
      <i class="hide--palm fa fa-bars"> </i>
      Undersidor
      <a href="#" class="expander--toggle">
        <i class="fa fa-bars"> </i>
      </a>
    </h5>
  </div>

  <div class="widget--body expander--content">

    <ul>
    <?php
      $child_args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => $post->ID,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
       );

       $child_query = new WP_Query( $child_args );
       while ( $child_query->have_posts() ) : $child_query->the_post();

        echo '<li>';
          echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
        echo '</li>';

      endwhile;
      wp_reset_query();
    ?>
    </ul>
  </div>

</div>
