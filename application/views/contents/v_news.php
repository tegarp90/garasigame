<!-- main content -->
<main class="main-content gradient-lg position-relative">

  <!-- overlay -->
  <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets/img/bg/bg_shape.png);"></div>
  <!-- /.overlay -->

  <!-- content area -->
  <div class="content-section news-section carousel-spotlight ig-carousel text-light">
    <div class="container">
      <header class="header">
        <!-- <nav aria-label="breadcrumb">
              <ol class="breadcrumb-product breadcrumb breadcrumb-nowrap breadcrumb-angle bg-transparent pl-0 pr-0 mb-0">
                <li class="breadcrumb-item"><a href="#">All Games</a></li>
                <li class="breadcrumb-item"><a href="#">Action Games</a></li>
                <li class="breadcrumb-item active" aria-current="page">Vestibulum</li>
              </ol>
            </nav> -->
        <h2>News</h2>
      </header>
      <div class="position-relative">
        <div class="row">
          <div class="col-lg-8">
            <!-- nav tabs -->
            <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap" id="most_popular_products-carousel-01" role="tablist">
              <li class="nav-item text-fnwp position-relative">
                <a class="nav-link active show" id="mp-2-01-tab" data-toggle="tab" href="#mp-2-01-c" role="tab" aria-controls="mp-2-01-c" aria-selected="true">Headlines</a>
              </li>
            </ul>
            <!-- tab panes -->
            <div id="color_sel_Carousel-content_02" class="tab-content position-relative w-100">
              <!-- tab item -->
              <div class="tab-pane fade active show" id="mp-2-01-c" role="tabpanel" aria-labelledby="mp-2-01-tab">
                <div class="row news-list">
                  <!-- item -->
                  <?php foreach ($news as $n) : ?>
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="<?= base_url(); ?>/assets/img/news/<?= $n['FOTO']; ?>">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600">
                            <a href="<?= base_url(); ?>news_detail?ID_NEWS=<?= $n['ID_NEWS']; ?>"><?= $n['JUDUL']; ?></a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i><?= $n['CREATED_DATE']; ?></span>
                            </div>
                            <p style="display:block;text-overflow: ellipsis;width: 400px;overflow: hidden; white-space: nowrap;">
                            <?= $n['ISI_NEWS']; ?>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
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