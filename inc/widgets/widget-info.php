<?php

if(!class_exists('InfoWidget')) {

  class InfoWidget extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
      $widget_ops = array(
        'classname' => 'widget_info',
        'description' => 'Display Footer Thong Tin Lien He',
        'customize_selective_refresh' => true,
      );
      parent::__construct( 'widget_info', __( 'Widget Information' ), $widget_ops );
      $this->alt_option_name = 'widget_recent_entries';
    }


    /**
    * Outputs the content of the widget
    *
    * @param array $args
    * @param array $instance
    */
    public function widget( $args, $instance ) {
      // outputs the content of the widget
      if ( ! isset( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }

      // widget ID with prefix for use in ACF API functions
      $widget_id = 'widget_' . $args['widget_id'];

      $title = get_field( 'title', $widget_id ) ? get_field( 'title', $widget_id ) : '';
      // $title = apply_filters( 'widget_title', $title, $instance, $widget_id );
      $title   = apply_filters( 'widget_title', $title );
      $text_content = get_field( 'text_content', $widget_id ) ? get_field( 'text_content', $widget_id ) : '';
      ?>
        <?php echo $args['before_widget']; ?>
        <h3 class="widget-title text-uppercase"><?php echo $title; ?></h3>
        <div class="margin-box"></div>
        <div class="widget-content"><?php echo $text_content; ?></div>
        
        <?php if( have_rows('list_group', $widget_id) ): ?>
          <ul class="footer-nav list-unstyled">
          <?php while( have_rows('list_group', $widget_id) ): the_row(); 
              $list_icon = get_sub_field('list_icon');
              $list_content = get_sub_field('list_content');
              ?>
              <li>
                <i class="<?php echo $list_icon; ?>" aria-hidden="true"></i>
                <span><?php echo $list_content; ?></span>
              </li>
          <?php endwhile; ?>
          </ul> 
        <?php endif; ?>

        <?php echo $args['after_widget']; ?>
      <?php
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
    	// outputs the options form on admin
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update( $new_instance, $old_instance ) {
    	// processes widget options to be saved
    }

  }

}

/**
 * Register our CTA Widget
 */
function register_widget_info()
{
  register_widget( 'InfoWidget' );
}
add_action( 'widgets_init', 'register_widget_info' );


