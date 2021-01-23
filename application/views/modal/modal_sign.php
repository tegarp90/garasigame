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
            
            <form action="validate" method="post" class="input-transparent form-login">
              <div class="invalid-feedback"></div>
              <div class="form-group">
                <input type="text" class="form-control border-secondary" id="username" name="username" placeholder="Username">
                <div class="invalid-feedback username-error"></div><div class="invalid-feedback username2-error"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control border-secondary" id="password" name="password" placeholder="Password" >
                <div class="invalid-feedback password-error"></div><div class="invalid-feedback password2-error"></div>
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

    <script>
      $(document).ready(function () {
        
        $('.form-login').submit(function(e){
          e.preventDefault();

          $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: $(this).serialize(),
            dataType: "json",
            beforeSend:function(){
              $('.btn-login').attr('disable','disabled');
              $('.btn-login').html('<i class="fa fa-spin fa-spinner"> </i>');
            },
            complete: function() {
              $('.btn-login').removeAttr('disable','disabled');
              $('.btn-login').html('Login');
            },
            success: function (response) {
              if(response.error){
                if (response.error.username) {
                  $("#username").addClass('is-invalid');
                  $('.username-error').html(response.error.username); 
                }else{
                  $("#username").removeClass('is-invalid');
                  $('.username-error').html(''); 
                }
                if (response.error.password){
                  $("#password").addClass('is-invalid');
                  $('.password-error').html(response.error.password);
                }else{
                  $("#password").removeClass('is-invalid');
                  $('.password-error').html('');
                }
              }else{
                if (response.auths){
                  $("#username").addClass('is-invalid');
                  $('.username-error').html(response.auths); 
                  // alert(response.auths + response.authp);
                }else{
                  $("#username").removeClass('is-invalid');
                  $('.username-error').html(''); 
                } 
                if (response.authp) {
                  $("#password").addClass('is-invalid');
                  $('.password-error').html(response.authp);
                }else{
                  $("#password").removeClass('is-invalid');
                  $('.password-error').html('');
                }
              }
              if(response.success){
                window.location.replace("login"); 
              }

              
            },
            error: function(xhr, ajaxOptions, thrownError){
              alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
          });
          return false;
        });

      });
    </script>