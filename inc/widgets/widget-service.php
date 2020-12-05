<?php

if(!class_exists('WidgetService')) {

  class WidgetService extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
      $widget_ops = array(
        'classname' => 'widget_service',
        'description' => 'Display Footer Dich Vu',
      );
      parent::__construct( 'widget_service', 'Widget Service', $widget_ops );
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

        <?php if( have_rows('flexible_content', $widget_id) ): ?>
        <?php while( have_rows('flexible_content', $widget_id) ): the_row(); ?>
          <?php if( get_row_layout() == 'section_service' ):
            $title_service = get_sub_field('title_service');
          ?>
            <figure>
              <h3 class="widget-title text-uppercase"><?php echo $title_service; ?></h3>
              <div class="margin-box"></div>
                
              <?php if( have_rows('menu_repeater', $widget_id) ): ?>
                <nav>
                  <ul class="footer-nav footer-nav-service list-unstyled">
                  <?php while( have_rows('menu_repeater', $widget_id) ): the_row(); 
                      $menu_link = get_sub_field('menu_link');
                      ?>
                      <li>
                        <a href="<?php echo $menu_link['url']?>" target="<?php echo $menu_link['target']?>">
                          <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                          <span><?php echo $menu_link['title']?></span>
                        </a>
                      </li>
                  <?php endwhile; ?>
                  </ul>
                </nav>
              <?php endif; ?>
              <div class="margin-box"></div>
            </figure>

            <?php elseif( get_row_layout() == 'section_share' ): 
              $title_share = get_sub_field('title_share'); ?>
            
              <?php if( have_rows('share_repeater', $widget_id) ): ?>
                <figure>
                  <h3 class="widget-title text-uppercase"><?php echo $title_share; ?></h3>
                  <div class="margin-box"></div>

                  <nav>
                    <ul class="footer-social list-unstyled">
                    <?php while( have_rows('share_repeater', $widget_id) ): the_row(); 
                      $icon = get_sub_field('icon');
                      $link = get_sub_field('link');
                      ?>
                      <li>
                        <a href="<?php echo $link['url']?>" target="<?php echo $link['target']?>">
                          <i class="<?php echo $icon; ?>" aria-hidden="true"></i>
                        </a>
                      </li>
                    <?php endwhile; ?>
                    </ul>
                  </nav>
                  <?php endif; ?>
                  <div class="margin-box"></div>
                </figure>

          <?php endif; ?>
        <?php endwhile; ?>
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
function register_widget_service()
{
  register_widget( 'WidgetService' );
}
add_action( 'widgets_init', 'register_widget_service' );
