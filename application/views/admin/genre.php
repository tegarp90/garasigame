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
                        <li class="breadcrumb-item"><a href="#">Garasi Game</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </header>
            <div class="position-relative">
                <div class="row mb-8 mb-lg-10">
                    <div class="col-12">
                        <header class="text-center mb-6 mb-md-8">
                            <h2 class="mb-0">GENRE</h2>
                            <hr class="w-10 border-top-2 mt-5 mb-6 mx-auto border-warning">
                        </header>
                        <div class="mb-8">
                            <form class="input-group border-0 input-transparent bg-transparent">
                                <input class="form-control border border-secondary border-right-0" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="mb08 ml-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#formModal">Tambah Genre</button>
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
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;" scope="col">No.</th>
                                                    <th style="text-align:center;" scope="col">Nama Genre</th>
                                                    <th style="text-align:center;" scope="col">Status</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($genre as $g) : ?>
                                                    <tr>
                                                        <th style="text-align:center;" scope="row"><?= $numbering++ ?></th>
                                                        <td><?= $g["NAMA_GENRE"]; ?></td>
                                                        <?php if ($g['IS_ACTIVE'] == 0) : ?>
                                                            <td style="text-align:center;"><button type="button" class="btn btn-danger">Tidak Aktif</button></td>
                                                        <?php elseif ($g['IS_ACTIVE'] == 1) : ?>
                                                            <td style="text-align:center;"><button type="button" class="btn btn-success">Aktif</button></td>
                                                        <?php endif; ?>
                                                        <th scope="col" class="text-center">
                                                            <a href="" class="badge badge-primary">Edit</a>
                                                            <a href="" class="badge badge-danger">Hapus</a>
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


    <!-- Tambah Genre Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-info" id="formModalLabel">Tambah Genre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url(); ?>admin/tambahGenre" method="POST" id="formGenre">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nama" class="text-info">Nama Genre</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Ex : MMORPG" required>
                        </div>
                        <div class="form-group">
                            <label for="status" class="text-info">Example select</label>
                            <select class="form-control" id="status" name="status">
                                <option value=1>Aktif</option>
                                <option value=0>Tidak Aktif</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" name="tambahGenre">Tambah Genre</button>
                </div>
                </form>
            </div>
        </div>
    </div>