<!-- Modal-->
<div class="modal fade" id="service-detail-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img class="modal-lace" src="<?php echo get_template_directory_uri(); ?>/img/ren.png" alt="">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-uppercase text-accent text-center"><strong>Đăng ký nhận báo giá</strong></h4>
      </div>
      <img class="modal-lace-footer" src="<?php echo get_template_directory_uri(); ?>/img/ren.png" alt="">

      <?php echo do_shortcode('[contact-form-7 id="430" title="Price Quote Form"]') ?>
    </div>
  </div>
</div>