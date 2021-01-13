<div class="promotion-detail-info">
  <div class="row">
    <div class="col-md-9">
      <div class="media">
        <div class="media-left">
          <a href="#">
            <?php echo get_avatar(
              $comment, 
              $size = '76', 
              $default = 'https://imgix.bustle.com/uploads/image/2020/11/5/cbe5f6dc-a0d8-4b6a-bd01-350c0a3784a5-bluesus.png?w=350&h=298&auto=format%2Ccompress&cs=srgb&q=70&fit=crop&crop=faces',
              $alt = 'avatar',
              array( 'class' => array( 'media-object object-fit object-center' ))
            ); ?>
          </a>
        </div>
        <div class="media-body">
          <h5 class="media-heading text-uppercase">
            <strong><?php the_author(); ?></strong>
          </h5>
          <div class="margin-box-2 visible-sm visible-xs"></div>
          <ul class="list-unstyled">
            <li>
              <i class="fa fa-map-marker text-accent" aria-hidden="true"></i>
              <span>
                <?php the_field('address', 'user_' . get_current_user_id()); ?>
              </span>
            </li>
            <li>
              <i class="fa fa-phone text-accent" aria-hidden="true"></i>
              <span> <?php the_field('phone_number', 'user_' . get_current_user_id()); ?></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <a class="btn btn-accent-1 btn-block text-uppercase" data-toggle="modal" data-target="#service-detail-modal">
        Nhận Báo Giá
      </a>
    </div>

  </div>
</div>