<?php 
    // Creating the widget 
class wpb_widget extends WP_Widget {
  
  function __construct() {
    parent::__construct(
      // Base ID of your widget
      'wpb_widget', 
      
      // Widget name will appear in UI
      __('Kenhcuoi Sidebar', 'wpb_widget_domain'), 
      
      // Widget description
      array( 'description' => __( 'KenhCuoi Custom Sidebar', 'wpb_widget_domain' ), ) 
    );
  }
      
  // Creating widget front-end
  public function widget( $args, $instance ) {
    $default_title = __( 'KenhCuoi Widget' );
    $title         = ( ! empty( $instance['title'] ) ) ? $instance['title'] : $default_title;
    $title   = apply_filters( 'widget_title', $title );
    $content = ( ! empty( $instance['content'] ) ) ? strip_tags($instance['content']) : '';
    $content = apply_filters( 'widget_text', $content );
    $link_title = ( ! empty( $instance['link_title'] ) ) ? $instance['link_title'] : '';
    $link = ( ! empty( $instance['link'] ) ) ? $instance['link'] : '';
    $show_link = isset( $instance['show_link'] ) ? $instance['show_link'] : false;

    echo $args['before_widget'];
    if ( ! empty( $title ) ) {
      echo $args['before_title'] . '<strong>' . $title . '</strong>' . $args['after_title'];
    }
    echo '<div class="margin-box-2"></div>';
    if ( ! empty( $content ) ) {
      echo $content;
    }

    echo '<div class="margin-box"></div>';

    // if ($show_link) :
    //   echo '
    //     <div class="show-all-1">
    //       <a href="' . (!empty($link) ? $link : '#') . '">
    //         <h5 class="text-uppercase"><strong>' . (!empty($link_title) ? $link_title : 'Xem Tất Cả') . '</strong></h5>
    //       </a>
    //     </div>
    //   ';
    // endif;

    echo '<div class="margin-box"></div>';

    echo $args['after_widget'];
  }

  /**
   * Handles updating the settings for the current Recent Posts widget instance.
   *
   * @since 2.8.0
   *
   * @param array $new_instance New settings for this instance as input by the user via
   *                            WP_Widget::form().
   * @param array $old_instance Old settings for this instance.
   * @return array Updated settings to save.
  */
  public function update( $new_instance, $old_instance ) {
    $instance              = $old_instance;
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['content']   = strip_tags( $new_instance['content'] );
		$instance['link_title']   = strip_tags( $new_instance['link_title'] );
		$instance['link']   = strip_tags( $new_instance['link'] );
		$instance['show_link'] = isset( $new_instance['show_link'] ) ? (bool) $new_instance['show_link'] : false;
		return $instance;
  }
              
    // Widget Backend 
  public function form( $instance ) {
    $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
    $content     = isset( $instance['content'] ) ? esc_attr( $instance['content'] ) : '';
    $link_title     = isset( $instance['link_title'] ) ? esc_attr( $instance['link_title'] ) : '';
    $link     = isset( $instance['link'] ) ? esc_attr( $instance['link'] ) : '';
    $show_link = isset( $instance['show_link'] ) ? (bool) $instance['show_link'] : true;
  ?>
<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
    name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label>
  <textarea rows="3" class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>"
    name="<?php echo $this->get_field_name( 'content' ); ?>"
    value="<?php echo esc_attr( $content ); ?>"><?php echo esc_attr( $content ); ?></textarea>
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'link_title' ); ?>"><?php _e( 'Link Title:' ); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id( 'link_title' ); ?>"
    name="<?php echo $this->get_field_name( 'link_title' ); ?>" value="<?php echo esc_attr( $link_title ); ?>"
    placeholder="<?php echo 'Xem Tất Cả'; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link:' ); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>"
    name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo esc_attr( $link ); ?>" placeholder="#" />
</p>
<p>
  <input <?php checked( $show_link ); ?> type="checkbox" class="widefat"
    id="<?php echo $this->get_field_id( 'show_link' ); ?>" name="<?php echo $this->get_field_name( 'show_link' ); ?>" />
  <label for="<?php echo $this->get_field_id( 'show_link' ); ?>"><?php _e( 'Show Link All:' ); ?></label>
</p>

<?php }
  } 
     
  // Register and load the widget
  function wpb_load_widget() {
    register_widget( 'wpb_widget' );
  }
  add_action( 'widgets_init', 'wpb_load_widget' );
?>