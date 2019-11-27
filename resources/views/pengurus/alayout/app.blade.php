<!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    @yield('title'){{-- <title></title> --}}

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="{{asset('plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
    <link href="{{asset('plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/> 
    <link href="{{asset('plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>  
    <link href="{{asset('plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>  
    <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/> 
    <link href="{{asset('plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet" type="text/css"/>    
    <link href="{{asset('plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="{{asset('css/modern.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/green.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
    <script src="{{asset('plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>


</head>
<body class="page-header-fixed">
    <div class="overlay"></div>

    <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
            </span>
        </div>
    </form>

    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <div class="logo-box">
                    <a href="{{route('ViewPengurusDashboard')}}" class="logo-text"><span>Pengurus</span></a>
                </div>

                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>        
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <span class="user-name">Pengurus<i class="fa fa-angle-down"></i></span>
                                    <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                    <li role="presentation"><a href="/signout"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/signout" class="log-out waves-effect waves-button waves-classic">
                                    <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- sidebar --}}
        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <div class="sidebar-header">
                    <div class="sidebar-profile">
{{--                             <div class="sidebar-profile-image">
                                <img src="assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                            </div> --}}
                            <div class="sidebar-profile-details">
                                <span>Pengurus<br><small>UKM Picker</small></span>
                            </div>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">

                        <li class="
                        {{ (request()->routeIs(

                            'ViewPengurusDashboard'

                            )) ? 'active' : '' }}
                            ">
                            <a href="{{route('ViewPengurusDashboard')}}" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon-home"></span>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="
                        {{ (request()->routeIs(

                            'ViewPengurusShowUkm'

                            )) ? 'active' : '' }}
                            ">
                            <a href="{{route('ViewPengurusShowUkm')}}" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon-briefcase"></span>
                                <p>UKM</p>
                            </a>
                        </li>

                        <li class="
                        {{ (request()->routeIs(

                            'ViewPengurusShowMahasiswa'

                            )) ? 'active' : '' }}
                            ">
                            <a href="{{route('ViewPengurusShowMahasiswa')}}" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon-education"></span>
                                <p>Mahasiswa</p>
                            </a>
                        </li>

                        <li class="
                        {{ (request()->routeIs(

                            'ViewPengurusShowEditProfile'

                            )) ? 'active' : '' }}
                            ">
                            <a href="{{route('ViewPengurusShowEditProfile')}}" class="waves-effect waves-button">
                                <span class="menu-icon glyphicon glyphicon-user"></span>
                                <p>Edit Profile</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <
            {{-- /sidebar --}}


            <div class="page-inner">

                {{-- breadcumb --}}
                <div class="page-title">

                 @yield('title-breadcumb-1'){{-- <h3></h3> --}}

                 <div class="page-breadcrumb">
                    <ol class="breadcrumb">

                        @yield('title-breadcumb-2')
                        {{-- <li><a href="#">Layouts</a></li>
                        <li class="active">Blank Page</li> --}}

                    </ol>
                </div>
            </div>
            {{-- /breadcumb --}}

            <div id="main-wrapper">
                @yield('konten')
                {{-- <div class="row">
                </div> --}}
            </div>

            {{-- footer --}}
            <div class="page-footer">
                <p class="no-s">2019 &copy; UKM Picker.</p>
            </div>
            {{-- /footer --}}

        </div>
    </main>

    <div class="cd-overlay"></div>


    <!-- Javascripts -->
    <script src="{{asset('plugins/jquery/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('plugins/pace-master/pace.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-blockui/jquery.blockui.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
    <script src="{{asset('plugins/uniform/jquery.uniform.min.js')}}"></script>
    <script src="{{asset('plugins/offcanvasmenueffects/js/classie.js')}}"></script>
    <script src="{{asset('plugins/offcanvasmenueffects/js/main.js')}}"></script>
    <script src="{{asset('plugins/waves/waves.min.js')}}"></script>
    <script src="{{asset('plugins/3d-bold-navigation/js/main.js')}}"></script>
    <script src="{{asset('js/modern.min.js')}}"></script>

    <script src="{{asset('js/pages/table-data.js')}}"></script>
    <script src="{{asset('plugins/datatables/js/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
    <script src="{{asset('plugins/jquery-mockjax-master/jquery.mockjax.js')}}"></script>
    <script src="{{asset('plugins/moment/moment.js')}}"></script>

    
</body>
</html>