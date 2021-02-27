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
                        <li class="breadcrumb-item"><a href="games_admin_tournament">Jenis Tournament</a></li>
                        <li class="breadcrumb-item"><a href="admin_list_tournament_gg">Tournament Garasi Game</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $tournament['NAMA_TOURNAMENT']; ?></li>
                    </ol>
                </nav>
            </header>
            <div class="position-relative">
                <div class="row mb-8 mb-lg-10">
                    <div class="col-12">
                        <header class="text-center mb-6 mb-md-8">
                            <h2 class="mb-0"><?= $tournament['NAMA_TOURNAMENT'] ?></h2>
                            <hr class="w-10 border-top-2 mt-5 mb-6 mx-auto border-warning">
                        </header>
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
                                                    <th style="text-align:center;" scope="col">Username</th>
                                                    <th style="text-align:center;" scope="col">Nama Tim/Peserta</th>
                                                    <th style="text-align:center;" scope="col">No. Hp</th>
                                                    <th style="text-align:center;" scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($daftarPeserta as $peserta) : ?>
                                                    <tr>
                                                        <th style="text-align:center;" scope="row"><?= $numbering++ ?></th>
                                                        <td style="text-align:center;"><a href="#"><?= $peserta["USERNAME"]; ?></a></td>
                                                        <td style="text-align:center;"><?= $peserta["NAMA_TIM"] ?></td>
                                                        <td style="text-align:center;"><?= $peserta["NO_HP_AKTIF"] ?></td>
                                                        <td style="text-align:center;">
                                                            <button id="updatePeserta" type="button" data-toggle="modal" data-target="#updateStatus" data-id="<?= $peserta['ID_PESERTA_TOURNAMENT']; ?>" 
                                                            <?php 
                                                                if ($peserta['STATUS'] == "PENDING") {
                                                                    echo 'class="btn btn-warning updatePeserta"';
                                                                } elseif ($peserta['STATUS'] == "CONFIRM") {
                                                                    echo 'class="btn btn-success updatePeserta"';
                                                                } elseif ($peserta['STATUS'] == "REJECT") {
                                                                    echo 'class="btn btn-danger updatePeserta"';
                                                                }
                                                            ?>
                                                            >
                                                            <?= $peserta["STATUS"] ?></button>
                                                        </td>
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

    <!-- Edit Status -->
    <div class="modal fade" id="updateStatus" tabindex="-1" aria-labelledby="updateStatus" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-info" id="updateStatusLabel">Update Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="admin/ubahStatus" method="POST" id="updateStatus">
                        <input type="hidden" class="form-control" id="id" name="id" required>
                        <div class="form-group">
                            <label for="status" class="text-info">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="PENDING">PENDING</option>
                                <option value="CONFIRM">CONFIRM</option>
                                <option value="REJECT">REJECT</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="updateStatus" onclick="Swal.fire('UPDATED', 'Status Berhasil Di Update', 'success')">SUBMIT</button>
                </div>
                </form>
            </div>
        </div>
    </div>