<!-- main content -->
<main class="main-content gradient-lg position-relative">

    <!-- overlay -->
    <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets/img/bg/bg_shape.png);"></div>
    <!-- /.overlay -->

    <!-- content area -->
    <div class="content-section news-section carousel-spotlight ig-carousel text-light">
        <div class="container">
            <div class="position-relative">
                <div class="row">
                    <div class="col-lg-20">
                        <div class="row news-list">
                            <h3 class="text-uppercase fw-600"><?= $news['JUDUL']; ?></h3>
                            <br><br><br>
                            <!-- tab panes -->
                            <div id="color_sel_Carousel-content_02" class="tab-content position-relative w-100">
                                <!-- tab item -->
                                <div class="tab-pane fade active show" id="mp-2-01-c" role="tabpanel" aria-labelledby="mp-2-01-tab">
                                    <img height="600px" src="<?= base_url(); ?>/assets/img/news/<?= $news['FOTO']; ?>">
                                    <!-- item -->
                                    <div class="news-item mb-4">

                                        <div class="row">
                                            <div class="mb-5 mb-lg-0">

                                            </div>
                                            <div class="col">
                                                <div class="text-gray">

                                                    <div class="small-3 mb-2">
                                                        <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i><?= $news['CREATED_DATE']; ?></span>
                                                    </div>
                                                    <p>
                                                        <?= $news['ISI_NEWS']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.item -->
                                </div>
                            </div>
                            <!-- /.tab item -->
                        </div>
                        <!-- /.pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content area -->
</main>


<?php
$this->load->view('tamplate/footer');
?>