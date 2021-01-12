<!-- header -->
    <header class="header">
      <!-- carousel area -->
      <section id="gallery" class="section ig-slider-def gradient-lg">
        <div id="gameCarousel" class="carousel slide carousel-fade" data-ride="carousel">
          <!-- Indicators -->
          <div class="po_carousel__wrapper">
            <ol class="list-unstyled carousel-indicators def po_carousel-indicators">
              <li data-target="#gameCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#gameCarousel" data-slide-to="1"></li>
              <li data-target="#gameCarousel" data-slide-to="2"></li>
            </ol>
          </div>
          <!-- carousel items -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="ig-img br-n bp-c bs-c" style="background-image: url(assets/img/content/bg-3.jpg);"></div>
              <div class="ig-sl-gr text-light text-uppercase my-5 my-lg-0">
                <div class="text-center p-3">
                  <h2><a class="btn btn-xl btn-warning text-secondary mr-2">Daftarkan >></a></h2>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="ig-img br-n bp-c bs-c" style="background-image: url(assets/img/content/bg-4.jpg);"></div>
              <div class="ig-sl-gr text-light text-uppercase my-5 my-lg-0">
                <div class="text-center p-7">
                  <h3 class="mb-0 mb-md-2">Phasellus viverra</h3>
                  <p class="mb-0 d-none d-md-block">Nam tincidunt dui eget scelerisque tempor. Nulla facilisi. Praesent aliquam venenatis purus at euismod. Fusce lobortis, eros malesuada volutpat fermentum, lorem magna convallis enim, eget mollis lorem nisi id justo. Suspendisse luctus quam id nulla fermentum porttitor.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="ig-img br-n bp-c bs-c" style="background-image: url(assets/img/content/bg-5.jpg);"></div>
              <div class="ig-sl-gr text-light text-uppercase my-5 my-lg-0">
                <div class="text-center p-7">
                  <h3 class="mb-0 mb-md-2">Phasellus viverra</h3>
                  <p class="mb-0 d-none d-md-block">Nam tincidunt dui eget scelerisque tempor. Nulla facilisi. Praesent aliquam venenatis purus at euismod. Fusce lobortis, eros malesuada volutpat fermentum, lorem magna convallis enim, eget mollis lorem nisi id justo. Suspendisse luctus quam id nulla fermentum porttitor.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- /.carousel items -->
          <!-- carousel nav -->
          <a class="carousel-control-prev" href="#gameCarousel" data-slide="prev"><span class="icon-cl-prev pe-7s-angle-left"></span></a>
          <a class="carousel-control-next" href="#gameCarousel" data-slide="next"><span class="icon-cl-next pe-7s-angle-right"></span></a>
          <!-- /.carousel nav -->
        </div>
      </section>
      <!-- /.carousel area -->
    </header>
    <!-- /.header -->

    <!-- Start Main Content -->
    <main class="main-content">
      <!-- content area -->
      <section class="content-section owl-carousel-spotlight carousel-spotlight ig-carousel text-light pt-7" style="background-image: url(assets/img/bg/bg_shape.png);">
        <header class="header text-center ">
            <h2><a class="btn btn-xl btn-warning text-secondary mr-2">Create Own Tournament</a></h2>
          </header>
        <div class="container">
          <div class="position-relative">
            <!-- nav tabs -->
            <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap" id="most_popular_products-carousel" role="tablist">
              <li class="nav-item text-fnwp pg-none relative">
                <a class="nav-link active" id="mp-01-tab" data-toggle="tab" href="#mp-01-c" role="tab" aria-controls="mp-01-c" aria-selected="true">All Games</a>
              </li>
              <?php for ($i=2; $i < 8; $i++) { ?>
              <li class="nav-item text-fnwp relative">
                <a class="nav-link" id="mp-0<?php echo $i; ?>-tab" data-toggle="tab" href="#mp-0<?php echo $i; ?>-c" role="tab" aria-controls="mp-0<?php echo $i; ?>-c" aria-selected="false">Games <?php echo $i; ?></a>
              </li>
              <?php } ?>
            </ul>
            <!-- /.nav tabs -->
            <!-- tab panes -->
            <div id="color_sel_Carousel-content" class="tab-content fl-scn relative w-100">
              <!-- tab item -->
              <div class="tab-pane fade show active" id="mp-01-c" role="tabpanel" aria-labelledby="mp-01-tab">
                <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                  <?php for ($i=1; $i < 8; $i++) { ?>
                    <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="assets/img/content/cont/cg_01.jpg" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="#">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">Daftarkan</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Nama Turnamen <?php echo $i; ?></a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">Price pool €44.99</span>
                              <span class="owl_item_genre">
                                Nama Game
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <?php } ?>
                </div>
              </div>
              <!-- /.tab item -->
              <?php for ($j=2; $j < 8; $j++) { ?>
              <!-- tab item -->
              <div class="tab-pane fade" id="mp-0<?php echo $j; ?>-c" role="tabpanel" aria-labelledby="mp-0<?php echo $j; ?>-tab">
                <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                  <?php for ($i=1; $i < 7; $i++) { ?>
                    <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="assets/img/content/cont/cg_01.jpg" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="#">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">Daftarkan</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Games <?php echo $j; ?> Turnamen <?php echo $i; ?></a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">Price pool €44.99</span>
                              <span class="owl_item_genre">
                                Nama Game
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <?php } ?>
                </div>
              </div>
              <!-- / .tab item -->
              <?php } ?>
            </div>
            <!-- /.tab panes -->
          </div>
        </div>  
      </section>
      <!-- /.content area -->
      

    </main>

<?php
  $this->load->view('tamplate/footer');
?>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- User JS -->
    <script src="assets/js/scripts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js" id="_mainJS" data-plugins="load"></script>
  </body>
</html>