<!DOCTYPE html>
<html lang="en">
   
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>User - Login</title>
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets_admin/img/favicon.png')}}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap.min.css')}}">
      <!-- Fontawesome CSS -->
      <link rel="stylesheet" href="{{asset('assets_admin/css/font-awesome.min.css')}}">
      <!-- Feathericon CSS -->
      <link rel="stylesheet" href="{{asset('assets_admin/css/feathericon.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets_admin/plugins/morris/morris.css')}}">
      <!-- Select2 CSS -->
      <link rel="stylesheet" href="{{asset('assets_admin/css/select2.min.css')}}">
      <!-- Datetimepicker CSS -->
      <link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap-datetimepicker.min.css')}}">
      <!-- Full Calander CSS -->
      <link rel="stylesheet" href="{{asset('assets_admin/plugins/fullcalendar/fullcalendar.min.css')}}">
      <!-- Datatables CSS -->
      <link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables/datatables.min.css')}}">
      <!-- <link rel="stylesheet" href="assets/plugins/morris/morris.css"> -->
      <!-- Main CSS -->
      <link rel="stylesheet" href="{{asset('assets_admin/css/style.css')}}">
   </head>
   <body>
      <!-- Main Wrapper -->
      <div class="main-wrapper login-body">
         <div class="login-wrapper">
            <div class="container">
               <div class="loginbox">
                  <div class="login-left">
                     <img class="img-fluid" src="{{asset('assets_admin/img/logo-white.png')}}" alt="Logo">
                  </div>
                  <div class="login-right">
                     <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        <!-- Form -->
                        <form action="{{route('user-store-login')}}" method="post" >
                           @csrf
                           <div class="form-group">
                              <input class="form-control" type="email" name="email" placeholder="Email">
                           </div>
                           <div class="form-group">
                              <input class="form-control" type="password" name="password" placeholder="Password">
                           </div>
                           <div class="form-group">
                              <button class="btn btn-primary btn-block" type="submit">Login</button>
                           </div>
                        </form>
                        <!-- /Form -->
                        <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
                         <!-- Social Login
                        <div class="login-or">
                           <span class="or-line"></span>
                           <span class="span-or">or</span>
                        </div>
                       
                        <div class="social-login">
                           <span>Login with</span>
                           <a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
                        </div>
                   /Social Login 
                        <div class="text-center dont-have">Don’t have an account? <a href="">Register</a></div>-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /Main Wrapper -->
      <!-- jQuery -->
      <script src="{{asset('assets_admin/js/jquery-3.2.1.min.js')}}"></script>
      <!-- Bootstrap Core JS -->
      <script src="{{asset('assets_admin/js/popper.min.js')}}"></script>
      <script src="{{asset('assets_admin/js/bootstrap.min.js')}}"></script>
      <!-- Slimscroll JS -->
      <script src="{{asset('assets_admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
      <!-- Form Validation JS -->
      <script src="{{asset('assets_admin/js/form-validation.js')}}"></script>
      <!-- Mask JS -->
      <script src="{{asset('assets_admin/js/jquery.maskedinput.min.js')}}"></script>
      <script src="{{asset('assets_admin/js/mask.js')}}"></script>
      <!-- Select2 JS -->
      <script src="{{asset('assets_admin/js/select2.min.js')}}"></script>
      <!-- Datetimepicker JS -->
      <script src="{{asset('assets_admin/js/moment.min.js')}}"></script>
      <script src="{{asset('assets_admin/js/bootstrap-datetimepicker.min.js')}}"></script>
      <!-- Full Calendar JS -->
      <script src="{{asset('assets_admin/js/jquery-ui.min.js')}}"></script>
      <script src="{{asset('assets_admin/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
      <script src="{{asset('assets_admin/plugins/fullcalendar/jquery.fullcalendar.js')}}"></script>
      <!-- Datatables JS -->
      <script src="{{asset('assets_admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('assets_admin/plugins/datatables/datatables.min.js')}}"></script>	
      <!-- Custom JS -->
      <script  src="{{asset('assets_admin/js/script.js')}}"></script>
   </body>
   <!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/admin/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jan 2021 05:57:26 GMT -->
</html>