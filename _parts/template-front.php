<section class="feature feature--intro" style="background-image:url(http://www.visitdalarna.se/globalassets/visit-idre/bilder/1500x1125/cykling-i-idre.jpg);">
  <div class="container">

    <ul class="nav">

      <li class="col-xs-6 col-sm-3 panel--box">
        <a href="#">
          <span class="icon--row"><i class="fa fa-bed animated"></i></span>
          <h3 class="title--row">Bo</h3>
          <p>längs västerdalälven..</p>
        </a>
      </li>

      <li class="col-xs-6 col-sm-3 panel--box">
        <a href="#">
          <span class="icon--row"><i class="fa fa-bicycle animated"></i></span>
          <h3 class="title--row">Göra</h3>
          <p>aktiviteter i massor..</p>
        </a>
      </li>

      <li class="col-xs-6 col-sm-3 panel--box">
        <a href="#">
          <span class="icon--row"><i class="fa fa-gift animated"></i></span>
          <h3 class="title--row">Paket</h3>
          <p>färdiga lösningar..</p>
        </a>
      </li>

      <li class="col-xs-6 col-sm-3 panel--box">
        <a href="#">
          <span class="icon--row"><i class="fa fa-info animated"></i></span>
          <h3 class="title--row">Kontakt</h3>
          <p>ta en snackis..</p>
        </a>
      </li>

    </ul>

  </div>
</section>

<section class="feature feature--about">
  <div class="container">

    <article class="col-xs-12 col-sm-7 content--box">
      <h1>Välkummin jåt</h1>

      <?php
      while ( have_posts() ) : the_post();

        the_content();

      endwhile;
      ?>
    </article>

  </div>
</section>

<section class="feature feature--social">
  <div class="container-fluid">

  </div>
</section>
