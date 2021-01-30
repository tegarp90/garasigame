<main class="main-content">

      <!-- content area -->
  <section class="content-section">
    <div class="container">
      <div class="row gutters-y">
        <div class="col-lg-5">
          <div class="p-4 border border-secondary" data-overlay="9">
            <div class="p-relative">
              <div class="mb-3">
                <h5 class="lead-2 fw-500 text-warning">Profile Picture</h5>
                <div class="pb-5 w-100 text-light text-center">
                  <div class="img-xl position-relative br-n bp-c bs-c article-image ar-1_1 mx-auto rounded-circle border border-secondary mb-6" style="background-image: url(assets/img/avatar/default.jpg)">
                    <span class="position-absolute b-0 r-0 text-secondary lead-3 d-block bg-warning p-2 rounded-circle lh-1"><input type="file" class="custom-file-input position-absolute l-0 t-0 b-0 h-auto" id="customFile"><i class="far fa-image"></i></span>
                  </div>
                  <h3><?= $USERNAME ?></h3>
                </div>
              </div>
              <div class="mb-7">
                <h5 class="lead-2 fw-500 text-warning">Office</h5>
                <ul class="list-unstyled">
                  <li>2265 N 2453rd Rd, Marseilles, IL, 61341 (815) 795-9748</li>
                  <li>Lee St, Orwigsburg, PA, 17961</li>
                  <li>637 Lee St, Orwigsburg, PA, 17961</li>
                  <li>200 Sunset Ct, Hahnville, LA, 70057</li>
                </ul>
              </div>
              <div>
                <h5 class="lead-2 fw-500 text-warning">Follow Us</h5>
                <div class="social-buttons">
                  <a class="mr-3 unset social-twitter" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="mr-3 unset social-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class="mr-3 unset social-dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                  <a class="mr-3 unset social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 text-light">
          <div class="mb-6">
            <h3>Complete Your Profile</h3>
            <p class="lead-1">Morbi aliquet felis nec nisl congue interdum. Quisque vitae sapien ullamcorper.</p>
          </div>
          <form data-form="contact_form" action="assets/php/contact-form.php" class="input-transparent" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="text" name="f_name" placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="text" name="l_name" placeholder="Last Name" required>
                </div>
                <div class="form-group col-md-12">
                  <input class="form-control form-control-lg" type="text" name="p_number" placeholder="Phone Number">
                </div>
              </div>
              <button class="btn btn-lg btn-warning" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content area -->

</main>

<script type="text/javascript">
  
</script>