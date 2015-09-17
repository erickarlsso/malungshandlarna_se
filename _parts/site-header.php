<header class="header-wrapper navbar navbar-fixed-top">

  <section class="header--secondary hidden-xs-down">
    <div class="container">

      <nav class="pull-right">
        <?php
        if (has_nav_menu('header_secondary')) :
          wp_nav_menu([
            'theme_location'  => 'header_secondary',
            'container'       => 'false',
            'menu_class'      => 'nav'
          ]);
        endif;
        ?>
      </nav>

    </div>
  </section>

  <section class="header--primary">
    <div class="container">

      <a href="<?php esc_url(home_url('/')); ?>" class="navbar--brand">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/img/huvudlogga_vit_sv.png">
      </a>

      <nav class="pull-right">
        <?php
        if (has_nav_menu('header_primary')) :
          wp_nav_menu([
            'theme_location'  => 'header_primary',
            'container'       => 'false',
            'menu_class'      => 'nav navbar--main hidden-xs-down'
          ]);
        endif;
        ?>

        <ul class="nav navbar--sub">
          <li class="subnav--book hidden-xs-down">
            <a href="#" class="navbar--book">
              <i class="fa fa-search">&nbsp;</i>
              Sök & Boka
            </a>
          </li>
          <li class="subnav--toggle hidden-sm-up">
            <a href="#" class="navbar--toggle">
              <i class="fa fa-bars">&nbsp;</i>
            </a>
          </li>
        </ul>
      </nav>

    </div>
  </section>

</header>
