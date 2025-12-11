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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/setting/' . $gs->fav_icon) }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/feathericon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/plugins/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}">

</head> 
<body>
    <div class="main-wrapper">
        <div class="header"> 
            <!-- Logo -->
            <div class="header-left" style="background-color: #2181d6;">
                <a href="{{ route('user-dashboard') }}" class="logo">
                    <img src="{{ asset('assets/images/setting/' . $gs->logo) }}" alt="Logo">
                </a>
                <a href="{{ route('user-dashboard') }}" class="logo logo-small">
                    <img src="{{ asset('assets/images/setting/' . $gs->logo) }}" alt="Logo" width="30"
                        height="30">
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

                        <li class="submenu">
                            <a href="#"> <span> Upload <span data-header-item-icon
                                        class="inline-block ml-2 text-secondary">+</span></a></span>
                            <ul style="display: none;">
                                <li><a class="{{ request()->is('user/track-create*') ? 'active' : '' }}"
                                        href="{{ route('track-create') }}"> YouTube Content ID</a></li>
                                <li><a class="{{ request()->is('user/album-create*') ? 'active' : '' }}"
                                        href="{{ route('album-create') }}"> YouTube Premium</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"> <span> Pendings <span data-header-item-icon
                                        class="inline-block ml-2 text-secondary">+</span></a></span>
                            <ul style="display: none;">
                                <li><a class="{{ request()->is('user/track-list*') ? 'active' : '' }}"
                                        href="{{ route('track-list') }}"> YouTube Content ID </a></li>
                                <li><a class="{{ request()->is('user/album-premium*') ? 'active' : '' }}"
                                        href="{{ route('album-premium') }}"> YouTube Premium</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"> <span> Submitted <span data-header-item-icon
                                        class="inline-block ml-2 text-secondary">+</span></a></span>
                            <ul style="display: none;">
                                <li><a class="{{ request()->is('user/track-submited-list*') ? 'active' : '' }}"
                                        href="{{ route('track-submited-list') }}"> YouTube Content ID </a></li>
                                <li><a class="{{ request()->is('user/album-submited-list*') ? 'active' : '' }}"
                                        href="{{ route('album-submited-list') }}"> YouTube Premium</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"> <span> Earnings <span data-header-item-icon
                                        class="inline-block ml-2 text-secondary">+</span></a> </span>
                            <ul style="display: none;">
                                <li><a class="{{ request()->is('user/user-earning-summary') ? 'active' : '' }}"
                                        href="{{ route('user-earning-summary') }}">Summary </a></li>
                                <li><a class="{{ request()->is('user/user-earning-standard') ? 'active' : '' }}"
                                        href="{{ route('user-earning-standard') }}">Standard</a></li>
                                <!-- <li><a class="{{ request()->is('user/user-payment') ? 'active' : '' }}" href="{{ route('user-payment') }}">Payments</a></li> -->
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> Claim Requests <span data-header-item-icon
                                        class="inline-block ml-2 text-secondary">+</span></a></span>
                            <ul style="display: none;">
                                <li><a class="{{ request()->is('user/uclaim-create') ? 'active' : '' }}"
                                        href="{{ route('claim-create') }}"> New Request</a></li>
                                <li><a class="{{ request()->is('user/claim-list') ? 'active' : '' }}"
                                        href="{{ route('claim-list') }}">Submitted Requests</a></li>
                            </ul>
                        </li>
                        <br>
                        <br>
                        <br>

                        <li class style="margin-left: 35px;">

                            <svg class="text-secondary mx-6" width="27" height="27" viewBox="0 0 27 27"
                                fill="none" xmlns="#">
                                <path
                                    d="M23.9721 24.1925C23.8173 23.7137 23.6854 23.2625 23.5265 22.8209C23.019 21.4066 22.3674 20.0765 21.316 18.9933C20.4799 18.1337 19.5052 17.557 18.2801 17.5266C17.4683 17.5059 16.7333 17.7708 16.0197 18.1296C15.0572 18.6153 14.038 18.8043 12.9704 18.7395C12.0671 18.6856 11.2324 18.3973 10.4287 17.9888C9.53342 17.5349 8.59777 17.3872 7.62038 17.6494C6.33738 17.9944 5.41519 18.8443 4.66397 19.9164C3.79967 21.1527 3.3002 22.5657 2.81285 23.9855C2.79131 24.0476 2.78862 24.1152 2.77516 24.1925H23.9721ZM13.3595 26.3684H1.50698C0.875576 26.367 0.448809 26.0469 0.351878 25.4854C0.328992 25.3529 0.337068 25.208 0.363993 25.0783C0.76922 23.1176 1.39389 21.2355 2.3807 19.4997C3.25443 17.9612 4.4028 16.6932 6.01159 15.9426C7.72269 15.1409 9.44188 15.1809 11.1422 15.9826C11.7157 16.2544 12.2852 16.5069 12.9233 16.5745C13.7392 16.6587 14.5119 16.5083 15.2362 16.1261C16.1705 15.6335 17.156 15.3672 18.2074 15.3727C19.7233 15.3796 21.0332 15.9495 22.191 16.9195C23.5992 18.0992 24.4945 19.6488 25.1892 21.339C25.6725 22.5119 26.0414 23.722 26.3025 24.9679C26.4735 25.782 26.0225 26.367 25.2134 26.367C21.2621 26.3684 17.3108 26.3684 13.3595 26.3684Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M18.4669 7.78438C18.4723 4.87436 16.1957 2.52868 13.3591 2.53558C10.5158 2.54248 8.3093 4.87298 8.25141 7.57879C8.18275 10.8517 10.7137 12.9283 13.2353 12.9683C16.1446 13.0152 18.4494 10.6171 18.4669 7.78438ZM6.13912 7.6878C6.07719 3.76086 9.32169 0.431372 13.2703 0.36928C17.2768 0.307189 20.5267 3.56906 20.5725 7.78162C20.6169 11.8935 17.2701 15.1057 13.4318 15.1346C9.42939 15.165 6.12027 11.8576 6.13912 7.6878Z"
                                    fill="currentColor"></path>
                            </svg>
                        </li>
                        <li class="{{ request()->is('user/user-account*') ? 'active' : '' }}">
                            <a href="{{ route('user-account') }}"> <span>Account</span></a>
                        </li>

                        <li class="{{ request()->is('user/user-account*') ? 'active' : '' }}">
                            <a href="{{ route('user-payout-preference-list') }}"> <span>Payout Preferences</span></a>
                        </li>
                        @if (count(Auth::guard('user')->user()->contract) > 0)
                            <li class="{{ request()->is('user/user-account*') ? 'active' : '' }}">
                                <a href="{{ route('user-contract-edit', ['uid' => Auth::guard('user')->user()->id]) }}">
                                    <span>Contract</span></a>
                            </li>
                        @endif
                        <li class="{{ request()->is('user/track-create*') ? 'active' : '' }}">
                            <a href="{{ route('track-create') }}"> <span>Upload</span></a>
                        </li>
                        <li class="">
                            <a href="{{ route('contact') }}"><span>Contact</span></a>
                        </li>
                        <li class="">
                            <a href="{{ route('user-logout') }}"> <span>Logout</span></a>
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

    <script src="{{ asset('assets_admin/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets_admin/js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/mask.js') }}"></script>
    <script src="{{ asset('assets_admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/fullcalendar/jquery.fullcalendar.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#tableId').DataTable();
        });
    </script>
    @yield('scripts')

</body>

</html>
