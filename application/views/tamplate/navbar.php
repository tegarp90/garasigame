<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-nav zi-3">
      <div class="container">
        <div class="row">
          <div class="col-4 col-sm-3 col-md-2 mr-auto">
            <a class="navbar-brand logo" href="#">
              <img src="<?php echo base_url();?>assets/img/logo-gaming.png" alt="Wicodus" class="logo-light mx-auto">
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
            <?php if ($status != "login"): ?>
            <a class="btn btn-sm btn-warning text-secondary mr-2" href="#" data-toggle="modal" data-target="#userLogin">Sign in</a>
            <a class="btn btn-sm text-light d-none d-sm-inline-block" href="#">Sign up</a>
            <?php endif ?>
            <ul class="nav navbar-nav d-none d-sm-inline-flex flex-row">
              <?php if ($status == "login"): ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle small text-capitalize" href="#" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/img/avatar/2.jpg" class="img-xs rounded-circle mr-2" alt="Avatar"><?php echo $username;?> </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="dropdownUser">
                  <a class="dropdown-item" href="#"><span class="mr-2"><i class="fas fa-user"></i></span>My Profile</a>
                  <a class="dropdown-item" href="#"><span class="mr-2"><i class="fas fa-wallet"></i></span>Wallet</a>
                  <a class="dropdown-item" href="#"><span class="mr-2"><i class="fas fa-cog"></i></span>Settings</a>
                  <a class="dropdown-item" href="<?php echo base_url();?>pages"><span class="mr-2"><i class="fas fa-sign-out-alt"></i></span>Logout</a>
                </div>
              </li>
              <?php endif ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle small" href="#" id="dropdownGaming" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mr-2 fas fa-globe"></i>ID </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="dropdownGaming">
                  <a class="dropdown-item" href="#">Indoenesia </a>
                  <a class="dropdown-item" href="#">English </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link small" href="" data-toggle="offcanvas" data-target="#offcanvas-cart">
                  <span class="p-relative d-inline-flex">
                    <span class="badge-cart badge badge-counter badge-warning position-absolute l-1">2</span>
                    <i class="fas fa-shopping-cart"></i>
                  </span>
                </a>
              </li>
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
              <a class="nav-link dropdown-toggle pl-lg-0" href="#" id="dropdownGaming_games" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Games </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_games">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Adventure</a>
                <a class="dropdown-item" href="#">Cooperative</a>
                <a class="dropdown-item" href="#">MMO</a>
                <a class="dropdown-item" href="#">RPG</a>
                <a class="dropdown-item" href="#">Simulation</a>
                <a class="dropdown-item" href="#">Economy</a>
                <a class="dropdown-item" href="#">Horror</a>
                <a class="dropdown-item" href="#">Arcade</a>
                <a class="dropdown-item" href="#">Hack & Slash</a>
                <a class="dropdown-item" href="#">Puzzle</a>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownGaming_software" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Software </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_software">
                <a class="dropdown-item" href="#">Animation & Modeling</a>
                <a class="dropdown-item" href="#">Audio Production</a>
                <a class="dropdown-item" href="#">Design & Illustration</a>
                <a class="dropdown-item" href="#">Education</a>
                <a class="dropdown-item" href="#">Game Development</a>
                <a class="dropdown-item" href="#">Photo Editing</a>
                <a class="dropdown-item" href="#">Utilities</a>
                <a class="dropdown-item" href="#">Video Production</a>
                <a class="dropdown-item" href="#">Web Publishing</a>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownGaming_community" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_community">
                <a class="dropdown-item" href="#">Discussions</a>
                <a class="dropdown-item" href="#">Workshop</a>
                <a class="dropdown-item" href="#">Market</a>
                <a class="dropdown-item" href="#">Broadcasts</a>
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