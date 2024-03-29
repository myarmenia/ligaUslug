<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->



    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset( 'admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
  {{-- jquery link --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js')}}"></script>

</head>
<style>
    .notify:hover{
        background:#e2e2e2
    }
    .notify a{
        text-decoration:none;
    }

        .incorrectly{
            border:1px solid red;
        }
        .error_message{
            color:red
        }



</style>
@yield('style')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" >

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="position:fixed;z-index:2">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                </div>
                {{-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> --}}
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            {{-- <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTvelf"
                    aria-expanded="true" aria-controls="collapseTvelf">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Country</span>
                </a>
                <div id="collapseTvelf" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Добавить категорию:</h6>
                        <a class="collapse-item" href="{{route('country.index')}}">Все Country</a>
                        <a class="collapse-item" href="{{route('country.create')}}">Добавить Country</a>

                    </div>
                </div>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Категории</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('category.index')}}">Все категории</a>
                        <a class="collapse-item" href="{{route('category.create')}}">Добавить категорию</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Подкатегория</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{route('subcategory.index')}}">Все подкатегории</a>
                        <a class="collapse-item" href="{{route('subcategory.create')}}">Добавить подкатегорию</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Заказы</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('task.index')}}">Все заказы</a>


                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFifth"
                    aria-expanded="true" aria-controls="collapseFifth">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Пользователи</span>
                </a>
                <div id="collapseFifth" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('user.index')}}">Все Пользователи</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEleven"
                    aria-expanded="true" aria-controls="collapseEleven">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Все заказчики</span>
                </a>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{ route('employer.index')}}">Все заказчики</a>


                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                    aria-expanded="true" aria-controls="collapseSix">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Исполнители</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{route('executor.index')}}">Все исполнители</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSеven"
                    aria-expanded="true" aria-controls="collapseSеven">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Служба поддержки</span>
                </a>
                <div id="collapseSеven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{route('letters.index')}}">Все письмa<br> для службы поддержки</a>
                        <a class="collapse-item" href="{{route('problem-message')}}">Все письмa <br>для модератора</a>
                    </div>
                </div>
            </li>

          <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseeight"
                    aria-expanded="true" aria-controls="collapseeight">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Администраторы</span>
                </a>
                <div id="collapseeight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{route('users.index')}}">Администраторы</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsenine"
                    aria-expanded="true" aria-controls="collapsenine">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Управление ролями</span>
                </a>
                <div id="collapsenine" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('roles.index')}}">Управление ролями</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseten"
                    aria-expanded="true" aria-controls="collapseten">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Форма договора</span>
                </a>
                <div id="collapseten" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('contract.index')}}">Форма договора</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseeleven"
                    aria-expanded="true" aria-controls="collapseten">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Вопросы и ответы</span>
                </a>
                <div id="collapseeleven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('getallquestion')}}">Все вопросы и ответы</a>
                        <a class="collapse-item" href="{{route('anwer')}}">Создать вопрос с ответом</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Addons
            </div> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> --}}

            <!-- Nav Item - Charts -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{asset('admin/img/undraw_rocket.svg') }}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" >

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="position:fixed;width:100%;z-index:1">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->

                                <span class="badge badge-danger badge-counter">{{admin_notification_count()}}+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Уведомления
                                </h6>
                                @if(admin_unreadnotification_new_user_registered()!=0)
                                    <div class='d-flex align-items-center p-3 notify'>
                                        <div>
                                            <div class="icon-circle bg-primary p-3">

                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div  class="ml-2"> <a href="{{route('notification.index')}}">Новые пользователи<span class='badge badge-danger badge-counter mx-2'>{{admin_unreadnotification_new_user_registered()}}+</span></a></div>
                                    </div>
                                @endif
                                @if(admin_unreadnotification_call_back()!=0)
                                    <div class="d-flex align-items-center p-3 notify">
                                        <div>
                                            <div class="icon-circle bg-warning p-3">

                                                <i class="fas fa-phone-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div class="ml-2"> <a href="{{route('callback.index')}}">Обратный звонок<span class="badge badge-danger badge-counter mx-2" id="admin_unreadnotification">{{admin_unreadnotification_call_back()}}+</span></a></div>
                                    </div>
                                @endif
                                @if(admin_unreadnotification_users_give_question()!=0)
                                    <div class="d-flex align-items-center p-3 notify">
                                        <div>
                                            <div class="icon-circle bg-success p-3">

                                                <i class="fas fa-envelope fa-fw text-white"></i>
                                            </div>
                                        </div>
                                        <div class="ml-2"> <a href="{{route('user-question.index')}}">Заданные вопросы<span class="badge badge-danger badge-counter mx-2">{{admin_unreadnotification_users_give_question()}}+</span></a></div>
                                    </div>
                                @endif
                                {{-- working code  --}}
                                @if(admin_unreadnotification_message_for_support()!=0)
                                <div class="d-flex align-items-center p-3 notify">
                                    <div>
                                        <div class="icon-circle bg-success p-3">

                                            <i class="fas fa-envelope fa-fw text-white"></i>
                                        </div>
                                    </div>
                                    <div class="ml-2"> <a href="{{route('admin_support_feedback.index')}}">Служба поддержки<span class="badge badge-danger badge-counter mx-2">{{admin_unreadnotification_message_for_support()}}+</span></a></div>
                                </div>
                                @endif

                                @if(admin_unreadnotification_disagree_price()!=0)
                                <div class="d-flex align-items-center p-3 notify">
                                    <div>
                                        <div class="icon-circle bg-success p-3">

                                            <i class="fas fa-envelope fa-fw text-white"></i>
                                        </div>
                                    </div>
                                    <div class="ml-2"> <a href="{{route('admin_disagree_price.index')}}">Не согласна с ценой<span class="badge badge-danger badge-counter mx-2">{{admin_unreadnotification_disagree_price()}}+</span></a></div>
                                </div>
                                @endif
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('admin/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                {{-- <div class="dropdown-divider"></div> --}}
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                   {{-- <i class="fas fa-sign-out-alt fa-sm fa-fw  text-gray-400"></i> --}}
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                   </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>

                    </ul>
                    {{-- role section started --}}


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                             @yield('content')

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;  Webex2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    {{-- <script src="{{asset('admin/vendor/jquery/jquery.min.js') }}"></script> --}}
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('admin/js/main.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script>

        //   Echo.channel('home')
        //     .listen('NewMessage', (e)=>{
        //         console.log(e)
        //     })
            Echo.channel('messageforadmin')
            .listen('.messageforadmin12', (e)=>{
                console.log(e)

                // let notific=parseInt(document.getElementById('admin_unreadnotification').innerHTML)
                // console.log(notific)
                //  notific+=1
                 let d='<?php echo admin_unreadnotification_call_back() ?>'
                // document.getElementById('admin_unreadnotification').innerHTML=notific+"+"
                console.log(d)
                // admin_unreadnotification_call_back()
            })

            // Echo.private('App.Models.User.' +55)
            //     .notification((RejectTaskExecutorNotification) => {
            //       console.log(notification.message);

            //     //   this.allNotifications.push(notification);
            // });
            // Echo.private('App.Models.User.' +userId)
            //     .notification((NotifyAsTaskExecutor) => {
            //         this.notifications.push(notification);
            //         console.log(notification.task);


            // });
            // function  admin_unreadnotification_call_back(){

            // }
    </script>


</body>

</html>
