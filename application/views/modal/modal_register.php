    <!-- sign up Modal-->
    <div class="modal fade" id="userSignup" tabindex="-1" role="dialog" aria-labelledby="userSignupTitle" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header border-secondary">
            <h5 class="modal-title" id="userSignupTitle">Sign Up</h5>
            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="validatereg"  method="post" class="input-transparent form-register" >
              <div class="form-group">
                <input type="email" class="form-control  border-secondary" name="email-reg" placeholder="Email" id="email-reg">
                <div class="invalid-feedback email-error-reg"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control  border-secondary" name="username-reg" placeholder="Username" id="username-reg">
                <div class="invalid-feedback username-error-reg"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control  border-secondary" name="password-reg" placeholder="Password" id="password-reg">
                <div class="invalid-feedback password-error-reg"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control  border-secondary" name="password-reg2" placeholder="Confirm Password" id="password2">
                <div class="invalid-feedback password-error2"></div>
              </div>
              <div class="form-group mt-6">
                <button  type="submit" class="btn btn-block btn-warning btn-register">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.sign up -->

    <script>
      $(document).ready(function () {
        
        $('.form-register').submit(function(e){
          e.preventDefault();

          $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: $(this).serialize(),
            dataType: "json",
            beforeSend:function(){
              $('.btn-register').attr('disable','disabled');
              $('.btn-register').html('<i class="fa fa-spin fa-spinner"> </i>');
            },
            complete: function() {
              $('.btn-register').removeAttr('disable','disabled');
              $('.btn-register').html('Register');
            },
            success: function (response) {
              if(response.error){
                if (response.error.email) {
                  $("#email-reg").addClass('is-invalid');
                  $('.email-error-reg').html(response.error.email); 
                }else{
                  $("#email-reg").removeClass('is-invalid');
                  $('.email-error-reg').html(''); 
                }
                if (response.error.username) {
                  $("#username-reg").addClass('is-invalid');
                  $('.username-error-reg').html(response.error.username); 
                }else{
                  $("#username-reg").removeClass('is-invalid');
                  $('.username-error-reg').html(''); 
                }
                if (response.error.password){
                  $("#password-reg").addClass('is-invalid');
                  $('.password-error-reg').html(response.error.password);
                }else{
                  $("#password-reg").removeClass('is-invalid');
                  $('.password-error-reg').html('');
                }

                if (response.error.password2){
                  $("#password2").addClass('is-invalid');
                  $('.password-error2').html(response.error.password2);
                }else{
                  $("#password2").removeClass('is-invalid');
                  $('.password-error2').html('');
                }
              }else{
               alert(response.success);
               $('#userSignup').modal('hide');
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