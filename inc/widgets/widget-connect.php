<?php

if(!class_exists('WidgetConnect')) {

  class WidgetConnect extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
      $widget_ops = array(
        'classname' => 'widget_connect',
        'description' => 'Display Footer Ket Noi',
      );
      parent::__construct( 'widget_connect', 'Widget Connect', $widget_ops );
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
      ?>
      <?php echo $args['before_widget']; ?>
        <div class="footer-connect">
          <h3 class="widget-title text-uppercase"><?php echo $title; ?></h3>
          <div class="margin-box"></div>
          
          <?php if( have_rows('list_repeater', $widget_id) ): ?>
            <figure style="display: grid; grid-gap: 10px; grid-template-columns: repeat(3, minmax(0, 1fr));">
              <?php while( have_rows('list_repeater', $widget_id) ): the_row(); 
                $link = get_sub_field('link');
                $image = get_sub_field('image');
                ?>
                <div class="footer-wrap-box" style="margin: 0 !important;">
                  <a href="<?php echo $link['url']; ?>">
                    <img style="width: 100%;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                  </a>
                </div>
              <?php endwhile; ?>
            </figure> 
          <?php endif; ?>
        </div>
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
function register_widget_connect()
{
  register_widget( 'WidgetConnect' );
}
add_action( 'widgets_init', 'register_widget_connect' );
