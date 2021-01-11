<div class="promotion-detail-info">
  <div class="row">
    <div class="col-md-9">
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/promotion-detail/info.png"
              alt="image">
          </a>
        </div>
        <div class="media-body">
          <h5 class="media-heading text-uppercase"><strong>MỘC THANH STUDIO</strong></h5>
          <div class="margin-box-2 visible-sm visible-xs"></div>
          <ul class="list-unstyled">
            <li>
              <i class="fa fa-map-marker text-accent" aria-hidden="true"></i>
              <span>
                45A Nguyễn Thông, Phường 7, Quận
                3, Hồ Chí Minh
              </span>
            </li>
            <li>
              <i class="fa fa-phone text-accent" aria-hidden="true"></i>
              <span> 028 3933 37 36 – 0934718668</span>
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

    <?php get_template_part( 'template-parts/partials/price', 'quote-modal'); ?>
  </div>
</div>