<section class="home-search">
  <div class="container">
    <!-- <?php echo htmlspecialchars($_GET['s']); ?> | <?php echo htmlspecialchars($_GET['service']); ?> -->

    <?php 
      $query_taxonomy = 'dich_vu';
      $args = array(
        'orderby' => 'name',
        'order'   => 'ASC',
        'taxonomy' => $query_taxonomy,
        'hide_empty' => false
      );
      $categories = get_categories($args);
    ?>

    <div class="row">
      <div class="col-md-12 home-search-wrap">
        <div class="col-md-3 col">
          <h4 class="home-search-wrap-title text-accent">TÌM KIẾM <strong>BÀI VIẾT</strong></h4>
        </div>

        <form action="<?php echo esc_url( home_url() ); ?>" method="GET" role="search">
          <div class="col-md-5 col">

            <div class="form-group">
              <!-- <input class="form-control" type="text" placeholder="Nhập từ khóa..."> -->
              <input class="form-control" name="s" id="search" type="text" value="<?php the_search_query(); ?>"
                placeholder="Nhập từ khóa...">
            </div>

          </div>

          <div class="col-md-2 col">
            <div class="form-group">
              <select name="service" class="selectpicker form-control" title="Chọn dịch vụ cưới">
                <?php 
                    foreach($categories as $category) : 
                    $name = $category->name;
                  ?>
                <option><?php echo $name ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <!-- <div class="col-md-2 col">
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