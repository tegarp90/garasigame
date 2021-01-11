<!-- header -->
    <header class="header">
    </header>
    <!-- /.header -->

    <!-- Start Main Content -->
    <main class="main-content">
      <!-- content area -->
      <section class="content-section owl-carousel-spotlight carousel-spotlight ig-carousel text-light" style="background-image: url(assets/img/bg/bg_shape.png);">
        <div class="container">
          <header class="header">
            <h2><a class="btn btn-xl btn-warning text-secondary mr-2">Create Own Tournament</a></h2>
          </header>
          <div class="position-relative">
            <!-- nav tabs -->
            <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap" id="most_popular_products-carousel" role="tablist">
              <li class="nav-item text-fnwp pg-none relative">
                <a class="nav-link active" id="mp-01-tab" data-toggle="tab" href="#mp-01-c" role="tab" aria-controls="mp-01-c" aria-selected="true">All Games</a>
              </li>
              <li class="nav-item text-fnwp relative">
                <a class="nav-link" id="mp-02-tab" data-toggle="tab" href="#mp-02-c" role="tab" aria-controls="mp-02-c" aria-selected="false">Mobile Legends</a>
              </li>
              <li class="nav-item text-fnwp relative">
                <a class="nav-link" id="mp-03-tab" data-toggle="tab" href="#mp-03-c" role="tab" aria-controls="mp-03-c" aria-selected="false">PUBG Mobile</a>
              </li>
            </ul>
            <!-- /.nav tabs -->
            <!-- tab panes -->
            <div id="color_sel_Carousel-content" class="tab-content fl-scn relative w-100">
              <!-- tab item -->
              <div class="tab-pane fade show active" id="mp-01-c" role="tabpanel" aria-labelledby="mp-01-tab">
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
              <!-- tab item -->
              <div class="tab-pane fade" id="mp-02-c" role="tabpanel" aria-labelledby="mp-02-tab">
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
                            <h5 class="owl_item_title text-lt"><a href="">Mobile Legend <?php echo $i; ?></a></h5>
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
              <!-- tab item -->
              <div class="tab-pane fade" id="mp-03-c" role="tabpanel" aria-labelledby="mp-03-tab">
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
                                <span class="item_atc_text">Daftarkan </span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">PUBG Mobile <?php echo $i; ?></a></h5>
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