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

</div>
