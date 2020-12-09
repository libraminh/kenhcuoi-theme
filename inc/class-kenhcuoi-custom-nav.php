<?php 
  class KenhCuoi_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
      if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
          $t = '';
          $n = '';
      } else {
          $t = "\t";
          $n = "\n";
      }
      $indent = str_repeat( $t, $depth );
  
      // Default class.
      $classes = array( 'sub-menu header-navbar-left-sub list-unstyled' );
  
      // sub menu classes
      $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
      $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
  
      $output .= "{$n}{$indent}<ul$class_names>{$n}";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
      $object = $item->object;
    	$type = $item->type;
    	$title = $item->title;
    	$description = $item->description;
      $permalink = $item->url;

      // get icon acf field
      $menuIcon = get_field( 'icon', $item->ID );

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = 'tada';

      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
      $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

      $output .= $indent . '<li ' . $class_names . '>';

      $output .= '<a href="' . $permalink . '">';

      // insert logo into submenu items
      if ($depth == 1) {
        $output .= $indent . '<img class="icon-nav" src="' . $menuIcon['url'] .'" />';
      }

      $output .= $title;

      $output .= '</a>';
    }
  }
?>