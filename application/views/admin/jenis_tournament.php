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
                            <h2 class="mb-0">Pilih Jenis Tournament</h2>
                            <hr class="w-10 border-top-2 mt-5 mb-6 mx-auto border-warning">
                        </header>
                        <div class="help_m row gutters-y text-center">
                            <?php foreach ($tournament as $tour) : ?>
                                <div class="col-md-6 col-lg-3">
                                    <a href="<?php if ($tour['ID_MASTER_TOURNAMENT'] == 1) {
                                                    echo "admin_list_tournament_gg";
                                                } elseif ($tour['ID_MASTER_TOURNAMENT'] == 2) {
                                                    echo "admin_list_tournament_user";
                                                } else {
                                                    echo "#";
                                                } ?>">
                                        <div class="card help_card">
                                            <div class="card-body py-7">
                                                <span class="ti-settings lead-7 d-block mb-3"></span>
                                                <h5 class="card-title mb-0"><?= $tour['JENIS_TOURNAMENT'] ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                            <!-- <div class="col-md-6 col-lg-3">
                                <a href="#">
                                    <div class="card help_card">
                                        <div class="card-body py-7">
                                            <span class="ti-settings lead-7 d-block mb-3"></span>
                                            <h5 class="card-title mb-0">Tournaments Users</h5>
                                            <br>
                                        </div>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content area -->