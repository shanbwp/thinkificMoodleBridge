<!DOCTYPE html>
<html lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>
		@yield('title')
	</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/setting/'.$gs->fav_icon)}}">
	<link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets_admin/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets_admin/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets_admin/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{asset('assets_admin/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap-datetimepicker.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets_admin/plugins/fullcalendar/fullcalendar.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables/datatables.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets_admin/css/style.css')}}">
	{{-- toastr --}} 
	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
</head> 
<body>
	<div class="main-wrapper">
		<div class="header"> 
			<!-- Logo -->
			<div class="header-left" style="background-color: white;">
				<a href="{{route('admin')}}" class="logo">
					<img src="{{asset('assets/images/setting/' . $gs->logo)}}" alt="Logo">
				</a>
				<a href="{{route('admin')}}" class="logo logo-small">
					<img src="{{asset('assets/images/setting/' . $gs->logo)}}" alt="Logo" width="30" height="30">
				</a>
			</div>
			<!-- /Logo -->

			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fe fe-text-align-left"></i>
			</a>

			<!-- Mobile Menu Toggle -->
			<a class="mobile_btn" id="mobile_btn">
				<i class="fa fa-bars"></i>
			</a>
			<!-- /Mobile Menu Toggle -->

			<!-- Header Right Menu -->
			<ul class="nav user-menu"> 
				<!-- Notifications -->
				<li class="nav-item dropdown noti-dropdown"> 
				</li>
				<!-- /Notifications --> 
				<!-- User Menu -->
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img"><img class="rounded-circle" width="32" src="{{asset('assets/images/setting/' . $gs->logo)}}" alt="ACR__Helper" /></span>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="{{asset('assets/images/setting/' . $gs->logo)}}" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<h6><a class="navbar-tool-text ml-n1" href="#"></a></h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div>
						<a class="dropdown-item" href="{{route('logout')}}">Logout</a>
					</div>
				</li>
				<!-- /User Menu --> 
			</ul>
			<!-- /Header Right Menu --> 
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title">
							<span>Main</span>
						</li>
						<li class="{{request()->is('admin/dashboard*')?'active':''}}">
							<a href="{{route('admin')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
						</li> 
						<li>
							 <a  class="{{request()->is('admin/user-list')?'active':''}}" href="{{route('user-list')}}"><i class="fe fe-users"></i><span>Users</span></a> 
						</li> 
				        <li>
							<a class="{{request()->is('admin/project-list')?'active':''}}" href="{{route('project-list')}}"> <i class="fe fe-layout"></i><span>Project </span></a>
						</li>  
						<li>
							<a class="{{request()->is('admin/file-list')?'active':''}}" href="{{route('file-list')}}"><i class="fe fe-document"></i> <span>File Request</span> </a>
						</li>  
						<li class="submenu">
							<a href="#"><i class="fa fa-cogs"></i> <span> Front Oprations </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
  
								<li class="{{request()->is('admin/contact*')?'active':''}}">
									<a href="{{route('contact-list')}}"><i class="fa fa-address-book"></i> <span> Contact</span></a>
								</li>   
								<li class="{{request()->is('admin/blog*')?'active':''}}">
									<a href="{{route('blog-list')}}"><i class="fa fa-file-text"></i> <span> Blog</span></a>
								</li>
								<li class="">
									<a href="{{route('subscriber-list')}}"><i class="fe fe-layout"></i> <span> Subscriber</span></a>
								</li> 
							</ul>
						</li>   
						<li class="submenu">
							<a href="#"><i class="fa fa-cogs"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a class="{{request()->is('admin/setting-logo-edit')?'active':''}}" href="{{route('setting-logo-edit')}}"> Logo </a></li>
								<li><a class="{{request()->is('admin/setting-social-link-edit')?'active':''}}" href="{{route('setting-social-link-edit')}}"> Social Links</a></li>
								<li><a class="{{request()->is('admin/setting-seo-edit')?'active':''}}" href="{{route('setting-seo-edit')}}"> SEO Content </a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<div class="page-wrapper">
			<div class="content container-fluid">

				@yield('content')

			</div>
		</div>
	</div>

	<script src="{{asset('assets_admin/js/jquery-3.2.1.min.js')}}"></script> 
	<script src="{{asset('assets_admin/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets_admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>   
	<script src="{{asset('assets_admin/js/select2.min.js')}}"></script>
	<script src="{{asset('assets_admin/js/moment.min.js')}}"></script>
	<script src="{{asset('assets_admin/js/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{asset('assets_admin/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('assets_admin/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
	<script src="{{asset('assets_admin/plugins/fullcalendar/jquery.fullcalendar.js')}}"></script>
	<script src="{{asset('assets_admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets_admin/plugins/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('assets_admin/js/script.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('#tableId').DataTable();
		}); 
	</script>
	{{-- toastr js --}} 
	<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
	{!! Toastr::message() !!} 
	@yield('scripts') 
</body> 
</html>