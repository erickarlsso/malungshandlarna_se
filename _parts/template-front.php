<section class="feature feature--video" style="background-image:url(<?php the_field('background'); ?>);">

  <?php if( get_field('youtube') ) { ?>
  <div class="hidden-xs-down video" style="padding-top: 56.25%;">
    <div id="youtube"></div>
    <script>
      if (screen.width > 768) {
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubeIframeAPIReady() {
          player = new YT.Player('youtube', {
            height: '720',
            width: '1280',
            videoId: '<?php the_field('youtube'); ?>',
            playerVars: { 'loop': 1, 'controls': 0, 'showinfo': 0, 'rel': 0, 'playlist': '<?php the_field('youtube'); ?>'},
            events: {
              'onReady': onPlayerReady
            }
          });
        }
        function onPlayerReady(event) {
          event.target.setVolume(0);
          event.target.playVideo();
        }
      }
    </script>
    <div class="overlay"></div>
  </div>
  <?php } ?>

  <h1>Landsbygdsshoppning<br>när den är som bäst</h1>

</section>
