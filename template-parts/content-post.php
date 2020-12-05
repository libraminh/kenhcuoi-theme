<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenhcuoi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('promotion-detail'); ?>>
	<header class="entry-header">
		<?php
		if ( 'masthead_slider' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				kenhcuoi_posted_on();
				kenhcuoi_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

  <?#php kenhcuoi_post_thumbnail(); ?>
  
  <div class="post-video-showcase-wrap">
    <?php 
      require get_template_directory() . '/inc/post-thumbnail-alt.php';
    ?>
    <img style="width: 100%;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
    
    <?php 
      if ( is_singular() ) :
        the_title( '<h4 class="entry-title home-showcase-title text-uppercase"><strong>', '</strong></h4>' );
      else :
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      endif;
    ?>
  </div>

  <div class="post-video-showcase-metadata">
    <p class="text-accent text-uppercase">
      <strong>STUDIO  <span class="divine-1">|</span> Thời gian khuyến mãi : 27.07.2017 - 27.08.2017</strong>
    </p>
    <small class="home-popular-date">
      <!-- views -->
      <?php if ( function_exists('wpp_get_views') ) echo wpp_get_views(get_the_ID()); ?> 
      <i class="fa fa-eye" aria-hidden="true"></i>
      <!-- comments -->
      | <?php echo get_comments_number(get_the_ID()); ?> <i class="fa fa-comment" aria-hidden="true"></i>
    </small>
  </div>

  <div class="promotion-detail-info">
    <div class="row">
      <div class="col-md-9">
        <div class="media">
          <div class="media-left"><a href="#"><img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/promotion-detail/info.png" alt="..."></a></div>  
          <div class="media-body">
            <h5 class="media-heading text-uppercase"><strong>MỘC THANH STUDIO</strong></h5>
            <div class="margin-box-2 visible-sm visible-xs"></div>
            <ul class="list-unstyled">
              <li> <i class="fa fa-map-marker text-accent" aria-hidden="true"></i><span> 45A Nguyễn Thông, Phường 7, Quận 3, Hồ Chí Minh</span></li>
              <li> <i class="fa fa-phone text-accent" aria-hidden="true"></i><span>  028 3933 37 36 – 0934718668</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3"><a class="btn btn-accent-1 btn-block text-uppercase" data-toggle="modal" data-target="#service-detail-modal">Nhận Báo Giá</a></div>
      <!-- Modal-->
      <div class="modal fade" id="service-detail-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header"><img class="modal-lace" src="assets/img/ren.png" alt="">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>          
              <h4 class="modal-title text-uppercase text-accent text-center"><strong>Đăng ký nhận báo giá</strong></h4>
            </div>        
            <div class="modal-body">
              <div class="row">
                <form>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-uppercase">Tên Của Bạn</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-uppercase">Số Điện Thoại Của Bạn</label>
                      <input class="form-control" type="tel">
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <form>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-uppercase">Email Của Bạn</label>
                      <input class="form-control" type="email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-uppercase">Ngày Cưới Dự Kiến</label>
                      <input class="form-control" type="date">
                    </div>
                  </div>
                </form>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Chưa xác định ngày cưới
                </label>
              </div>
              <div class="margin-box-2">   </div>
              <form>
                <div class="form-group">
                  <label class="text-uppercase">Lời Nhắn</label>
                  <textarea class="form-control" type="text" rows="3"> </textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-accent text-uppercase" type="button">Gửi</button><img class="modal-lace-footer" src="assets/img/ren.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="post-video-showcase-morelink">
    <ul class="post-video-showcase-morelink-nav">
      <li><a href="#">Gói chụp ảnh cưới chuyên nghiệp - tự nhiên - nghệ thuật</a></li>
      <li><a href="#">Gói combo Wedding "Biển xanh vẫy gọi" siêu tiết kiệm chỉ với với 8.600.000 VNĐ</a></li>
      <li><a href="#">Chụp hình cưới trọn gói giá rẻ chỉ 2.990.000đ – Tại phim trường Mini Xinh Xinh</a></li>
      <li><a href="#">Dịch vụ chụp ảnh ăn hỏi đám cưới, chụp ảnh phóng sự cưới-MTP Studio</a></li>
    </ul>
  </div>

	<div class="entry-content post-video-showcase-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'kenhcuoi' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kenhcuoi' ),
				'after'  => '</div>',
			)
		);
		?>
  </div><!-- .entry-content -->
  
  <?php get_template_part( 'template-parts/global/post', 'share-bar'); ?>

  <div class="margin-box"></div>

  <?php get_template_part( 'template-parts/global/post', 'ads'); ?>
  
  <div class="margin-box"></div>
  
  <?php get_template_part( 'template-parts/global/post', 'related'); ?>

  <div class="margin-box"></div>

  <div class="show-all">
    <a href="#">
      <h5 class="text-uppercase"><strong>Xem Tất Cả</strong></h5>
    </a>
  </div>

	<footer class="entry-footer">
		<?php kenhcuoi_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
