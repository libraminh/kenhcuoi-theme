<section class="header-navbar" style="z-index: 20; position: relative;">
  <div class="wrap-header-navbar">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <nav id="menu">
            <!-- <?php
              wp_nav_menu( array(
                'theme_location'    => 'menu-1',
                'depth'             => 2,
                'menu_class'        => 'header-navbar-left header-navbar-left-1 list-unstyled text-uppercase',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
              ) );
            ?> -->

            <ul class="header-navbar-left header-navbar-left-1 list-unstyled text-uppercase">
              <li><a href="index.html">Trang Chủ</a></li>
              <li><a href="service.html">DỊCH VỤ
                  <ul class="header-navbar-left-sub list-unstyled">
                    <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/home/service/nhahangtieccuoi.svg" alt="">Nhà hàng tiệc cưới</a></li>
                    <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/home/service/studio.svg" alt="">Studio</a></li>
                    <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/home/service/nhancuoi.svg" alt="">Trang sức cưới</a></li>
                    <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/home/service/thiepcuoi.svg" alt="">Thiệp cưới</a></li>
                    <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/home/service/weddingplanner.svg" alt="">Wedding planner</a></li>
                    <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/home/service/trangmat.svg" alt="">Trăng mật</a></li>
                    <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/home/service/quacuoi.svg" alt="">Quà cưới</a></li>
                    <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/home/service/hoacuoi.svg" alt="">Hoa cưới</a></li>
                  </ul></a></li>
              <li><a href="promotion.html">KHUYẾN MÃI</a></li>
              <li><a href="video.html">VIDEO </a></li>
              <li><a class="hidden-md hidden-lg" href="post-list1.html">Ý Tưởng Cưới
                  <ul class="header-navbar-left-sub list-unstyled">
                    <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/cauhon.svg" alt="">Cầu hôn</a></li>
                    <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/diadiemcuoi.svg" alt="">Địa điểm cưới</a></li>
                    <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/ngansach.svg" alt="">Ngân sách</a></li>
                    <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/chuphinh.svg" alt="">Chụp hình cưới</a></li>
                    <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/nghithuc.svg" alt="">Nghi thức</a></li>
                    <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/toccuoi.svg" alt="">Tóc cưới</a></li>
                    <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/trangtri.svg" alt="">Trang trí</a></li>
                    <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/trangmat.svg" alt="">Trăng mật</a></li>
                    <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/xuhuongcuoi.svg" alt="">Xu hướng cưới</a></li>
                    <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/quacuoi.svg" alt="">Quà cưới cảm ơn</a></li>
                  </ul></a></li>
              <li><a class="hidden-md hidden-lg" href="collection.html">BỘ SƯU TẬP
                  <ul class="header-navbar-left-sub list-unstyled">
                    <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/nhancuoi-bosuutap.svg" alt="">Nhẫn cưới</a></li>
                    <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/phukiencuoi.svg" alt="">Phụ kiện cưới</a></li>
                    <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/ao vest.svg" alt="">Áo vest</a></li>
                    <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/aodai2.svg" alt="">Áo dài cưới</a></li>
                    <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vaychua.svg" alt="">Váy chữ A</a></li>
                    <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vayxoe.svg" alt="">Váy xòe</a></li>
                    <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vaycupnguc.svg" alt="">Váy cúp ngực</a></li>
                    <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vayduoica.svg" alt="">Váy đuôi cá</a></li>
                    <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/lechvai.svg" alt="">Váy lệch vai</a></li>
                    <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vayngan.svg" alt="">Váy ngắn</a></li>
                    <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vayphudau.svg" alt="">Váy phụ dâu</a></li>
                  </ul></a></li>
              <li><a class="hidden-md hidden-lg" href="#">KÊNH QUÀ TẶNG</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-md-2 hidden-sm hidden-xs">
          <div class="header-navbar-brand"><a class="header-navbar-brand-btn" href="#"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/home/base_logo_2.svg" alt=""><img class="small-logo" src="<?php echo get_template_directory_uri(); ?>/img/home/logo.png" alt=""></a></div>
        </div>
        <div class="col-md-5">
          <ul class="header-navbar-left list-unstyled text-uppercase">
            <li class="hidden-xs hidden-sm"><a href="post-list1.html">Ý Tưởng Cưới
                <ul class="header-navbar-left-sub list-unstyled">
                  <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/cauhon.svg" alt="">Cầu hôn</a></li>
                  <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/diadiemcuoi.svg" alt="">Địa điểm cưới</a></li>
                  <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/ngansach.svg" alt="">Ngân sách</a></li>
                  <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/chuphinh.svg" alt="">Chụp hình cưới</a></li>
                  <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/nghithuc.svg" alt="">Nghi thức</a></li>
                  <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/toccuoi.svg" alt="">Tóc cưới</a></li>
                  <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/trangtri.svg" alt="">Trang trí</a></li>
                  <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/trangmat.svg" alt="">Trăng mật</a></li>
                  <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/xuhuongcuoi.svg" alt="">Xu hướng cưới</a></li>
                  <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/Iconytuongcuoi/quacuoi.svg" alt="">Quà cưới cảm ơn</a></li>
                </ul></a></li>
            <li class="hidden-xs hidden-sm"><a href="collection.html">BỘ SƯU TẬP
                <ul class="header-navbar-left-sub list-unstyled">
                  <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/nhancuoi-bosuutap.svg" alt="">Nhẫn cưới</a></li>
                  <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/phukiencuoi.svg" alt="">Phụ kiện cưới</a></li>
                  <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/ao vest.svg" alt="">Áo vest</a></li>
                  <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/aodai2.svg" alt="">Áo dài cưới</a></li>
                  <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vaychua.svg" alt="">Váy chữ A</a></li>
                  <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vayxoe.svg" alt="">Váy xòe</a></li>
                  <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vaycupnguc.svg" alt="">Váy cúp ngực</a></li>
                  <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vayduoica.svg" alt="">Váy đuôi cá</a></li>
                  <li><a href="index.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/lechvai.svg" alt="">Váy lệch vai</a></li>
                  <li><a href="service.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vayngan.svg" alt="">Váy ngắn</a></li>
                  <li><a href="promotion.html"><img class="icon-nav" src="<?php echo get_template_directory_uri(); ?>/img/icon/vayphudau.svg" alt="">Váy phụ dâu</a></li>
                </ul></a></li>
            <li class="hidden-xs hidden-sm"><a href="#">Cộng đồng
                <ul class="header-navbar-left-sub list-unstyled text-uppercase">
                  <li><a href="share.html">Góc chia sẻ</a></li>
                  <li><a href="beauty-pic.html">Ảnh cưới đẹp</a></li>
                </ul></a><<?php echo get_template_directory_uri(); ?>/img//li>
            <li class="hidden-md hidden-lg">
              <button class="hamburger hamburger--collapse mm-slideout" id="mm-open-menu" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>