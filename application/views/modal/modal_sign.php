<!-- sign in Modal-->
    <div class="modal fade" id="userLogin" tabindex="-1" role="dialog" aria-labelledby="userLoginTitle" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header border-secondary">
            <h5 class="modal-title" id="userLoginTitle">Log in</h5>
            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="invalid-feedback"></div>
            <form method="post" class="input-transparent form-login" id="form_login">
              <div class="form-group">
                <input type="text" class="form-control border-secondary" id="username" name="username" placeholder="Username">

              </div>
              <div class="form-group">
                <input type="password" class="form-control border-secondary" id="password" name="password" placeholder="Password" >
              </div>
              <div class="form-group d-flex justify-content-between">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" checked="" id="rememberMeCheck">
                  <label class="custom-control-label" for="rememberMeCheck">Remember me</label> 
                </div>
                <a class="small-3" href="#">Forgot password?</a>
              </div>
              <div class="form-group mt-6">
                <button type="submit" class="btn btn-block btn-warning btn-login">Login</button>
              </div>
            </form>
            <span class="small">Don't have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#userSignup">Create an account</a></span>
            <div>
              <span class="hr-text small my-6">Or</span>
              <div class="text-center my-6"> 
                <a class="btn btn-circle btn-sm btn-google mr-2" href=""><i class="fab fa-google"></i></a>
                <a class="btn btn-circle btn-sm btn-facebook mr-2" href=""><i class="fab fa-facebook-f"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.sign in -->
    <!-- sign up Modal-->
    <div class="modal fade" id="userSignup" tabindex="-1" role="dialog" aria-labelledby="userSignupTitle" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="userSignupTitle">Sign Up</h5>
            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="input-transparent" action="signup" method="post">
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" id="email" required="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" id="username" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
              <label>Birthday</label>
              <div class="row mx-1">
                <div class="form-group  mx-2">
                  <select class="form-control" name="year" placeholder="year">
                    <option value="2015">Year</option>
                    <?php for ($i=2021; $i > 1990; $i--) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group  mx-2">
                  <select class="form-control" name="month" placeholder="month">
                      <option value="1">Month</option>
                    <?php for ($i=1; $i < 13; $i++) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group  mx-2">
                  <select class="form-control" name="day" placeholder="day">
                      <option value="1">Day</option>
                    <?php for ($i=1; $i < 30; $i++) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group mt-6">
                <button class="btn btn-block btn-warning" type="submit">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.sign up -->

    <script>
      $(document).ready(function () {
        
        $('#form-login').submit(function(e){
          e.preventDefault();

          $.ajax({
            type: "POST",
            url: "/validate",
            data: $(this).serialize(),
            dataType: "json",
            beforeSend:function(){
              $('btn-login').attr('disable','disabled');
              $('btn-login').html('<i class="fa fa-spin fa-spinner"> </i>');

            },
            success: function (response) {
              if(response.error){
                $('.invalid-feedback').css('display','block');
	              $('.invalid-feedback').html(response.error);
              }
              
            },
            error: function(xhr, ajaxOptions, thrownError){
              alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
          });
          return false;
        })

      });
    </script>