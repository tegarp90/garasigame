    <!-- header -->
    <header class="header">
      <div id="carousel_main" class="carousel carousel-header slide carousel-fade fl-scn" data-ride="carousel">
        <!-- Indicators -->
        <div class="po_carousel__wrapper">
            <ol class="list-unstyled carousel-indicators def po_carousel-indicators">
              <li data-target="#carousel_main" data-slide-to="0" class=""></li>
              <li data-target="#carousel_main" data-slide-to="1" class=""></li>
              <li data-target="#carousel_main" data-slide-to="2" class="active"></li>
            </ol>
        </div>
        <!-- Carousel items -->
        <div class="carousel-inner a-cont">
          <!-- carousel-item -->
          <div class="carousel-item active">
            <div class="h-fullscreen__page bs-c br-n ow-h" style="background-image: url(assets/img/content/carousel/slide_01.jpg);">
            </div>
          </div>
          <!-- /.carousel-item -->

          <!-- carousel-item -->
          <div class="carousel-item">
            <div class="h-fullscreen__page bs-c br-n ow-h" style="background-image: url(assets/img/content/carousel/slide_02.jpg);">
            </div>
          </div>
          <!-- /.carousel-item -->

          <!-- carousel-item -->
          <div class="carousel-item">
            <div class="h-fullscreen__page bs-c br-n ow-h" style="background-image: url(assets/img/content/carousel/slide_03.jpg);">
            </div>
          </div>
          <!-- /.carousel-item -->
        </div>
        <!-- Carousel nav -->
        <div class="carousel-control-prev a-out-t"><a class="text-light" href="#carousel_main" data-slide="prev"><span class="icon-cl-prev text-shadow pe-7s-angle-left"></span></a></div>
        <div class="carousel-control-next a-out-t"><a class="text-light" href="#carousel_main" data-slide="next"><span class="icon-cl-next text-shadow pe-7s-angle-right"></span></a></div>
      </div>
    </header>
    <!-- /.header -->

    <!-- main content -->
    <main class="main-content">

      <!-- content area -->
      <section class="content-section text-light" style="background-image: url(assets/img/bg/bg_shape.png);">
        <div class="container-fluid">
          <header class="header text-center text-uppercase">
            <h2>Most Popular Tournaments</h2>
          </header>
            <div class="text-center">
              <?php for ($i=1; $i < 7; $i++) { ?>
                <img class="w-15 pl-3 mt-3" src="assets/img/content/cont/<?php echo $i; ?>_small.jpg" alt="Responsive image">
              <?php } ?>
            </div>
        </div>
      </section>
      <!-- /.content area -->

      <!-- content area -->
      <section class="section gs_features">
        <div class="row no-gutters">
          <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c effect-wrapper effect-grayscale position-relative hover" style="background-image: url('assets/img/content/cont/hottest_produk.jpg');">
            <div class="overlay bg-dark_A-90 d-md-none"></div>
            <div class="row h-100 align-items-center content">
              <div class="col-12 col-md-8 ml-auto text-light text-md-right">
                <small class="d-block text-uppercase fw-600 ls-3">Hottest Product</small>
                <h2 class="mb-4">Accecories Gaming</h2>
                <span class="d-block text-uppercase ls-3 mb-6">Only On Garasi Games</span>
                <a href="#" class="btn btn-lg btn-outline-light btn-round">Explore</a>
              </div>
            </div>
            <figure class="d-none d-md-block effect-layla effect-layla-light"></figure>
          </div>
          <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c" style="background-image: url('assets/img/content/cont/hottest_game.jpg');" data-overlay="7">
            <div class="row align-items-center h-100">
              <div class="col-sm-6 col-md-4 mb-5 mb-md-0">
                <figure class="position-relative my-0">
                  <div style="background-image: url('assets/img/content/cont/1_small.jpg');" class="main-fb-product bs-c bp-c br-n">
                    <div class="position-absolute t-0 r-0 px-4 py-1 bg-danger text-white text-uppercase fw-600">-50%</div>
                    <div class="position-absolute b-0 w-100 text-center">
                      <div data-countdown="2021/01/25 12:34:56" class="countdown-coupon bg-dark_A-50 py-3 text-light fw-700 timer"></div>
                    </div>
                  </div>
                </figure>
              </div>
              <div class="col-md-8 text-light">
                <h2 class="text-light mb-4">Item Promo</h2>
                <p class="mb-7">Mauris euismod aliquam erat, a vestibulum tortor bibendum sit amet. Duis vitae augue non dolor fermentum faucibus non quis justo. Sed consequat accumsan turpis et semper. Nulla blandit blandit est, nec tincidunt neque sollicitudin vitae.</p>
                <a href="#" class="btn btn-lg btn-danger btn-round"><i class="fa fa-shopping-cart mr-5" aria-hidden="true"></i>Buy</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-xl-6 py-8 px-4 px-sm-8 py-md-9 px-md-9 bs-c" style="background-image: url('assets/img/content/cont/hottest_game2.jpg');" data-overlay="7">
            <div class="row align-items-center h-100">
              <div class="col-sm-6 col-md-4 order-md-2 mb-6 mb-md-0">
                <figure class="position-relative my-0">
                  <div style="background-image: url('assets/img/content/cont/2_small.jpg');" class="main-fb-product bs-c bp-c br-n">
                    <div class="position-absolute t-0 r-0 px-4 py-1 bg-danger text-white text-uppercase fw-600">-72%</div>
                    <div class="position-absolute b-0 w-100 text-center">
                      <div data-countdown="2021/02/11 12:34:56" class="countdown-coupon bg-dark_A-50 py-3 text-light fw-700 timer"></div>
                    </div>
                  </div>
                </figure>
              </div>
              <div class="col-md-8 order-md-1 text-light text-md-right">
                <h2 class="mb-4">Item Promo</h2>
                <p class="mb-7">Mauris euismod aliquam erat, a vestibulum tortor bibendum sit amet. Duis vitae augue non dolor fermentum faucibus non quis justo. Sed consequat accumsan turpis et semper. Nulla blandit blandit est, nec tincidunt neque sollicitudin vitae.</p>
                <a href="#" class="btn btn-lg btn-danger btn-round"><i class="fa fa-shopping-cart mr-5" aria-hidden="true"></i>Buy</a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-sm-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 bs-c effect-wrapper effect-grayscale position-relative hover" style="background-image: url('assets/img/content/cont/hottest_produk2.jpg');">
            <div class="overlay bg-dark_A-90 d-md-none"></div>
            <div class="row h-100 align-items-center content">
              <div class="col-12 col-md-6 mr-auto text-light text-left">
                <small class="d-block text-uppercase fw-600 ls-3">Hottest Product</small>
                <h2 class="mb-4">Laptop Gaming</h2>
                <span class="d-block lead-1 text-uppercase ls-3 mb-7">An amazing experience from beginning to end.</span>
                <a href="#" class="btn btn-lg btn-outline-light btn-round">Explore the Sky</a>
              </div>
            </div>
            <figure class="d-none d-md-block effect-layla effect-layla-light"></figure>
          </div>
        </div>
      </section>
      <!-- /.content area -->

      <!-- content area -->
      <section class="content-section text-light" style="background: linear-gradient(to bottom, #111931 0%, #0f131e 100%);">
        <div class="container">
          <header class="header text-left">
            <h2 class="mb-6">Latest News</h2>
          </header>
          <div class="row">
            <!-- post -->
            <div class="col-12 mb-8">
              <div class="row">
                <div class="col-lg-4 mb-6 mb-lg-0">
                  <div class="card">
                    <div class="img__news_wrapper"><img src="assets/img/content/img_01.jpg" alt="News"></div>
                    <div class="badges badges-left badges-bottom text-white">
                      <div class="rating_circle-wrapper"> 
                        <span class="rating_circle-foreground">
                            <span class="rating_circle-number">9.7</span>
                        </span> 
                        <span class="rating_circle" data-rating-total="9"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <h4 class="text-uppercase mb-3">Nullam vestibulum</h4>
                  <div class="mb-3 small text-info">
                    <span><i class="fas fa-tags"></i> Cras quis lacus dolor, Quisque dictum sollicitudin</span> <span class="mx-1">-</span> <span>4th October 2020</span>
                  </div>
                  <p>Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                  <a href="news-article.html" class="btn btn-outline-light">Read More</a>
                </div>
              </div>
            </div>
            <!-- /.post -->

            <!-- post -->
            <div class="col-12 mb-8">
              <div class="row">
                <div class="col-lg-4 mb-6 mb-lg-0">
                  <div class="card">
                    <div class="img__news_wrapper"><img src="assets/img/content/img_02.jpg" alt="News"></div>
                    <div class="badges badges-left badges-bottom text-white">
                      <div class="rating_circle-wrapper"> 
                        <span class="rating_circle-foreground">
                            <span class="rating_circle-number">9.7</span>
                        </span> 
                        <span class="rating_circle" data-rating-total="9"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <h4 class="text-uppercase mb-3">Nullam vestibulum</h4>
                  <div class="mb-3 small text-info">
                    <span><i class="fas fa-tags"></i> Cras quis lacus dolor, Quisque dictum sollicitudin</span> <span class="mx-1">-</span> <span>4th October 2020</span>
                  </div>
                  <p>Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                  <a href="news-article.html" class="btn btn-outline-light">Read More</a>
                </div>
              </div>
            </div>
            <!-- /.post -->

            <!-- post -->
            <div class="col-12">
              <div class="row">
                <div class="col-lg-4 mb-6 mb-lg-0">
                  <div class="card">
                    <div class="img__news_wrapper"><img src="assets/img/content/img_03.jpg" alt="News"></div>
                    <div class="badges badges-left badges-bottom text-white">
                      <div class="rating_circle-wrapper"> 
                        <span class="rating_circle-foreground">
                            <span class="rating_circle-number">9.7</span>
                        </span>
                        <span class="rating_circle" data-rating-total="9"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <h4 class="text-uppercase mb-3">Nullam vestibulum</h4>
                  <div class="mb-3 small text-info">
                    <span><i class="fas fa-tags"></i> Cras quis lacus dolor, Quisque dictum sollicitudin</span> <span class="mx-1">-</span> <span>4th October 2020</span>
                  </div>
                  <p>Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                  <a href="news-article.html" class="btn btn-outline-light">Read More</a>
                </div>
              </div>
            </div>
            <!-- /.post -->
          </div>
        </div>
      </section>
      <!-- /.content area -->

    </main>

<?php
  $this->load->view('tamplate/footer');
?>
