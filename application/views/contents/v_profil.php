<!-- header -->
    <header class="pt-10 p-relative">
      <div class="overlay br-n bs-c bp-r pe-n" data-parallax="scroll" data-z-index="1" data-image-src="assets/img/bg/bg_a.jpg"></div>
      <div class="position-relative zi-1 d-flex align-items-end flex-wrap h-100">
        <div class="release-subheader">
          <div class="release-container">
            <div class="pb-9 w-100 text-light text-center">
              <div class="img-xl position-relative br-n bp-c bs-c article-image ar-1_1 mx-auto rounded-circle border border-secondary mb-6" style="background-image: url(assets/img/avatar/2.jpg)">
                <span class="position-absolute b-0 r-0 text-secondary lead-3 d-block bg-warning p-2 rounded-circle lh-1"><input type="file" class="custom-file-input position-absolute l-0 t-0 b-0 h-auto" id="customFile"><i class="far fa-image"></i></span>
              </div>
              <h3><?php echo $_SESSION['username']; ?></h3>
              <span class="d-flex align-items-center justify-content-center fw-500 text-shadow"><i class="fas fa-circle text-warning small-6 mr-1"></i>Online</span>
            </div>
          </div>
        </div>
        <div class="profile-nav w-100 border-top border-bottom border-secondary">
          <div class="container">
            <nav class="navbar navbar-expand-lg mnh-auto px-0 lh-1">
              <button class="navbar-toggler ml-auto py-5 pl-5 pr-0 pr-sm-5" type="button" data-toggle="collapse" data-target="#navbarProfile" aria-controls="navbarProfile" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars lead-3 text-warning"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarProfile">
                <ul class="profile-tabs nav nav-tabs list-unstyled mb-0 d-flex justify-content-around w-100 flex-row" id="profile-tabs" role="tablist">
                  <li class="py-2 py-lg-0">
                    <a id="mp-2-01-tab" data-toggle="tab" href="#mp-2-01-c" role="tab" aria-controls="mp-2-01-c" aria-selected="true" class="profile-nav-link text-uppercase text-center active show">
                      <span class="pr-icon-nav ti-layout-cta-left lead-4 d-block mb-3"></span>
                      <span class="small-2 fw-400 ls-1">About</span>
                    </a>
                  </li>
                  <li class="py-2 py-lg-0">
                    <a id="mp-2-02-tab" data-toggle="tab" href="#mp-2-02-c" role="tab" aria-controls="mp-2-02-c" aria-selected="false" class="profile-nav-link text-uppercase text-center">
                      <span class="pr-icon-nav ti-game lead-4 d-block mb-3"></span>
                      <span class="small-2 fw-400 ls-1">Games</span>
                    </a>
                  </li>
                  <li class="py-2 py-lg-0">
                    <a id="mp-2-03-tab" data-toggle="tab" href="#mp-2-03-c" role="tab" aria-controls="mp-2-03-c" aria-selected="false" class="profile-nav-link text-uppercase text-center">
                      <span class="pr-icon-nav ti-wallet lead-4 d-block mb-3"></span>
                      <span class="small-2 fw-400 ls-1">Wallet</span>
                    </a>
                  </li>
                  <li class="py-2 py-lg-0">
                    <a id="mp-2-04-tab" data-toggle="tab" href="#mp-2-04-c" role="tab" aria-controls="mp-2-04-c" aria-selected="false" class="profile-nav-link text-uppercase text-center">
                      <span class="pr-icon-nav ti-settings lead-4 d-block mb-3"></span>
                      <span class="small-2 fw-400 ls-1">Settings</span>
                    </a>
                  </li>
                  <li class="py-2 py-lg-0">
                    <a id="mp-2-05-tab" data-toggle="tab" href="#mp-2-05-c" role="tab" aria-controls="mp-2-05-c" aria-selected="false" class="profile-nav-link text-uppercase text-center">
                      <span class="pr-icon-nav ti-heart lead-4 d-block mb-3"></span>
                      <span class="small-2 fw-400 ls-1">Wishlist</span>
                    </a>
                  </li>
                  <li class="py-2 py-lg-0">
                    <a id="mp-2-06-tab" data-toggle="tab" href="#mp-2-06-c" role="tab" aria-controls="mp-2-06-c" aria-selected="false" class="profile-nav-link text-uppercase text-center">
                      <span class="pr-icon-nav ti-user lead-4 d-block mb-3"></span>
                      <span class="small-2 fw-400 ls-1">Groups</span>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- /.header -->

    <!-- main content -->
    <main class="main-content position-relative">

      <!-- overlay -->
      <div class="bg-theme overlay pe-n zi-1">
        <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets/img/bg/bg_shape.png);"></div>
      </div>
      <!-- /.overlay -->

      <!-- content area -->
      <div class="content-section position-relative text-light zi-2">
        <div class="container">
          <!-- tab panes -->
          <div id="profile-tabs-content" class="tab-content position-relative w-100">
            <!-- tab item -->
            <div class="tab-pane fade active show" id="mp-2-01-c" role="tabpanel" aria-labelledby="mp-2-01-tab">
              <div class="position-relative">
                <div class="row">
                  <div class="col-lg-7 mb-9 mb-lg-0">
    
                    <div id="about" class="mb-8">
                      <h4>About</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                      <div class="row">
                        <div class="col-10 col-lg-11">
                          <span class="lead-1">It looks like there's nothing here yet. Why don't you tell a little more about yourself?</span>
                        </div>
                        <div class="col-2 col-lg-1 text-right"><a href="#" class="lead-1 text-warning"><i class="fas fa-pen"></i></a></div>
                      </div>
                    </div>

                    <div id="friends" class="mb-8">
                      <div class="row">
                        <div class="col-10 col-lg-11">
                          <h4 class="mb-1 lh-1">Friends</h4>
                          <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                          <span class="d-block mb-4">Offline<span class="text-warning lead-1 ml-1">(8)</span></span>
                        </div>
                        <div class="col-2 col-lg-1 text-right">
                          <a href="#" class="lead-1 text-warning"><i class="fas fa-search"></i></a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="profile-carousel owl-carousel" data-carousel-items="2, 3, 3, 4" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                            <!-- item -->
                            <div class="item">
                              <div class="item-cont">
                                <figure class="owl_item_review">
                                  <div>
                                    <div class="position-relative overflow-hidden">
                                      <img class="mb-2" src="assets/img/avatar/1.jpg" alt="Avatar">
                                      <div class="review_h text-light">
                                        <a href="#" class="d-block">
                                          Dewei Tsou
                                        </a>
                                        <span class="d-flex align-items-center small-3 text-warning"><i class="fas fa-circle small-7 mr-1"></i>Online</span>
                                      </div>
                                    </div>
                                  </div>
                                </figure>
                              </div>
                            </div>
                            <!-- /.item -->
                            <!-- item -->
                            <div class="item">
                              <div class="item-cont">
                                <figure class="owl_item_review">
                                  <div>
                                    <div class="position-relative overflow-hidden">
                                      <img class="mb-2" src="assets/img/avatar/1.jpg" alt="Avatar">
                                      <div class="review_h text-light">
                                        <a href="#" class="d-block">
                                          Dewei Tsou
                                        </a>
                                        <span class="d-flex align-items-center small-3 text-warning"><i class="fas fa-circle small-7 mr-1"></i><span class="fw-500">Online</span></span>
                                      </div>
                                    </div>
                                  </div>
                                </figure>
                              </div>
                            </div>
                            <!-- /.item -->
                            <!-- item -->
                            <div class="item">
                              <div class="item-cont">
                                <figure class="owl_item_review">
                                  <div>
                                    <div class="position-relative overflow-hidden">
                                      <img class="mb-2" src="assets/img/avatar/1.jpg" alt="Avatar">
                                      <div class="review_h text-light">
                                        <a href="#" class="d-block">
                                          Dewei Tsou
                                        </a>
                                        <span class="d-flex align-items-center small-3 text-danger"><i class="fas fa-circle small-7 mr-1"></i><span class="fw-500">Offline</span></span>
                                      </div>
                                    </div>
                                  </div>
                                </figure>
                              </div>
                            </div>
                            <!-- /.item -->
                            <!-- item -->
                            <div class="item">
                              <div class="item-cont">
                                <figure class="owl_item_review">
                                  <div>
                                    <div class="position-relative overflow-hidden">
                                      <img class="mb-2" src="assets/img/avatar/2.jpg" alt="Avatar">
                                      <div class="review_h text-light">
                                        <a href="#" class="d-block">
                                          George Collins
                                        </a>
                                        <span class="d-flex align-items-center small-3 text-warning"><i class="fas fa-circle small-7 mr-1"></i><span class="fw-500">Online</span></span>
                                      </div>
                                    </div>
                                  </div>
                                </figure>
                              </div>
                            </div>
                            <!-- /.item -->
                            <!-- item -->
                            <div class="item">
                              <div class="item-cont">
                                <figure class="owl_item_review">
                                  <div>
                                    <div class="position-relative overflow-hidden">
                                      <img class="mb-2" src="assets/img/avatar/3.jpg" alt="Avatar">
                                      <div class="review_h text-light">
                                        <a href="#" class="d-block">
                                          Sying Wei
                                        </a>
                                        <span class="d-flex align-items-center small-3 text-warning"><i class="fas fa-circle small-7 mr-1"></i><span class="fw-500">Online</span></span>
                                      </div>
                                    </div>
                                  </div>
                                </figure>
                              </div>
                            </div>
                            <!-- /.item -->
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="reviews" class="mb-8">
                      <div class="row">
                        <div class="col-12">
                          <h4 class="mb-4">Reviews</h4>
                          <hr class="w-10 border-top-2 mt-5 mb-7 ml-0 mr-auto border-warning">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="owl-carousel carousel_sm" data-carousel-items="1, 2, 3, 3" data-carousel-margin="10" data-carousel-nav="false" data-carousel-dots="true">
                            <div class="item">
                              <a href="#">
                                <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets/img/content/img_01.jpg);">
                                  <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                    <div class="px-4 py-3 lh-1">
                                      <h6 class="text-lt mb-1 small-1 text-light text-uppercase">Phasellus</h6>
                                      <div class="price d-flex flex-wrap align-items-center">
                                        <span class="text-warning small-2"><i class="fas fa-eye mr-1"></i>241</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                            <div class="item">
                              <a href="#">
                                <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets/img/content/img_01.jpg);">
                                  <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                    <div class="px-4 py-3 lh-1">
                                      <h6 class="text-lt mb-1 small-1 text-light text-uppercase">Phasellus</h6>
                                      <div class="price d-flex flex-wrap align-items-center">
                                        <span class="text-warning small-2"><i class="fas fa-eye mr-1"></i>241</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                            <div class="item">
                              <a href="#">
                                <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets/img/content/img_01.jpg);">
                                  <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                    <div class="px-4 py-3 lh-1">
                                      <h6 class="text-lt mb-1 small-1 text-light text-uppercase">Phasellus</h6>
                                      <div class="price d-flex flex-wrap align-items-center">
                                        <span class="text-warning small-2"><i class="fas fa-eye mr-1"></i>241</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                            <div class="item">
                              <a href="#">
                                <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets/img/content/img_01.jpg);">
                                  <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                    <div class="px-4 py-3 lh-1">
                                      <h6 class="text-lt mb-1 small-1 text-light text-uppercase">Phasellus</h6>
                                      <div class="price d-flex flex-wrap align-items-center">
                                        <span class="text-warning small-2"><i class="fas fa-eye mr-1"></i>241</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- comments -->
                    <div id="comments" class="mb-0">
                      <div class="row">
                        <div class="col-12">
                          <h4 class="mb-4">Comments</h4>
                          <hr class="w-10 border-top-2 mt-5 mb-7 ml-0 mr-auto border-warning">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 mb-8">
                          <form action="#" class="input-transparent pb-8 border-bottom border-secondary">
                            <div class="form-row">
                              <div class="form-group col-3 col-sm-2">
                                <img class="rounded" src="assets/img/avatar/2.jpg" alt="Avatar">
                              </div>
                              <div class="form-group col-9 col-sm-10">
                                <textarea class="form-control form-control" rows="4" placeholder="Your Message" name="message" required=""></textarea>
                              </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-end">
                              <div class="dropdownSmile dropup mr-4">
                                <a class="dropdown-toggle lead-2" href="#" id="dropdownSmile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-smile"></i></a>
                                <div class="dropdown-menu dropdown-menu-right position-absolute" aria-labelledby="dropdownSmile">
                                  <a class="dropdown-item" href="#"><i class="fas fa-smile"></i></a>
                                  <a class="dropdown-item" href="#"><i class="fas fa-smile-wink"></i></a>
                                  <a class="dropdown-item" href="#"><i class="fas fa-smile-beam"></i></a>
                                  <a class="dropdown-item" href="#"><i class="fas fa-poo"></i></a>
                                  <a class="dropdown-item" href="#"><i class="fas fa-grin-squint-tears"></i></a>
                                  <a class="dropdown-item" href="#"><i class="fas fa-grin-hearts"></i></a>
                                  <a class="dropdown-item" href="#"><i class="fas fa-grin-beam-sweat"></i></a>
                                  <a class="dropdown-item" href="#"><i class="fas fa-grin-beam"></i></a>
                                  <a class="dropdown-item" href="#"><i class="fas fa-kiss-beam"></i></a>
                                </div>
                              </div>
                              <div><button class="btn btn-warning" type="submit">Send</button></div>
                            </div>
                          </form>
                        </div>
                        <div class="col-12">
                          <div class="row">
                            <!-- comment-item -->
                            <div class="col-12 comment-item mb-7">
                              <div class="form-row">
                                <div class="col-3 col-sm-2">
                                  <div class="comment-img">
                                    <img src="assets/img/avatar/1.jpg" class="rounded" alt="User">
                                  </div>
                                </div>
                                <div class="col-9 col-sm-10">
                                  <div class="comment-main border border-secondary"> 
                                    <div class="d-md-flex comment-header border-bottom border-secondary px-4 py-3">
                                      <div class="d-flex align-items-center flex-1">
                                        <h6 class="comment-username fw-500 mb-0"><a href="#">Dewei Tsou</a></h6>
                                      </div>
                                      <div>
                                        <a href="#" class="comment-metadata text-warning small">Aug 12, 2020 at 09:12 AM</a>
                                      </div>
                                    </div>
                                    <div class="p-4">
                                      <p class="small-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus lacus non tincidunt volutpat. Nullam volutpat mi nec nulla finibus tincidunt.</p>
                                    </div>
                                  </div>
                                </div>  
                              </div>
                            </div>
                            <!-- /.comment-item -->
                            <!-- comment-item -->
                            <div class="col-12 comment-item">
                              <div class="form-row">
                                <div class="col-3 col-sm-2">
                                  <div class="comment-img">
                                    <img src="assets/img/avatar/3.jpg" class="rounded" alt="User">
                                  </div>
                                </div>
                                <div class="col-9 col-sm-10">
                                  <div class="comment-main border border-secondary"> 
                                    <div class="d-md-flex comment-header border-bottom border-secondary px-4 py-3">
                                      <div class="d-flex align-items-center flex-1">
                                        <h6 class="comment-username fw-500 mb-0"><a href="#">Sying Wei</a></h6>
                                      </div>
                                      <div>
                                        <a href="#" class="comment-metadata text-warning small">Aug 18, 2020 at 09:12 AM</a>
                                      </div>
                                    </div>
                                    <div class="p-4">
                                      <p class="small-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus lacus non tincidunt volutpat. Nullam volutpat mi nec nulla finibus tincidunt.</p>
                                    </div>
                                  </div>
                                </div>  
                              </div>
                            </div>
                            <!-- /.comment-item -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.comments -->
                  </div>
                  <div class="col-lg-5">
                    <div class="card bg-dark_A-20 border border-secondary mb-6">
                      <div class="px-4 pt-3"><span class="fw-600 ls-1 text-uppercase small-1"><span><i class="fas fa-history text-warning mr-2"></i></span>Recent activity</span></div>
                      <div class="px-5 py-6">
                        <div class="mb-6">
                          <div class="row no-gutters">
                            <div class="col-2 item_img d-none d-sm-flex align-items-center">
                              <a href="store-product.html" class="product-item"><img class="img img-lg bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="col-6 item_content flex-1 flex-grow pl-0 pl-sm-3 pr-3">
                              <a href="store-product.html" class="product-item"><h6 class="item_title text-lt ls-1 small-1 fw-600 text-uppercase mb-0">Integer sagittis semper</h6></a>
                              <span class="small-3"><span class="text-warning"><i class="far fa-clock mr-1"></i></span>21:41</span>
                            </div>
                            <div class="col-6 col-sm-4">
                              <div class="row align-items-center justify-content-end h-100 no-gutters">
                                <div class="text-right small-3">
                                  <span class="fw-500"><span class="text-warning">25</span> hrs total</span><br>
                                  <span class="fw-500">Last played <span class="text-warning">Jul 27</span></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-6">
                          <div class="row no-gutters">
                            <div class="col-2 item_img d-none d-sm-flex align-items-center">
                              <a href="store-product.html" class="product-item"><img class="img img-lg bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="col-6 item_content flex-1 flex-grow pl-0 pl-sm-3 pr-3">
                              <a href="store-product.html" class="product-item"><h6 class="item_title text-lt ls-1 small-1 fw-600 text-uppercase mb-0">Integer sagittis semper</h6></a>
                              <span class="small-3"><span class="text-warning"><i class="far fa-clock mr-1"></i></span>21:41</span>
                            </div>
                            <div class="col-6 col-sm-4">
                              <div class="row align-items-center justify-content-end h-100 no-gutters">
                                <div class="text-right small-3">
                                  <span class="fw-500"><span class="text-warning">25</span> hrs total</span><br>
                                  <span class="fw-500">Last played <span class="text-warning">Jul 27</span></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-0">
                          <div class="row no-gutters">
                            <div class="col-2 item_img d-none d-sm-flex align-items-center">
                              <a href="store-product.html" class="product-item"><img class="img img-lg bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="col-6 item_content flex-1 flex-grow pl-0 pl-sm-3 pr-3">
                              <a href="store-product.html" class="product-item"><h6 class="item_title text-lt ls-1 small-1 fw-600 text-uppercase mb-0">Integer sagittis semper</h6></a>
                              <span class="small-3"><span class="text-warning"><i class="far fa-clock mr-1"></i></span>21:41</span>
                            </div>
                            <div class="col-6 col-sm-4">
                              <div class="row align-items-center justify-content-end h-100 no-gutters">
                                <div class="text-right small-3">
                                  <span class="fw-500"><span class="text-warning">25</span> hrs total</span><br>
                                  <span class="fw-500">Last played <span class="text-warning">Jul 27</span></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card bg-dark_A-20 border border-secondary">
                      <div class="px-4 pt-3"><span class="fw-600 ls-1 text-uppercase small-1"><span><i class="fas fa-users text-warning mr-2"></i></span>Groups</span></div>
                      <div class="px-5 py-6">
                        <div class="mb-6">
                          <div class="row no-gutters">
                            <div class="col-2 item_img d-none d-sm-flex align-items-center">
                              <a href="store-product.html" class="product-item"><img class="img img-lg bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="col-12 col-sm-10 item_content flex-1 flex-grow pl-0 pl-sm-3 pr-3">
                              <a href="store-product.html" class="product-item"><h6 class="item_title text-lt ls-1 small-1 fw-600 text-uppercase mb-0">Integer sagittis semper</h6></a>
                              <span class="small-3 fw-500">Members: <span class="text-warning">45</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="mb-0">
                          <div class="row no-gutters">
                            <div class="col-2 item_img d-none d-sm-flex align-items-center">
                              <a href="store-product.html" class="product-item"><img class="img img-lg bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="col-12 col-sm-10 item_content flex-1 flex-grow pl-0 pl-sm-3 pr-3">
                              <a href="store-product.html" class="product-item"><h6 class="item_title text-lt ls-1 small-1 fw-600 text-uppercase mb-0">Integer sagittis semper</h6></a>
                              <span class="small-3 fw-500">Members: <span class="text-warning">31</span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab item -->

            <!-- tab item -->
            <div class="tab-pane fade" id="mp-2-02-c" role="tabpanel" aria-labelledby="mp-2-02-tab">
              <div class="mb-9">
                <header class="header mb-4">
                  <h3>Top Played Games</h3>
                  <hr class="w-5 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                </header>
                <div class="owl-carousel-spotlight carousel-spotlight ig-carousel">
                  <div class="owl-carousel gs-carousel" data-carousel-items="1, 3, 3, 4" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                    <!-- item -->
                    <div class="item">
                      <div class="item-cont">
                        <figure class="owl_item_review">
                          <div>
                            <div class="position-relative overflow-hidden">
                              <img class="m-0-auto" src="assets/img/content/cont/cg_01.jpg" alt="Games Store">
                            </div>
                            <div>
                              <h5 class="owl_item_title text-lt"><a href="">Donec dignissim</a></h5>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Last played</span>
                                <span class="text-warning float-right">
                                  Jul 27
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Time played</span>
                                <span class="text-warning float-right">
                                  17 <span class="d-md-none">Hrs</span><span class="d-none d-md-inline">Hours</span>
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-2">
                                <span>Achievements</span>
                                <span class="text-warning float-right">
                                  68%
                                </span>
                              </div>
                              <div class="profile-progress progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </figure>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="item">
                      <div class="item-cont">
                        <figure class="owl_item_review">
                          <div>
                            <div class="position-relative overflow-hidden">
                              <img class="m-0-auto" src="assets/img/content/cont/cg_01.jpg" alt="Games Store">
                            </div>
                            <div>
                              <h5 class="owl_item_title text-lt"><a href="">Donec dignissim</a></h5>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Last played</span>
                                <span class="text-warning float-right">
                                  Jul 27
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Time played</span>
                                <span class="text-warning float-right">
                                  17 <span class="d-md-none">Hrs</span><span class="d-none d-md-inline">Hours</span>
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-2">
                                <span>Achievements</span>
                                <span class="text-warning float-right">
                                  68%
                                </span>
                              </div>
                              <div class="profile-progress progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </figure>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="item">
                      <div class="item-cont">
                        <figure class="owl_item_review">
                          <div>
                            <div class="position-relative overflow-hidden">
                              <img class="m-0-auto" src="assets/img/content/cont/cg_01.jpg" alt="Games Store">
                            </div>
                            <div>
                              <h5 class="owl_item_title text-lt"><a href="">Donec dignissim</a></h5>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Last played</span>
                                <span class="text-warning float-right">
                                  Jul 27
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Time played</span>
                                <span class="text-warning float-right">
                                  17 <span class="d-md-none">Hrs</span><span class="d-none d-md-inline">Hours</span>
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-2">
                                <span>Achievements</span>
                                <span class="text-warning float-right">
                                  68%
                                </span>
                              </div>
                              <div class="profile-progress progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </figure>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="item">
                      <div class="item-cont">
                        <figure class="owl_item_review">
                          <div>
                            <div class="position-relative overflow-hidden">
                              <img class="m-0-auto" src="assets/img/content/cont/cg_01.jpg" alt="Games Store">
                            </div>
                            <div>
                              <h5 class="owl_item_title text-lt"><a href="">Donec dignissim</a></h5>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Last played</span>
                                <span class="text-warning float-right">
                                  Jul 27
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Time played</span>
                                <span class="text-warning float-right">
                                  17 <span class="d-md-none">Hrs</span><span class="d-none d-md-inline">Hours</span>
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-2">
                                <span>Achievements</span>
                                <span class="text-warning float-right">
                                  68%
                                </span>
                              </div>
                              <div class="profile-progress progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </figure>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="item">
                      <div class="item-cont">
                        <figure class="owl_item_review">
                          <div>
                            <div class="position-relative overflow-hidden">
                              <img class="m-0-auto" src="assets/img/content/cont/cg_01.jpg" alt="Games Store">
                            </div>
                            <div>
                              <h5 class="owl_item_title text-lt"><a href="">Donec dignissim</a></h5>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Last played</span>
                                <span class="text-warning float-right">
                                  Jul 27
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Time played</span>
                                <span class="text-warning float-right">
                                  17 <span class="d-md-none">Hrs</span><span class="d-none d-md-inline">Hours</span>
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-2">
                                <span>Achievements</span>
                                <span class="text-warning float-right">
                                  68%
                                </span>
                              </div>
                              <div class="profile-progress progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </figure>
                      </div>
                    </div>
                    <!-- /.item -->
                  </div>
                </div>
              </div>
              <div>
                <header class="header mb-4">
                  <div class="row">
                    <div class="col-10 col-lg-11">
                      <h3>Library</h3>
                      <hr class="w-5 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                    </div>
                    <div class="col-2 col-lg-1 text-right">
                      <a href="#" class="lead-1 text-warning"><i class="fas fa-plus"></i></a>
                    </div>
                  </div>
                </header>
                <div class="row">
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.html" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-warning small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-warning fw-600">25</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-warning fw-600">July 27</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.html" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-warning small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-warning fw-600">25</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-warning fw-600">July 27</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.html" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-warning small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-warning fw-600">25</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-warning fw-600">July 27</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.html" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-warning small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-warning fw-600">25</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-warning fw-600">July 27</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.html" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-warning small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-warning fw-600">25</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-warning fw-600">July 27</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.html" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-warning small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-warning fw-600">25</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-warning fw-600">July 27</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <div class="col-12">
                    <!-- pagination -->
                    <nav class="mt-4 pt-4 border-top border-secondary" aria-label="Page navigation">
                      <ul class="pagination justify-content-end list-style-image">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span class="ti-angle-left small-7" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span class="ti-angle-right small-7" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <!-- /.pagination -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab item -->

            <!-- tab item -->
            <div class="tab-pane fade" id="mp-2-03-c" role="tabpanel" aria-labelledby="mp-2-03-tab">
              <div class="position-relative">
                <div class="row">
                  <div class="col-lg-7 mb-9 mb-lg-0">
                    <div class="mb-8">
                      <h4>Add funds to your Wallet</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                      <form class="input-transparent">
                        <div class="form-group input-group">
                          <input class="form-control" id="giftCard" type="text" name="giftCard" required="" placeholder="Gift Card">
                          <div class="input-group-append ml-3">
                            <button class="btn btn-warning" type="button">Apply</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div>
                      <h4>Gift Card History</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                      <div>
                        <hr class="border-secondary mt-0 mb-4">
                        You haven't redeemed any Gift Cards yet
                        <hr class="border-secondary mb-0 mt-4">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="card bg-dark_A-20 border border-secondary">
                      <div class="px-5 pt-3"><span class="fw-600 ls-1 text-uppercase small-1"><span><i class="fas fa-user text-warning mr-2"></i></span>Your account</span></div>
                      <div class="px-5 pt-3 pb-6">
                        <div class="mb-2">
                          <div class="row no-gutters">
                            <div class="col-4 d-flex align-items-center">
                              <span class="fw-600 lead-1">Balance</span>
                            </div>
                            <div class="col-8">
                              <div class="row align-items-center justify-content-end h-100 no-gutters">
                                <div class="text-right text-warning fw-600 lead-1">
                                  517$
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-0">
                          <div class="row no-gutters">
                            <div class="col-12">
                              <a href="#" class="btn btn-sm btn-warning">View details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab item -->

            <!-- tab item -->
            <div class="tab-pane fade" id="mp-2-04-c" role="tabpanel" aria-labelledby="mp-2-04-tab">
              <div class="position-relative">
                <div class="row">
                  <div class="col-lg-7 mb-9 mb-lg-0">
                    <div class="mb-8">
                      <h4><i class="ti-shopping-cart text-warning mr-2"></i>Store</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control mb-1">
                          <span>Wallet Balance: <span class="text-warning fw-500">300$</span></span>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <a href="#" class="text-primary fw-500">View purchase history</a>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <span>Country: <span class="text-warning"><i class="fas fa-globe mx-2"></i><span class="fw-500">United States (US)</span></span></span>
                        </div>
                        <div class="form-group custom-control mb-0">
                          <a href="#" class="text-primary fw-500">View licenses and product key activations</a>
                        </div>
                      </form>
                    </div>
                    <div class="mb-8">
                      <h4><i class="far fa-envelope text-warning mr-2"></i>Email Preferences</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control mb-1">
                          <span>Email address: <span class="text-warning fw-500">wicodustheme@gmail.com</span></span>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <span>Status: <span class="text-warning fw-500">Verified</span></span>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <a href="#" class="text-primary fw-500">Change my email address</a>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <span>Phone: <span class="text-warning"><i class="fas fa-mobile-alt mx-2"></i><span class="fw-500">***35</span></span></span>
                        </div>
                        <div class="form-group custom-control w-100 border-bottom border-secondary pb-4 mb-1">
                          <a href="#" class="text-primary fw-500">Manage your phone number</a>
                        </div>
                        <div class="form-group custom-control custom-checkbox pt-4">
                          <input class="custom-control-input" type="checkbox" value="" id="dw_mailp" checked="">
                          <label class="custom-control-label" for="dw_mailp">
                            Send me an email when a discount applies to an item on my wish list.
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="spb_mailp" checked="">
                          <label class="custom-control-label" for="spb_mailp">
                            Send to email when the a seasonal promotion is beginning.
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox mb-0">
                          <input class="custom-control-input" type="checkbox" value="" id="gse_mailp">
                          <label class="custom-control-label" for="gse_mailp">
                            Game-specific event notifications
                          </label>
                          <span class="d-block small o-80 pt-2 ml-6 pl-1">You can opt out of notifications from individual games by marking 'ignore' on their <a class="text-warning text-underline" href="store.html">store page.</a></span>
                        </div>
                      </form>
                    </div>
                    <div class="mb-8">
                      <h4><i class="far fa-bell text-warning mr-2"></i>Email Notifications</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="sDnotif">
                          <label class="custom-control-label" for="sDnotif">
                            Send me daily notifications
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox form-group custom-control w-100 border-bottom border-secondary pb-4 mb-0">
                          <input class="custom-control-input" type="checkbox" value="" id="sNUp">
                          <label class="custom-control-label" for="sNUp">
                            Send me the latest updates, competitions and news
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox pt-3 mb-0">
                          <span class="fw-500 o-70 small">You can specify a personal notification settings. Check the checkboxes in the required parameters.</span>
                        </div>
                      </form>
                    </div>
                    <div class="mb-8">
                      <h4><i class="fas fa-shield-alt text-warning mr-2"></i>Account Security</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control mb-1">
                          <span>Status: <span class="text-warning fw-500"><i class="fas fa-shield-alt text-warning mx-2"></i>Protected by Guard email</span></span>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <a href="#" class="text-primary fw-500">Change my password</a>
                        </div>
                        <div class="form-group custom-control w-100 border-bottom border-secondary pb-4 mb-0">
                          <a href="#" class="text-primary fw-500">Learn more about Guard</a>
                        </div>
                        <div class="form-group custom-control pt-3 mb-0">
                          <span class="small o-70 fw-500">This is to protect your account from unauthorized access.</span>
                        </div>
                      </form>
                    </div>
                    <div class="mb-8">
                      <h4><i class="far fa-folder-open text-warning mr-2"></i>Product Types</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                      <span class="d-block mb-5">Include the following types of products in my store:</span>
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="show_early_access_titles">
                          <label class="custom-control-label" for="show_early_access_titles">
                            Show Early Access titles  
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="show_software">
                          <label class="custom-control-label" for="show_software">
                            Show Software
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox mb-0">
                          <input class="custom-control-input" type="checkbox" value="" id="show_vrc">
                          <label class="custom-control-label" for="show_vrc">
                            Show Virtual Reality content  
                          </label>
                        </div>
                      </form>
                    </div>
                    <div>
                      <h4><i class="ti-truck text-warning mr-2"></i>Payment Details</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-warning">
                      <span class="d-block mb-5">Include the following types of products in my store:</span>
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control custom-checkbox">
                          <span class="lead-1 fw-500"><i class="far fa-map text-warning mr-2"></i>Billing Address</span>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <span>Street: <span class="text-warning fw-600">3154 Doctors Drive</span></span>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <span>City: <span class="fw-600">Los Angeles</span></span>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <span>State Full: <span class="text-info fw-600">California</span></span>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <span>Zip Code: <span class="text-danger fw-600">90017</span></span>
                        </div>
                        <div class="form-group custom-control custom-checkbox mb-0">
                          <span>Phone Number: <span class="text-warning fw-600">310-341-3767</span></span>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="card bg-dark_A-20 border border-secondary">
                      <div class="px-5 pt-3"><span class="fw-600 ls-1 text-uppercase small-1"><i class="fas fa-user text-warning mr-2"></i>Profile Setting</span></div>
                      <div class="px-5 pt-3 pb-6">
                        <div class="mb-6">
                          <hr class="border-secondary mt-2 mb-4">
                          <span class="d-block fw-600 mb-5"><i class="fas fa-user-secret text-warning mr-2"></i>Privacy Settings</span>
                          <form class="input-transparent mb-5">
                            <div class="form-row">
                              <div class="form-group col d-flex align-items-center">
                                <div class="form-group mb-0">
                                  <label class="small-2 text-warning fw-600 mb-0" for="country">My profile:</label>
                                </div>
                              </div>
                              <div class="form-group col-md-5">
                                <select class="form-control form-control-sm" id="country">
                                  <option>Public</option>
                                  <option>Friends Only</option>
                                  <option>Private</option>
                                </select>
                              </div>
                            </div>
                            <div>
                              <span class="small-4 o-90">Your community profile includes your profile summary, friends list, badges, showcases, comments, and group membership.</span>
                            </div>
                          </form>
                          <form class="input-transparent mb-5">
                            <div class="form-row">
                              <div class="form-group col d-flex align-items-center">
                                <div class="form-group mb-0">
                                  <label class="small-2 text-warning fw-600 mb-0" for="gameDetails">Game details:</label>
                                </div>
                              </div>
                              <div class="form-group col-md-5">
                                <select class="form-control form-control-sm" id="gameDetails">
                                  <option>Public</option>
                                  <option>Friends Only</option>
                                  <option>Private</option>
                                </select>
                              </div>
                            </div>
                            <div>
                              <span class="small-4 o-90">Your community profile includes your profile summary, friends list, badges, showcases, comments, and group membership.</span>
                            </div>
                          </form>
                          <form class="input-transparent">
                            <div class="form-row">
                              <div class="form-group col d-flex align-items-center">
                                <div class="form-group mb-0">
                                  <label class="small-2 text-warning fw-600 mb-0" for="inventory">Inventory:</label>
                                </div>
                              </div>
                              <div class="form-group col-md-5">
                                <select class="form-control form-control-sm" id="inventory">
                                  <option>Public</option>
                                  <option>Friends Only</option>
                                  <option>Private</option>
                                </select>
                              </div>
                            </div>
                            <div>
                              <span class="small-4 o-90">Your community profile includes your profile summary, friends list, badges, showcases, comments, and group membership.</span>
                            </div>
                          </form>
                        </div>
                        <div>
                          <div>
                            <hr class="border-secondary mt-2 mb-5">
                            <span class="d-block fw-600 mb-5"><i class="fas fa-link text-warning mr-2"></i>Connections</span>
                            <hr class="border-secondary mt-2 mb-5">
                          </div>
                          <!-- Connect Steam -->
                          <div class="mb-5 border-bottom border-secondary">
                            <div class="row mb-5">
                              <div class="col">
                                <div class="d-flex align-items-center">
                                  <i class="fab fa-steam lead-4 text-warning mr-2"></i>
                                  <span class="fw-600">Steam<span class="profile-ttip small-8 ml-1" data-toggle="tooltip" data-placement="bottom" title="Connect the Steam and you can see your gameplay data."><i class="fas fa-question-circle"></i></span></span>
                                </div>
                              </div>
                              <div class="col-md-5 text-right">
                                <a href="#" class="btn btn-sm btn-warning">Connect</a>
                              </div>
                            </div>
                            <div class="mb-5">
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Account Information</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchAccountInfo" checked="">
                                    <label class="custom-switch-label mb-0" for="SwitchAccountInfo"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mb-5">
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Notifications</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchNotifications">
                                    <label class="custom-switch-label mb-0" for="SwitchNotifications"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.Connect Steam -->
                          <!-- Connect Twitch -->
                          <div class="mb-5 border-bottom border-secondary">
                            <div class="row mb-5">
                              <div class="col">
                                <div class="d-flex align-items-center">
                                  <i class="fab fa-twitch lead-4 text-warning mr-2"></i>
                                  <span class="fw-600">Twitch<span class="profile-ttip small-8 ml-1" data-toggle="tooltip" data-placement="bottom" title="Connect the Twitch and you can see your gameplay data."><i class="fas fa-question-circle"></i></span></span>
                                </div>
                              </div>
                              <div class="col-md-5 text-right">
                                <a href="#" class="btn btn-sm btn-warning">Connect</a>
                              </div>
                            </div>
                            <div class="mb-5">
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Account Information</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchAccountInfo_t" checked="">
                                    <label class="custom-switch-label mb-0" for="SwitchAccountInfo_t"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mb-5">
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Notifications</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchNotifications_t" checked="">
                                    <label class="custom-switch-label mb-0" for="SwitchNotifications_t"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.Connect Twitch -->
                          <!-- Connect Facebook -->
                          <div>
                            <div class="row mb-5">
                              <div class="col">
                                <div class="d-flex align-items-center">
                                  <i class="fab fa-facebook lead-4 text-warning mr-2"></i>
                                  <span class="fw-600">Facebook<span class="profile-ttip small-8 ml-1" data-toggle="tooltip" data-placement="bottom" title="Connect the Facebook and you can see your gameplay data."><i class="fas fa-question-circle"></i></span></span>
                                </div>
                              </div>
                              <div class="col-md-5 text-right">
                                <a href="#" class="btn btn-sm btn-warning">Connect</a>
                              </div>
                            </div>
                            <div class="mb-5">
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Account Information</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchAccountInfo_f">
                                    <label class="custom-switch-label mb-0" for="SwitchAccountInfo_f"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Notifications</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchNotifications_f" checked="">
                                    <label class="custom-switch-label mb-0" for="SwitchNotifications_f"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.Connect Facebook -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab item -->

            <!-- tab item -->
            <div class="tab-pane fade" id="mp-2-05-c" role="tabpanel" aria-labelledby="mp-2-05-tab">
              <div class="position-relative">
                <header class="header mb-2">
                  <h3>Wishlist</h3>
                  <hr class="w-10 border-top-2 mt-5 mb-7 ml-0 mr-auto border-warning">
                </header>
                <div class="row">
                  <div class="col-lg-8 mb-9 mb-lg-0">
                    <div class="row">
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html"><img class="img img-xl bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <a href="store-product.html"><h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6></a>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 small-3 td-lt">€144.99</span><br>
                                  <span class="fw-600 lead-1 text-warning">€44.99</span>
                                  <span class="small d-none d-sm-block fw-600">
                                      Added on 8/25/<span class="d-none d-lg-inline">20</span>19 ( <a href="#" class="text-dotted-warning">remove</a> )
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html"><img class="img img-xl bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <a href="store-product.html"><h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6></a>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 small-3 td-lt">€144.99</span><br>
                                  <span class="fw-600 lead-1 text-warning">€44.99</span>
                                  <span class="small d-none d-sm-block fw-600">
                                    Added on 8/25/<span class="d-none d-lg-inline">20</span>19 ( <a href="#" class="text-dotted-warning">remove</a> )
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html"><img class="img img-xl bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <a href="store-product.html"><h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6></a>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 small-3 td-lt">€144.99</span><br>
                                  <span class="fw-600 lead-1 text-warning">€44.99</span>
                                  <span class="small d-none d-sm-block fw-600">
                                    Added on 8/25/<span class="d-none d-lg-inline">20</span>19 ( <a href="#" class="text-dotted-warning">remove</a> )
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html"><img class="img img-xl bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <a href="store-product.html"><h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6></a>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 small-3 td-lt">€144.99</span><br>
                                  <span class="fw-600 lead-1 text-warning">€44.99</span>
                                  <span class="small d-none d-sm-block fw-600">
                                    Added on 8/25/<span class="d-none d-lg-inline">20</span>19 ( <a href="#" class="text-dotted-warning">remove</a> )
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html"><img class="img img-xl bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <a href="store-product.html"><h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6></a>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 small-3 td-lt">€144.99</span><br>
                                  <span class="fw-600 lead-1 text-warning">€44.99</span>
                                  <span class="small d-none d-sm-block fw-600">
                                    Added on 8/25/<span class="d-none d-lg-inline">20</span>19 ( <a href="#" class="text-dotted-warning">remove</a> )
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html"><img class="img img-xl bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <a href="store-product.html"><h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6></a>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 small-3 td-lt">€144.99</span><br>
                                  <span class="fw-600 lead-1 text-warning">€44.99</span>
                                  <span class="small d-none d-sm-block fw-600">
                                    Added on 8/25/<span class="d-none d-lg-inline">20</span>19 ( <a href="#" class="text-dotted-warning">remove</a> )
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html"><img class="img img-xl bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <a href="store-product.html"><h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6></a>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 small-3 td-lt">€144.99</span><br>
                                  <span class="fw-600 lead-1 text-warning">€44.99</span>
                                  <span class="small d-none d-sm-block fw-600">
                                    Added on 8/25/<span class="d-none d-lg-inline">20</span>19 ( <a href="#" class="text-dotted-warning">remove</a> )
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-0">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html"><img class="img img-xl bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Games Store"></a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <a href="store-product.html"><h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6></a>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 small-3 td-lt">€144.99</span><br>
                                  <span class="fw-600 lead-1 text-warning">€44.99</span>
                                  <span class="small d-none d-sm-block fw-600">
                                    Added on 8/25/<span class="d-none d-lg-inline">20</span>19 ( <a href="#" class="text-dotted-warning">remove</a> )
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                    </div>
                    <!-- pagination -->
                    <nav class="mt-7 pt-4 border-top border-secondary" aria-label="Page navigation">
                      <ul class="pagination justify-content-end list-unstyled">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span class="ti-angle-left small-7" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span class="ti-angle-right small-7" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <!-- /.pagination -->
                  </div>
                  <div class="col-lg-4">
                    <div class="filters border border-secondary rounded p-4">
                      <ul class="sidebar-nav-light-hover list-unstyled list-style-image mb-0 text-unset small-3 fw-600">
    
                        <li class="nav-item text-light transition mb-2 active">
                          <a href="" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser collapser-active nav-link-border">
                              <span class="p-collapsing-title">Platform</span>
                          </a>
                          <div class="collapse nav-collapse show">
                              <ul class="list-unstyled py-2">
                                <li class="nav-item">
                                  <div class="nav-link py-1 px-3">
                                      <form>
                                        <div class="custom-control custom-checkbox">
                                          <input class="custom-control-input" type="checkbox" value="" id="PC_check" checked>
                                          <label class="custom-control-label" for="PC_check">
                                            PC
                                          </label>
                                        </div>
                                      </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-1 px-3">
                                      <form>
                                        <div class="custom-control custom-checkbox">
                                          <input class="custom-control-input" type="checkbox" value="" id="MAC_check">
                                          <label class="custom-control-label" for="MAC_check">
                                            MAC
                                          </label>
                                        </div>
                                      </form>
                                  </div>
                                </li>
                              </ul>
                          </div>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                              <span class="p-collapsing-title">Genre</span>
                          </a>
                          <div class="collapse nav-collapse">
                              <ul class="list-unstyled py-2">
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Action_check">
                                        <label class="custom-control-label" for="Action_check">
                                          Action
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Adventure_check">
                                        <label class="custom-control-label" for="Adventure_check">
                                          Adventure
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Casual_check">
                                        <label class="custom-control-label" for="Casual_check">
                                          Casual
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Early_access_check">
                                        <label class="custom-control-label" for="Early_access_check">
                                          Early Access
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Free_to_play_check">
                                        <label class="custom-control-label" for="Free_to_play_check">
                                          Free to Play
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Indie_check">
                                        <label class="custom-control-label" for="Indie_check">
                                          Indie
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Massively_multiplayer_check">
                                        <label class="custom-control-label" for="Massively_multiplayer_check">
                                          Massively Multiplayer
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Racing_check">
                                        <label class="custom-control-label" for="Racing_check">
                                          Racing
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="RPG_check">
                                        <label class="custom-control-label" for="RPG_check">
                                          RPG
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Simulation_check">
                                        <label class="custom-control-label" for="Simulation_check">
                                          Simulation
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Sports_check">
                                        <label class="custom-control-label" for="Sports_check">
                                          Sports
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Strategy_check">
                                        <label class="custom-control-label" for="Strategy_check">
                                          Strategy
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                              </ul>
                          </div>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                              <span class="p-collapsing-title">Software</span>
                          </a>
                          <div class="collapse nav-collapse">
                              <ul class="list-unstyled py-2">
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Animation_modeling_check">
                                        <label class="custom-control-label" for="Animation_modeling_check">
                                          Animation & Modeling
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Audio_production_check">
                                        <label class="custom-control-label" for="Audio_production_check">
                                          Audio Production
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Design_check">
                                        <label class="custom-control-label" for="Design_check">
                                          Design
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Education_check">
                                        <label class="custom-control-label" for="Education_check">
                                          Education
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Game_development_check">
                                        <label class="custom-control-label" for="Game_development_check">
                                          Game Development
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Photo_editing_check">
                                        <label class="custom-control-label" for="Photo_editing_check">
                                          Photo Editing
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Utilities_check">
                                        <label class="custom-control-label" for="Utilities_check">
                                          Utilities
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Video_production_check">
                                        <label class="custom-control-label" for="Video_production_check">
                                          Video Production
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Web_publishing_check">
                                        <label class="custom-control-label" for="Web_publishing_check">
                                          Web Publishing
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                              </ul>
                          </div>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                              <span class="p-collapsing-title">Supported VR</span>
                          </a>
                          <div class="collapse nav-collapse">
                              <ul class="list-unstyled py-2">
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="VR_check">
                                        <label class="custom-control-label" for="VR_check">
                                          Euismod VR
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="VR_check_2">
                                        <label class="custom-control-label" for="VR_check_2">
                                          Euismod VR
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="VR_check_3">
                                        <label class="custom-control-label" for="VR_check_3">
                                          Euismod VR
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                              </ul>
                          </div>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                              <span class="p-collapsing-title">Release Status</span>
                          </a>
                          <div class="collapse nav-collapse">
                              <ul class="list-unstyled py-2">
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Released_check">
                                        <label class="custom-control-label" for="Released_check">
                                          Released
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Pre_Purchase_check">
                                        <label class="custom-control-label" for="Pre_Purchase_check">
                                          Pre-Purchase
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <div class="nav-link py-2 px-3">
                                    <form>
                                      <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="Coming_soon_check">
                                        <label class="custom-control-label" for="Coming_soon_check">
                                          Coming Soon
                                        </label>
                                      </div>
                                    </form>
                                  </div>
                                </li>
                              </ul>
                          </div>
                        </li>
                        <li class="nav-item text-light transition mt-4">
                          <a href="" class="btn btn-warning d-block">Reset Filter</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab item -->

            <!-- tab item -->
            <div class="tab-pane fade" id="mp-2-06-c" role="tabpanel" aria-labelledby="mp-2-06-tab">
              <div class="position-relative">
                
                <div class="row">
                  <div class="col-lg-8 mb-9 mb-lg-0">
                    <div class="row">
                      <div class="col-12">
                        <h3>Your Groups</h3>
                        <hr class="w-10 border-top-2 mt-5 mb-7 ml-0 mr-auto border-warning">
                      </div>
                      <!-- item -->
                      <div class="col-md-12 mb-6 mb-lg-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html">
                                <div class="gr-img aspect-ratio-1_1 bs-c bp-c br-n border border-secondary" style="background: url(assets/img/content/img_01.jpg);"></div>
                              </a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                              <a href="store-product.html" class="d-flex flex-wrap align-items-center lh-6 mb-0 mb-md-2"><span class="ls-1 lead-1 fw-500 text-uppercase">Integer sagittis semper</span> <span class="small-3 fw-600 text-warning"><span class="mx-1">-</span>Public</span></a>
                              <div class="d-none d-md-flex align-items-center lh-1 fw-500 small-3 mb-0">
                                <a href="#" class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-user d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i><span class="fw-600 mr-1">25</span>Members</a>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-gamepad d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i><span class="fw-600 mr-1">0</span>In-Game</span>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-circle d-none d-md-inline d-lg-none d-xl-inline text-warning small-7 mr-2"></i><span class="fw-600 mr-1">4</span>Online</span>
                                <a href="#" class="d-flex align-items-center"><i class="fas fa-comment d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i>0 In Group Chat</a>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <a href="#" class="fw-500">Leave group</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-6 mb-lg-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html">
                                <div class="gr-img aspect-ratio-1_1 bs-c bp-c br-n border border-secondary" style="background: url(assets/img/content/img_01.jpg);"></div>
                              </a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                              <a href="store-product.html" class="d-flex flex-wrap align-items-center lh-6 mb-0 mb-md-2"><span class="ls-1 lead-1 fw-500 text-uppercase">Integer sagittis semper</span> <span class="small-3 fw-600 text-warning"><span class="mx-1">-</span>Public</span></a>
                              <div class="d-none d-md-flex align-items-center lh-1 fw-500 small-3 mb-0">
                                <a href="#" class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-user d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i><span class="fw-600 mr-1">25</span>Members</a>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-gamepad d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i><span class="fw-600 mr-1">0</span>In-Game</span>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-circle d-none d-md-inline d-lg-none d-xl-inline text-warning small-7 mr-2"></i><span class="fw-600 mr-1">4</span>Online</span>
                                <a href="#" class="d-flex align-items-center"><i class="fas fa-comment d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i>0 In Group Chat</a>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <a href="#" class="fw-500">Leave group</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-6 mb-lg-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html">
                                <div class="gr-img aspect-ratio-1_1 bs-c bp-c br-n border border-secondary" style="background: url(assets/img/content/img_01.jpg);"></div>
                              </a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                              <a href="store-product.html" class="d-flex flex-wrap align-items-center lh-6 mb-0 mb-md-2"><span class="ls-1 lead-1 fw-500 text-uppercase">Integer sagittis semper</span> <span class="small-3 fw-600 text-warning"><span class="mx-1">-</span>Public</span></a>
                              <div class="d-none d-md-flex align-items-center lh-1 fw-500 small-3 mb-0">
                                <a href="#" class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-user d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i><span class="fw-600 mr-1">25</span>Members</a>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-gamepad d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i><span class="fw-600 mr-1">0</span>In-Game</span>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-circle d-none d-md-inline d-lg-none d-xl-inline text-warning small-7 mr-2"></i><span class="fw-600 mr-1">4</span>Online</span>
                                <a href="#" class="d-flex align-items-center"><i class="fas fa-comment d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i>0 In Group Chat</a>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <a href="#" class="fw-500">Leave group</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-6 mb-lg-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html">
                                <div class="gr-img aspect-ratio-1_1 bs-c bp-c br-n border border-secondary" style="background: url(assets/img/content/img_01.jpg);"></div>
                              </a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                              <a href="store-product.html" class="d-flex flex-wrap align-items-center lh-6 mb-0 mb-md-2"><span class="ls-1 lead-1 fw-500 text-uppercase">Integer sagittis semper</span> <span class="small-3 fw-600 text-danger"><span class="mx-1">-</span>Private</span></a>
                              <div class="d-none d-md-flex align-items-center lh-1 fw-500 small-3 mb-0">
                                <a href="#" class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-user d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i><span class="fw-600 mr-1">25</span>Members</a>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-gamepad d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i><span class="fw-600 mr-1">0</span>In-Game</span>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-circle d-none d-md-inline d-lg-none d-xl-inline text-warning small-7 mr-2"></i><span class="fw-600 mr-1">4</span>Online</span>
                                <a href="#" class="d-flex align-items-center"><i class="fas fa-comment d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i>0 In Group Chat</a>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <a href="#" class="fw-500">Leave group</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-0">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.html">
                                <div class="gr-img aspect-ratio-1_1 bs-c bp-c br-n border border-secondary" style="background: url(assets/img/content/img_01.jpg);"></div>
                              </a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                              <a href="store-product.html" class="d-flex flex-wrap align-items-center lh-6 mb-0 mb-md-2"><span class="ls-1 lead-1 fw-500 text-uppercase">Integer sagittis semper</span> <span class="small-3 fw-600 text-warning"><span class="mx-1">-</span>Public</span></a>
                              <div class="d-none d-md-flex align-items-center lh-1 fw-500 small-3 mb-0">
                                <a href="#" class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-user d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i><span class="fw-600 mr-1">25</span>Members</a>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-gamepad d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i><span class="fw-600 mr-1">0</span>In-Game</span>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-circle d-none d-md-inline d-lg-none d-xl-inline text-warning small-7 mr-2"></i><span class="fw-600 mr-1">4</span>Online</span>
                                <a href="#" class="d-flex align-items-center"><i class="fas fa-comment d-none d-md-inline d-lg-none d-xl-inline text-warning mr-2"></i>0 In Group Chat</a>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <a href="#" class="fw-500">Leave group</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                    </div>
                    <!-- pagination -->
                    <nav class="mt-7 pt-4 border-top border-secondary" aria-label="Page navigation">
                      <ul class="pagination justify-content-end list-unstyled">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span class="ti-angle-left small-7" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span class="ti-angle-right small-7" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <!-- /.pagination -->
                  </div>
                  <div class="col-lg-4">
                    <div class="rounded mb-6">
                      <form class="input-group border-0 input-transparent bg-transparent">
                        <input class="form-control border border-secondary border-right-0" type="search" placeholder="Search groups by name" aria-label="Search">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                      </form>
                    </div>
                    <div class="filters card border border-secondary p-4">
                      <ul class="sidebar-nav-light-hover list-unstyled list-style-image mb-0 text-unset small-3 fw-600">
    
                        <li class="nav-item text-light transition mb-2 active">
                          <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                            <span class="p-collapsing-title"><i class="fas fa-users text-warning mr-2"></i>Your Groups</span>
                          </a>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                            <span class="p-collapsing-title"><i class="fas fa-search text-warning mr-2"></i>Find a Group</span>
                          </a>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                            <span class="p-collapsing-title"><i class="fas fa-plus-square text-warning mr-2"></i>Create Group</span>
                          </a>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                            <span class="p-collapsing-title"><i class="fas fa-envelope text-warning mr-2"></i>Pending Invites</span>
                          </a>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                            <span class="p-collapsing-title"><i class="fas fa-ban text-warning mr-2"></i>Blocked</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab item -->
          </div>
        </div>  
      </div>
      <!-- /.content area -->

    </main>
    <!-- /.main content -->

    <!-- footer -->
    <footer class="footer footer-dark bg-dark py-9">
      <div class="container">
          <div class="row gutters-y">
              <div class="col-6 col-lg-3">
                <a href="#" class="logo d-block mb-4"><img src="assets/img/logo-gaming.png" alt="Wicodus" class="logo-dark"></a>
                <p>Wicodus is a online store where you can find digital goods at the best prices.</p>
                <div class="social-buttons">
                  <a class="social-twitter" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="social-dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                  <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">About</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="about.html">Our team</a>
                  <a class="nav-link" href="about.html">Careers</a>
                  <a class="nav-link" href="about.html">Cookie Policy</a>
                  <a class="nav-link" href="about.html">Privacy Policy</a>
                  
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">Community</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="news.html">Forum</a>
                  <a class="nav-link" href="news.html">Blog</a>
                  <a class="nav-link" href="news.html">News</a>
                  <a class="nav-link" href="news.html">Team</a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">Help</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                  <a class="nav-link" href="contact.html">Support</a>
                  <a class="nav-link" href="contact.html">Terms & conditions</a>
                  <a class="nav-link" href="contact.html">Refund policy</a>
                </div>
              </div>
              
              <div class="col col-lg-3 order-lg-last">
                <div class="mb-6">
                  <h6 class="text-uppercase fw-600 mb-4">Ways to pay</h6>
                  <div class="text-light lead-5 lh-1">
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-paypal"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-visa"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-amazon-pay"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-stripe"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-jcb"></i></a>
                  </div>
                </div>
                <div>
                  <h6 class="mb-2">Reviews</h6>
                  <div class="text-warning lead-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star text-secondary"></i>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </footer>
    <!-- /.footer -->

    <!-- offcanvas-cart -->
    <div id="offcanvas-cart" class="offcanvas-cart offcanvas text-light h-100 r-0 l-auto d-flex flex-column" data-animation="slideRight">
      <div>
        <button type="button" data-toggle="offcanvas-close" class="close float-right ml-4 text-light o-1 fw-100" data-dismiss="offcanvas" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <hr class="border-light o-20 mt-8 mb-4">
      </div>
      <div class="offcanvas-cart-body flex-1">
        <div class="offcanvas-cart-list row align-items-center no-gutters">
          <div class="ocs-cart-item col-12">
            <div class="row align-items-center no-gutters">
              <div class="col-3 item_img d-none d-sm-block">
                <a href="store-product.html"><img class="img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Product"></a>
              </div>
              <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                <a href="store-product.html"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</span></a>
                <div class="position-relative lh-1">
                  <div class="number-input">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="row align-items-center h-100 no-gutters">
                  <div class="ml-auto text-center">
                    <a href="#"><i class="far fa-trash-alt"></i></a><br>
                    <span class="fw-500 text-warning">€44.99</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ocs-cart-item col-12">
            <div class="row align-items-center no-gutters">
              <div class="col-3 item_img d-none d-sm-block">
                <a href="store-product.html"><img class="img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Product"></a>
              </div>
              <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                <a href="store-product.html"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</span></a>
                <div class="position-relative lh-1">
                  <div class="number-input">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="row align-items-center h-100 no-gutters">
                  <div class="ml-auto text-center">
                    <a href="#"><i class="far fa-trash-alt"></i></a><br>
                    <span class="fw-500 text-warning">€27.59</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <a href="checkout-order.html" class="btn btn-lg btn-block btn-outline-light">View cart</a>
      </div>
    </div>
    <!-- /.offcanvas-cart -->

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