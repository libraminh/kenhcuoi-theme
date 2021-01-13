<section class="header-navbar" style="z-index: 20; position: relative;">
  <div class="wrap-header-navbar">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <?php 
            wp_nav_menu( array(
              'menu' => 'Menu Left',
              'container' => 'nav',
              'container_class' => 'nav',
              'menu_class' => 'header-navbar-left header-navbar-left-1 list-unstyled text-uppercase',
              'walker'     => new KenhCuoi_Nav_Walker(),
            ));
          ?>
        </div>

        <div class="col-md-2 hidden-sm hidden-xs">
          <div class="header-navbar-brand">
            <a class="header-navbar-brand-btn" href="/">
              <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/home/base_logo_2.svg" alt="">
              <img class="small-logo" src="<?php echo get_template_directory_uri(); ?>/img/home/logo.png" alt="">
            </a>
          </div>
        </div>

        <div class="col-md-5">
          <?php 
            wp_nav_menu( array(
              'menu' => 'Menu Right',
              'container' => 'nav',
              'container_class' => 'nav',
              'menu_class' => 'header-navbar-left header-navbar-left-1 list-unstyled text-uppercase',
              'walker'     => new KenhCuoi_Nav_Walker(),
            ));
          ?>
        </div>

      </div>
    </div>
  </div>
</section>