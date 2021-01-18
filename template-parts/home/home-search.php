<section class="home-search">
  <div class="container">
    <div class="row">
      <div class="col-md-12 home-search-wrap">
        <div class="col-md-3 col">
          <h4 class="home-search-wrap-title text-accent">TÌM KIẾM <strong>BÀI VIẾT</strong></h4>
        </div>

        <form action="<?php echo esc_url( home_url() ); ?>" method="GET" role="search">
          <div class="col-md-7 col">

            <div class="form-group">
              <!-- <input class="form-control" type="text" placeholder="Nhập từ khóa..."> -->
              <input class="form-control" name="s" id="search" type="text" value="<?php the_search_query(); ?>"
                placeholder="Nhập từ khóa...">
            </div>

          </div>

          <!-- <div class="col-md-2 col">
          <form>
            <div class="form-group">
              <select class="selectpicker form-control" title="Chọn dịch vụ cưới">
                <option>Hoa cưới</option>
                <option>Nhà hàng tiệc cưới</option>
                <option>Quà cưới</option>
                <option>Studio ảnh cưới</option>
                <option>Thiệp cưới</option>
                <option>Trăng mật</option>
                <option>Trang sức cưới</option>
                <option>Wedding Planner</option>
              </select>
            </div>
          </form>
        </div>

        <div class="col-md-2 col">
          <form>
            <div class="form-group">
              <select class="selectpicker form-control" title="Chọn khu vực">
                <option>Name</option>
                <option>Tag</option>
                <option>Price</option>
              </select>
            </div>
          </form>
        </div> -->

          <div class="col-md-2 col">
            <button type="submit" class="btn btn-accent text-uppercase w-full">Tìm Ngay</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>