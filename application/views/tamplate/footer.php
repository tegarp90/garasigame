    <!-- footer -->
    <footer class="footer footer-dark bg-dark py-9">
      <div class="container">
          <div class="row gutters-y">
              <div class="col-6 col-lg-3">
                <a href="#" class="logo d-block mb-4"><img src="<?php echo base_url();?>assets/img/logo-gaming.png" alt="Wicodus" class="logo-dark"></a>
                <p>Sumber guide game dan berita E-Sport Indonesia dan Dunia. Tak Hanya Game E-Sport PC, Tapi Juga Mobile</p>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">About Us</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="#">Kebijakan & Privasi</a>
                  <a class="nav-link" href="#">Syarat & Ketentuan</a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">Section</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="#">E-Sport</a>
                  <a class="nav-link" href="#">Geek</a>
                  <a class="nav-link" href="#">Hiburan</a>
                  <a class="nav-link" href="#">Tekno</a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">Follow Us</h6>
                <div class="nav flex-column social-buttons ">
                  <a class="social-youtube" href="#"><i class="fab fa-youtube fa-lg">Youtube </i> </a>
                  <a class="social-twitter" href="#"><i class="fab fa-twitter fa-lg">Twitter </i> </a>
                  <a class="social-instagram" href="#"><i class="fab fa-instagram fa-lg">Instagram </i> </a>
                  <a class="social-facebook" href="#"><i class="fab fa-facebook fa-lg">Facebook </i> </a>
                </div>
              </div>
              
              <div class="col col-lg-3 order-lg-last">
                <div class="mb-6">
                  <h6 class="text-uppercase fw-600 mb-4">Download On</h6>
                  <div class="text-light lead-5 lh-1">
                    <a href="#" class="social-twitter"><i class="fab fa-google-play fa-xs">Google Play</i></a></br>
                    <a href="#" class="social-instagram"><i class="fab fa-app-store fa-xs">APP STORE</i></a>
                  </div>
                </div>
          </div>
      </div>
      <div class="view_modal" style="display:none;"></div>
      <div class="view_modal2" style="display:none;"></div>
    </footer>
    <!-- /.footer -->

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- User JS -->
    <script src="assets/js/scripts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js" id="_mainJS" data-plugins="load"></script>

    <script type="text/javascript">
      $(document).ready(function () {

        $('.login-button').click(function(e){
          e.preventDefault();

          $.ajax({
            url: "<?= site_url('login/formlogin') ?>",
            dataType: "json",
            success: function (response) {
              $('.view_modal').html(response.data).show();
              
              $('#userLogin').modal('show');
            },
            error: function(xhr, ajaxOptions, thrownError){
              alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
          });

        });

        $('.reg-button').click(function(e){
          e.preventDefault();

          $.ajax({
            url: "<?= site_url('login/formregister') ?>",
            dataType: "json",
            success: function (response) {
              $('.view_modal2').html(response.data).show();
              
              $('#userSignup').modal('show');
            },
            error: function(xhr, ajaxOptions, thrownError){
              alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
          });

        });
        
      });
    </script>
    
  </body>
</html>