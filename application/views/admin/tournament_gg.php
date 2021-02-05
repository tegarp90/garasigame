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
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </header>
            <div class="position-relative">
                <div class="row mb-8 mb-lg-10">
                    <div class="col-12">
                        <header class="text-center mb-6 mb-md-8">
                            <h2 class="mb-0">Tournament Garasi Game</h2>
                            <hr class="w-10 border-top-2 mt-5 mb-6 mx-auto border-warning">
                        </header>
                        <div class="mb08 ml-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning createNewTournament" data-toggle="modal" data-target="#formModalTournament">Buat Tournament</button>
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
                                                    <th style="text-align:center;" scope="col">Nama Tournament</th>
                                                    <th style="text-align:center;" scope="col">Nama Game</th>
                                                    <th style="text-align:center;" scope="col">Tanggal Tournament</th>
                                                    <th style="text-align:center;" scope="col">Max Peserta</th>
                                                    <th style="text-align:center;" scope="col">Biaya Pendaftaran</th>
                                                    <th style="text-align:center;" scope="col">Status</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tournament as $tour) : ?>
                                                    <tr>
                                                        <th style="text-align:center;" scope="row"><?= $numbering++ ?></th>
                                                        <td style="text-align:center;"><?= $tour["NAMA_TOURNAMENT"]; ?></td>
                                                        <td style="text-align:center;"><?= $tour["NAMA_GAME"] ?></td>
                                                        <td style="text-align:center;"><?= $tour["TANGGAL_TOURNAMENT"] ?></td>
                                                        <td style="text-align:center;"><?= $tour["MAX_PESERTA"] ?></td>
                                                        <td style="text-align:center; font-size:12px"><?= "Rp. " . number_format($tour["BIAYA_PENDAFTARAN"], 2, ",", "."); ?></td>
                                                        <td style="text-align:center;">
                                                        <?php if ($tour["STATUS"] == "VALID") : ?>
                                                        <button type="button" class="btn btn-success"><?= $tour["STATUS"] ?></button>
                                                        <?php elseif ($tour["STATUS"] == "SELESAI") : ?>
                                                        <button type="button" class="btn btn-primary"><?= $tour["STATUS"] ?></button>
                                                        <?php elseif ($tour["STATUS"] == "BATAL") : ?>
                                                        <button type="button" class="btn btn-danger"><?= $tour["STATUS"] ?></button>
                                                        <?php endif; ?>
                                                        </td>
                                                        <th scope="col" class="text-center">
                                                            <a class="badge badge-primary editModalTournament" data-toggle="modal" data-target="#formModalTournament" data-id="<?= $tour['ID_TOURNAMENT']; ?>">
                                                                Edit
                                                            </a>
                                                            <a onclick="deleteData(<?= $tour['ID_TOURNAMENT']; ?>)" class="badge badge-danger">Hapus</a>
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

        <!-- Tambah Tournament Modal -->
        <div class="modal fade" id="formModalTournament" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-info" id="formModalLabelTournament">Tambah Tournament</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="admin/tambahTournamentGG" method="POST" id="formTournament">
                        <input type="hidden" class="form-control" id="id" name="id" required>
                        <input type="hidden" class="form-control" id="masterTournament" name="masterTournament" value=1>
                        <div class="form-group">
                            <label for="game" class="text-info">Pilih Game</label>
                            <select class="form-control" id="game" name="game">
                                <?php foreach ($game as $g) : ?>
                                <option value=<?= $g['ID_GAME']; ?>><?= $g['NAMA_GAME']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="namaTournament" class="text-info">Nama Tournament</label>
                            <input type="text" class="form-control" id="namaTournament" name="namaTournament" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggalTournament" class="text-info">Tanggal Tournament</label>
                            <input type="date" class="form-control" id="tanggalTournament" name="tanggalTournament" required>
                        </div>
                        <div class="form-group">
                            <label for="maxPeserta" class="text-info">Max Peserta</label>
                            <input type="number" class="form-control" id="maxPeserta" name="maxPeserta" required>
                        </div>
                        <div class="form-group">
                            <label for="biayaPendaftaran" class="text-info">Biaya Pendaftaran</label>
                            <input type="text" class="form-control" id="biayaPendaftaran" name="biayaPendaftaran" required>
                        </div>
                        <div class="form-group">
                            <label for="status" class="text-info">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value=VALID>VALID</option>
                                <option value=BATAL>BATAL</option>
                                <option value=SELESAI>SELESAI</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="tambahTournament" onclick="Swal.fire('Tournament', 'Tournament Berhasil Ditambahkan !', 'success')">Tambah Tournament</button>
                </div>
                </form>
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
                        url: "<?php echo base_url(); ?>admin/hapusTournament",
                        data: {
                            id: id
                        },
                        success: function() {
                            Swal.fire({
                                title: "Konfirmasi",
                                text: "Data Tournament Berhasil Dihapus",
                                icon: "success"
                            });
                            setTimeout(function() {
                                window.location.href = "admin_list_tournament_gg";
                            }, 2000);
                        },
                        error: function() {
                            Swal.fire({
                                title: "Error",
                                text: "Data Tournament Tidak Bisa Dapat Dihapus",
                                icon: "warning"
                            });
                        }


                    });
                }
            })
        }
    </script>