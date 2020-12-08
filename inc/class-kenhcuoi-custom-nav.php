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
  
      /**
       * Filters the CSS class(es) applied to a menu list element.
       *
       * @since 4.8.0
       *
       * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
       * @param stdClass $args    An object of `wp_nav_menu()` arguments.
       * @param int      $depth   Depth of menu item. Used for padding.
       */
      $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
      $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
  
      $output .= "{$n}{$indent}<ul$class_names>{$n}";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
      // if( 0 == $depth ) 
      //   return;

      array_push($item->classes, 'tada');

      

      // $classes[] = 'tada';
      

      // // $output .= '<li>hhi</li>';
      // $classes = apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth );

      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

      print_r($item_output);

      if ($depth == 1) {
        $output = '<li>hiHi</li>';
      }

      parent::start_el($output, $item, $depth, $args);
    }

    // public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		// 	if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
		// 		$t = '';
		// 		$n = '';
		// 	} else {
		// 		$t = "\t";
		// 		$n = "\n";
		// 	}
		// 	$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

			

		// 	// END appending the internal item contents to the output.
		// 	// $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    // }
  

  }

  
?>