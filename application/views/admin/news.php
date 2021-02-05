<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-fixed" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">☰</button>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle pl-lg-0" href="#" id="dropdownGaming_games" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Games </a>
                    <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_games">
                        <a class="dropdown-item" href="#">Action</a>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownGaming_software" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Software </a>
                    <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_software">
                        <a class="dropdown-item" href="#">Animation & Modeling</a>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownGaming_community" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community </a>
                    <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_community">
                        <a class="dropdown-item" href="#">Discussions</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Support</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /.navbar -->

<!-- main content -->
<main class="main-content gradient-lg position-relative">

    <!-- overlay -->
    <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets/img/bg/bg_shape.png);"></div>
    <!-- /.overlay -->

    <!-- content area -->
    <div class="content-section help_c text-light">
        <div class="container">
            <header class="header mb-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb-product breadcrumb breadcrumb-nowrap breadcrumb-angle bg-transparent pl-0 pr-0 mb-0">
                        <li class="breadcrumb-item"><a href="admin">Halaman Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </header>
            <div class="position-relative">
                <div class="row mb-8 mb-lg-10">
                    <div class="col-12">
                        <header class="text-center mb-6 mb-md-8">
                            <h2 class="mb-0">News Garasi Game</h2>
                            <hr class="w-10 border-top-2 mt-5 mb-6 mx-auto border-warning">
                        </header>
                        <div class="mb08 ml-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning createNewNews" data-toggle="modal" data-target="#formModalNews">Buat Berita</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb08">
                            <div class="container">
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="tableTournament" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;" scope="col">No.</th>
                                                    <th style="text-align:center;" scope="col">Judul Berita</th>
                                                    <th style="text-align:center;" scope="col">Tanggal Berita</th>
                                                    <th style="text-align:center;" scope="col">Tampilkan Isi & Gambar</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($news as $n) : ?>
                                                    <tr>
                                                        <th style="text-align:center;" scope="row"><?= $numbering++ ?></th>
                                                        <td style="text-align:center;"><?= $n["JUDUL"]; ?></td>
                                                        <td style="text-align:center;"><?= $n["CREATED_DATE"] ?></td>
                                                        <td style="text-align:center;">
                                                            <button type="button" class="btn btn-primary modalDetailNews" data-toggle="modal" data-target="#showDetailNews" data-id="<?= $n['ID_NEWS'] ?>">Show</button>
                                                        </td>
                                                        <th scope="col" class="text-center">
                                                            <a class="badge badge-primary" data-toggle="modal" data-target="#" data-id="<?= $n['ID_NEWS'] ?>">
                                                                Edit
                                                            </a>
                                                            <a onclick="deleteData(<?= $n['ID_NEWS']; ?>)" class="badge badge-danger">Hapus</a>
                                                        </th>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <header class="text-center mb-7 mb-md-8">
                            <h2 class="mb-0">Trending Topics</h2>
                            <hr class="w-10 border-top-2 mt-5 mb-6 mx-auto border-warning">
                        </header>
                        <div class="row gutters-y">
                            <div class="col-md-6 col-lg-3">
                                <div>
                                    <h6>Getting Started</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                How to Begin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                Account Basics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                Editor Basics
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div>
                                    <h6>Games</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                System files
                                            </a>
                                        </li>
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                System requirements
                                            </a>
                                        </li>
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                Localization
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div>
                                    <h6>Mailboxes</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                Mailbox Basics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                Google Apps
                                            </a>
                                        </li>
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                Connecting a Mailbox
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div>
                                    <h6>Security</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                2-step verification
                                            </a>
                                        </li>
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                Device sync
                                            </a>
                                        </li>
                                        <li>
                                            <a href="help-center-article.html" class="help_trt">
                                                <span class="ti-angle-right text-warning small-6 mr-2"></span>
                                                Connected services
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content area -->

    <!-- Tambah News Modal -->
    <div class="modal fade" id="formModalNews" tabindex="-1" aria-labelledby="formModalNews" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-info" id="formModalNewsLabel">Tambah Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('Admin/tambahNews'); ?>
                    <input type="hidden" class="form-control" id="id" name="id" required>
                    <div class="form-group">
                        <label for="nama" class="text-info">Judul Berita</label>
                        <input type="text" class="form-control" id="judulBerita" name="judulBerita" required>
                    </div>
                    <div class="form-group" id="imageForEdit">
                        <label for="image" class="text-info">Upload Gambar</label>
                        <input type="file" class="form-control" id="image" name="image"></input>
                    </div>
                    <div class="form-group">
                        <label for="desc" class="text-info">Isi Berita</label>
                        <textarea class="form-control" id="isi" name="isi" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="tambahNews" onclick="Swal.fire('BERITA', 'Berita Berhasil Ditambahkan !', 'success')">Tambah Berita</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>

    <!-- Modal Detail Game -->
    <div class="modal fade" id="showDetailNews" tabindex="-1" role="dialog" aria-labelledby="showDetailNews" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="hidden" class="form-control" id="id" name="id" required>
                    <h5 class="modal-title" id="showDetailNewsLabel">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container" id=showImageNews></div>
                    <hr>
                    <div class="container">
                        <h6 id="detailNews" name="detailNews" style="text-align:center;"></h6>
                    </div>
                    <br>
                    <!-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Change Image</span>
                        </div>
                        <?= form_open_multipart('Admin/ubahGambarNews'); ?>
                        <div class="custom-file" style="background-color:powderblue;">
                            <input type="file" id="image" name="image"></input>
                            <button onclick="editGambar(<?= $game[0]['ID_NEWS']; ?>)" type="submit" class="btn btn-primary" id="ubahGambarNews">Ganti</button>
                        </div>
                        <?= form_close(); ?>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Sweet Alert Delete Confirmation -->
    <script>
        function deleteData(id) {
            console.log(id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>admin/hapusNews",
                        data: {
                            id: id
                        },
                        success: function() {
                            Swal.fire({
                                title: "Konfirmasi",
                                text: "Berita Berhasil Dihapus",
                                icon: "success"
                            });
                            setTimeout(function() {
                                window.location.href = "admin_news";
                            }, 2000);
                        },
                        error: function() {
                            Swal.fire({
                                title: "Error",
                                text: "Berita Tidak Bisa Dapat Dihapus",
                                icon: "warning"
                            });
                        }


                    });
                }
            })
        }
    </script>