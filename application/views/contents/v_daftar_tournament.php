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
                    <div class="ig-img br-n bp-c bs-c" style="background-image: url(assets/img/content/carousel/slide_01.jpg);"></div>
                    <div class="ig-sl-gr text-light text-uppercase my-5 my-lg-0">

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="ig-img br-n bp-c bs-c" style="background-image: url(assets/img/content/carousel/slide_02.jpg);"></div>
                    <div class="ig-sl-gr text-light text-uppercase my-5 my-lg-0">

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="ig-img br-n bp-c bs-c" style="background-image: url(assets/img/content/carousel/slide_03.jpg);"></div>
                    <div class="ig-sl-gr text-light text-uppercase my-5 my-lg-0">
                        <!-- <div class="text-center p-7">
                  <h3 class="mb-0 mb-md-2">Phasellus viverra</h3>
                  <p class="mb-0 d-none d-md-block">Nam tincidunt dui eget scelerisque tempor. Nulla facilisi. Praesent aliquam venenatis purus at euismod. Fusce lobortis, eros malesuada volutpat fermentum, lorem magna convallis enim, eget mollis lorem nisi id justo. Suspendisse luctus quam id nulla fermentum porttitor.</p>
                </div> -->
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
            <h2>Daftar Tournament</h2>
        </header>
        <div class="container">
            <form action="<?= base_url() ?>Pages/create_daftar_turnamen" method="POST">
                <input type="hidden" class="form-control" id="idTour" name="idTour" value="<?= $tournament['ID_TOURNAMENT'] ?>">
                <div class="form-group">
                    <label for="namaPeserta">Nama Tournament</label>
                    <input type="text" class="form-control" id="namaTour" name="namaTour" value="<?= $tournament['NAMA_TOURNAMENT'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="namaPeserta">Masukkan Nama Peserta / Tim</label>
                    <input type="text" class="form-control" id="namaPeserta" name="namaPeserta">
                </div>
                <div class="form-group">
                    <label for="noHp">Masukkan Nomor HP Yang Aktif</label>
                    <input type="number" class="form-control" id="noHp" name="noHp" required>
                </div>
                <button type="submit" class="btn btn-warning" onclick="Swal.fire('BERHASIL TERDAFTAR !', 'Pastikan Nomor HP Aktif Untuk Konfirmasi Oleh Admin', 'success')">Daftar</button>
            </form>
        </div>
        </div>
    </section>
    <!-- /.content area -->


</main>

<?php
$this->load->view('tamplate/footer');
?>