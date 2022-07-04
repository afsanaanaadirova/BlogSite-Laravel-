<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 04:12:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Admin Panel</title>
    <!-- This page CSS -->
     <!-- chartist CSS -->
     <link href="{{ asset('admin/assets/node_modules/icheck/skins/all.css') }}" rel="stylesheet">
     <link href="{{ asset('admin/assets/css/style.min.css') }}" rel="stylesheet">
     <link href="{{ asset('admin/assets/css/pages/form-icheck.css') }}" rel="stylesheet">
     <link  href="{{  asset('admin/assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
     <!--Toaster Popup message CSS -->
     <link href="{{  asset('admin/assets/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
     <!-- chartist CSS -->
    <link href="{{  asset('admin/assets/css/morrisjs/morris.css') }}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link  href="{{  asset('admin/assets/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{  asset('admin/assets/css/style.min.css') }}" rel="stylesheet">

    <!-- Dashboard 1 Page CSS -->
    <link href="{{  asset('admin/assets/css/pages/dashboard1.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/pages/contact-app-page.css') }}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('admin/assets/css/pages/footable-page.css') }}" rel="stylesheet">
     <!-- This Page CSS -->
    <link href="{{ asset('admin/assets/css/pages/login-register-lock.css') }}" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="{{  asset('admin/assets/node_modules/summernote/dist/summernote-bs4.css') }}">

   @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">STP Blog Admin Panel</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header" style="text-align: center;">
                    <a class="navbar-brand" href="index.html">
                       <span style="display: block!important;">
                         <!-- dark Logo text -->
                         <img src="{{ asset('images/STP LOGO-05.png') }}" alt="homepage" class="dark-logo"style="width: 84px;height: 74px" />
                         <!-- Light Logo text -->    
                         <img src="{{ asset('images/STP LOGO-05.png') }}"  class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Axtarış..">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle text-white"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle text-white"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle text-white"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu mailbox dropdown-menu-end animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> 
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div class="accordion" id="accordionExample">
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingOne">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      Collapsible Group Item #1
                                                    </button>
                                                  </h5>
                                                </div>
        
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high. 
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingTwo">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      Collapsible Group Item #2
                                                    </button>
                                                  </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingThree">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      Collapsible Group Item #3
                                                    </button>
                                                  </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info text-white">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll--><ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    @guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif

    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
<div class="scroll-sidebar">
    <!-- User Profile-->
    <div class="user-profile">
        <div class="user-pro-body">
            <div>
                <img src="{{ asset('admin/images/users/2.jpg') }}" alt="user-img" class="img-circle" style="width: 66px">
            </div>
            <div class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">{{ Auth::user()->name }}
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu animated flipInY"  style="height: fit-content">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li>
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="ti-layout-media-right-alt"></i>
                    <span class="hide-menu">Lahiyələr</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li>
                        <a href="{{ route('ProjectsForm') }}">Lahiyə Əlavə et</a>
                    </li>
                    <li>
                        <a href="{{ route('ProjectsList') }}">Bütün Lahiyələr</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="ti-layout-media-right-alt"></i>
                    <span class="hide-menu">Faydalı yazılar</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li>
                        <a href="{{ route('BlogForm') }}">Yazı Əlavə et</a>
                    </li>
                    <li>
                        <a href="{{ route('BlogList') }}">Bütün yazılar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="ti-layout-media-right-alt"></i>
                    <span class="hide-menu">Şirkətlər</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li>
                        <a href="{{ route('CompanyForm') }}">Şirkət Əlavə et</a>
                    </li>
                    <li>
                        <a href="{{ route('CompanyList') }}">Bütün Şirkətlər</a>
                    </li>
                </ul>
            </li>
            {{-- <li>
                <a class="waves-effect waves-dark" href="{{ route('logout') }}" aria-expanded="false">
                    <i class="ti-arrow-right"></i>
                    <span class="hide-menu">Çıxış</span>
                </a>
            </li> --}}
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
@endguest
</ul>

            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @yield('back.content')
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2022 AdminPanel
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    {{-- <script  src="{{ asset('admin/assets/node_modules/jquery/dist/jquery.min.js') }}"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script  src="{{ asset('admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script  src="{{ asset('admin/assets/js/perfect-scrollbar.jquery.min.js') }}"></script>
    
   
    <!--Wave Effects -->
    <script  src="{{ asset('admin/assets/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script  src="{{ asset('admin/assets/js/sidebarmenu.js') }}"></script>
  
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script  src="{{ asset('admin/assets/node_modules/raphael/raphael-min.js') }}"></script>
    <script  src="{{ asset('admin/assets/node_modules/morrisjs/morris.min.js') }}"></script>
    <script  src="{{ asset('admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Popup message jquery -->
    <script  src="{{ asset('admin/assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>
    <!-- Chart JS -->
    <script  src="{{ asset('admin/assets/js/dashboard1.js') }}"></script>
    <script  src="{{ asset('admin/assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('admin/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
     <script  src="{{ asset('admin/assets/js/custom.min.js') }}"></script>
     <script  src="{{ asset('admin/assets/node_modules/icheck/icheck.min.js') }}"></script>
     <script  src="{{ asset('admin/assets/node_modules/icheck/icheck.init.js') }}"></script>
    <!--Custom JavaScript -->
    <script  src="{{ asset('admin/assets/node_modules/summernote/dist/summernote-bs4.min.js') }}"></script>

    <script  src="{{ asset('admin/assets/node_modules/moment/moment.js') }}"></script>
    <script  src="{{ asset('admin/assets/node_modules/footable/js/footable.min.js') }}"></script>


  
 
    <!--FooTable init-->
    <script>
          $(function () {
            $('#demo-foo-addrow').footable();
        });
        $(function() {
            $('#editor').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
    
            $('.inline-editor').summernote({
                airMode: true
            });
    
        });
    
        window.edit = function() {
                $(".click2edit").summernote()
            },
            window.save = function() {
                $(".click2edit").summernote('destroy');
            }
        </script>
            <script type="text/javascript">
                $(function() {
                    $(".preloader").fadeOut();
                });
                $(function() {
                    $('[data-bs-toggle="tooltip"]').tooltip()
                });
                // ============================================================== 
                // Login and Recover Password 
                // ============================================================== 
                $('#to-recover').on("click", function() {
                    $("#loginform").slideUp();
                    $("#recoverform").fadeIn();
                });
            </script>
            @yield('js')
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 04:13:37 GMT -->
</html>