<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-nav zi-3">
      <div class="container">
        <div class="row">
          <div class="col-4 col-sm-3 col-md-2 mr-auto">
            <a class="navbar-brand logo" href="<?php echo base_url(); ?>">
              <img src="assets/img/logo-gaming.png" alt="Wicodus" class="logo-light mx-auto">
            </a>
          </div>
          <div class="col-4 d-none d-lg-block mx-auto">
            <form class="input-group border-0 bg-transparent">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </form>
          </div>
          <div class="col-8 col-sm-8 col-md-8 col-lg-6 col-xl-4 ml-auto text-right">
            <?php if (empty($_SESSION['web_sesi']) || $_SESSION['web_sesi'] == false) { ?>
              <button class="btn btn-sm btn-warning text-secondary mr-2 login-button">Sign in</button>
              <a class="btn btn-sm text-light d-none d-sm-inline-block reg-button" >Sign up</a>
            <?php } ?>
            <ul class="nav navbar-nav d-none d-sm-inline-flex flex-row">
              <?php if (isset($_SESSION['web_sesi']) && $_SESSION['web_sesi'] == true) { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle small text-capitalize" href="#" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/avatar/default.jpg" class="img-xs rounded-circle mr-2" alt="Avatar"> <?php echo $_SESSION['username']; ?></a>
                <div class="dropdown-menu position-absolute" aria-labelledby="dropdownUser">
                  <a class="dropdown-item" href="profile?user=<?= $_SESSION['username']; ?>"><span class="mr-2"><i class="fas fa-user"></i></span>My Profile</a>
                  <!-- <a class="dropdown-item" href="#"><span class="mr-2"><i class="fas fa-wallet"></i></span>Wallet</a> -->
                  <a class="dropdown-item" href="#"><span class="mr-2"><i class="fas fa-cog"></i></span>Settings</a>
                  <a class="dropdown-item" href="logout"><span class="mr-2"><i class="fas fa-sign-out-alt"></i></span>Logout</a>
                </div>
              </li>
              <?php } ?>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle small" href="#" id="dropdownGaming" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mr-2 fas fa-globe"></i>ID </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="dropdownGaming">
                  <a class="dropdown-item" href="#">Indoenesia </a>
                  <a class="dropdown-item" href="#">English </a>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-fixed" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">☰</button>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle pl-lg-0" href="#" id="dropdownTournament" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tournament </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownTournament">
                <a class="dropdown-item" href="tournament">Tournament Garasi Game</a>
                <a class="dropdown-item" href="#" onclick="alert('Coming Soon')">Create Tournament</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="alert('Coming Soon')">Marketplace </a>
            </li>
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownNews" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownNews">
                <a class="dropdown-item" href="news">News Update </a>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownGaming_community" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_community">
                <a class="dropdown-item" href="#" onclick="alert('Coming Soon')">Gamers Forum</a>
                <a class="dropdown-item" href="#" onclick="alert('Coming Soon')">Media Social</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->