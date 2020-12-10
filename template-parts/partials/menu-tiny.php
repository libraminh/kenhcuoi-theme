<?php 
  wp_nav_menu( array(
    'menu' => $args['menu'],
    'container' => 'nav',
    'container_class' => 'nav navbar-small',
    'menu_class' => 'navbar-small-ul list-unstyled text-uppercase',
    'walker'     => new KenhCuoi_Small_Nav_Walker(),
  ));
?>