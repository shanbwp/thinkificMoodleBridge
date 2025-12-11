<!DOCTYPE html>
<html lang="en"> 
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>{{$gs->meta_title}}</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('assets/images/setting/'.$gs->fav_icon)}}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap.min.css')}}"> 
      <!-- Feathericon CSS -->      
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
                     <img class="img-fluid" src="{{asset('assets/images/setting/'.$gs->logo)}}" alt="Logo">
                  </div>
                  <div class="login-right">
                     <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        <!-- Form -->
                        <form action="{{route('store-login')}}" method="post" >
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
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /Main Wrapper -->
      <!-- jQuery -->
      <script src="{{asset('assets_admin/js/jquery-3.2.1.min.js')}}"></script> 
      <script src="{{asset('assets_admin/js/bootstrap.min.js')}}"></script> 
      <!-- Mask JS -->      
   </body>
 </html>