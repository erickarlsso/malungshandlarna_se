<?php
$images = get_field('gallery');
if( $images ): ?>
  <div class="carousel carousel--single">
    <?php foreach( $images as $image ): ?>
      <div class="item">
        <img src="<?php echo $image['sizes']['gallerycover']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
