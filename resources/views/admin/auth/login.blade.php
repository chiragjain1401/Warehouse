<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from warehouse-admin-dashboard.multipurposethemes.com/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:59:26 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://warehouse-admin-dashboard.multipurposethemes.com/images/favicon.ico">

    <title>Deposito Admin - Log in </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">
    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('assets/toastr/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/skin_color.css')}}">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to continue to WareHouse Dashboard.</p>
							</div>
							<div class="p-40">
								<form action="{{route('admin.login')}}" method="post">
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" name="email" class="form-control ps-15 bg-transparent" placeholder="Username">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                      @endif
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>

										<div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>

										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>

									  </div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="auth_register.html" class="text-warning ms-5">Sign Up</a></p>
								</div>
							</div>
						</div>
						{{--<div class="text-center">
						  <p class="mt-20 text-white">- Sign With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>
						</div>--}}
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('toastr/js/toastr.min.js') }}" type="text/javascript"></script>
	<script src="{{asset('js/vendors.min.js')}}"></script>
	<script src="{{asset('js/pages/chat-popup.js')}}"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>
    <script type="text/javascript">
        @if(session()->has('error'))
                toastr.error("", "{{ session()->get('error')}}", {
                            positionClass: "toast-top-right",timeOut: 5000,
                            closeButton: !0,debug: !1,newestOnTop: !0,
                            progressBar: !0,preventDuplicates: !0,onclick: null,
                            showDuration: "300",hideDuration: "1000",
                            extendedTimeOut: "1000",showEasing: "swing",
                            hideEasing: "linear",showMethod: "fadeIn",
                            hideMethod: "fadeOut",tapToDismiss: !1
                        })
            @endif
            @if(session()->has('success'))
                toastr.success("", "{{ session()->get('success')}}", {
                            timeOut: 5000,closeButton: !0,
                            debug: !1,newestOnTop: !0,
                            progressBar: !0,positionClass: "toast-top-right",
                            preventDuplicates: !0,onclick: null,
                            showDuration: "300",hideDuration: "1000",
                            extendedTimeOut: "1000",showEasing: "swing",
                            hideEasing: "linear",showMethod: "fadeIn",
                            hideMethod: "fadeOut",tapToDismiss: !1
                        })
            @endif
            function noBack(){window.history.forward()}
            noBack();
            window.onload=noBack;
            window.onpageshow=function(evt){if(evt.persisted)noBack()}
            window.onunload=function(){void(0)}

            $(".toggle-password").click(function() {

          $(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
    </script>
</body>

<!-- Mirrored from warehouse-admin-dashboard.multipurposethemes.com/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:59:27 GMT -->
</html>
