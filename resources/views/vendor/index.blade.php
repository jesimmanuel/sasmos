<!doctype html>
<html lang="en" data-bs-theme="blue-theme">


<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/auth-basic-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 09:31:43 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Sasmos::</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png">

  <!-- loader -->
  <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/js/pace.min.js') }}"></script>

  <!-- plugins -->
  <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/metisMenu.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/mm-vertical.css') }}">

  <!-- bootstrap css -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

  <!-- main css -->
  <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/blue-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">

  </head>

  <body>

    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
      <div class="container-fluid my-5 my-lg-0">
        <div class="row">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
            <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
              <div class="card-body p-5">
                <img src="{{ asset('assets/images/logo-icon.png') }}" class="mb-4" width="85" height="50" alt="Sasmos Logo">
                <h3><strong>Sasmos</strong></h3>
                                  <h5 class="fw-bold">Signin</h5>
{{--                  <p class="mb-0">Enter your credentials to login your account</p>--}}

                  <div class="form-body my-5">
										<form id="selectdate" name="selectdate" method="post" enctype="multipart/form-data"  action="{{url('/vendor/checkuser')}}">
                            {{ csrf_field() }}
                                            @if(session()->has('Invalid'))
                                                <div class="col-12" id="errorid">
                                                    <span ><font color="red" size="4">Invalid Credential</font></span>
                                                </div>
                                            @endif
                            @if(session()->has('NotActive'))
                            <div class="col-12" id="errorid">
                             <span ><font color="red" size="3">Account Inactive, Wait for Approval</font></span>
                            </div>
                              @endif
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">UserName</label>
												<input type="text" class="form-control" id="username" name="username" autocomplete="off" value="{{ old('username') }}" placeholder="User Name...">
											              <span ><font color="red">{{ $errors->first('username') }}</font></span>
                      </div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" autocomplete="off" name="pw"  value="{{ old('pw') }}" placeholder="Enter Password">
                          <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>

												</div>
                        <span ><font color="red">{{ $errors->first('pw') }}</font></span>
											</div>
                      <div class="col-12" style="height:10px;"></div>
											<div class="col-md-6">
												{{-- <div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div> --}}
											</div>
                                            <div style="height: 10px;"></div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-grd-primary">Login</button>
												</div>
											</div>
                                            <div style="height: 10px;"></div>
											<div class="col-12">
												<div class="text-start">
													<p class="mb-0">Don't have an account yet? <a href="signup">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>

                  <div class="separator section-padding">
                    <div class="line"></div>
                    <p class="mb-0 fw-bold">OR SIGN IN WITH</p>
                    <div class="line"></div>
                  </div>

                  <div class="d-flex gap-3 justify-content-center mt-4">
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-danger">
                      <i class="bi bi-google fs-5 text-white"></i>
                    </a>
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-deep-blue">
                      <i class="bi bi-facebook fs-5 text-white"></i>
                    </a>
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-info">
                      <i class="bi bi-linkedin fs-5 text-white"></i>
                    </a>
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-royal">
                      <i class="bi bi-github fs-5 text-white"></i>
                    </a>
                  </div>

              </div>
            </div>
           </div>
        </div><!--end row-->
     </div>
    </div>
    <!--authentication-->

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('#errorid').delay(2000).fadeOut();

    });</script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script>
      $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("bi-eye-slash-fill");
            $('#show_hide_password i').removeClass("bi-eye-fill");
          } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("bi-eye-slash-fill");
            $('#show_hide_password i').addClass("bi-eye-fill");
          }
        });
      });
    </script>

  </body>

<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/auth-basic-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 09:31:43 GMT -->
</html>
