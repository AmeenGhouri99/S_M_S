<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->

  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('/admin')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
              <p>
                Front Desk
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fa fa-book nav-icon"></i>
                    <p>Visitor Register</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-database nav-icon"></i>
                    <p>Admission Inquery</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-comments nav-icon"></i>
                      <p>Complaint Register</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-users nav-icon"></i>
                      <p>Family Information</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-user nav-icon"></i>
                      <p>Student Information</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fas fa-sms nav-icon"></i>
                      <p>Instant SMS</p>
                    </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Students
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fa fa-child nav-icon"></i>
                    <p>Active Students</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-database nav-icon"></i>
                    <p>Admission Register</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-money-bill-alt nav-icon"></i>
                      <p>Withdrawal Register</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-file nav-icon"></i>
                      <p>Student Reports</p>
                    </a>
                  </li>

              </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-stamp"></i>
              <p>
                Staff
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fa fa-child nav-icon"></i>
                  <p>Staff List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fa fa-database nav-icon"></i>
                  <p>Staff Allownaces</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-money-bill-alt nav-icon"></i>
                    <p>Salary Deduction</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-file nav-icon"></i>
                    <p>Staff Reports</p>
                  </a>
                </li>
          </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Attendance
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fa fa-stamp nav-icon"></i>
                    <p>Staff Attendance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-child nav-icon"></i>
                    <p>Student Attendance</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-file nav-icon"></i>
                      <p>Attendance Reports</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>
                Classes
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fa fa-book-reader nav-icon"></i>
                  <p>Classes List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Class Timetable</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-list nav-icon"></i>
                    <p>Class Sections</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-file nav-icon"></i>
                    <p>Classes Report</p>
                  </a>
                </li>
          </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-donate"></i>
              <p>
                Fee
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fas fa-database nav-icon" style="color: white"></i>
                  <p>Fee Collection</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="	fas fa-money-check-alt nav-icon"></i>
                  <p>Fee Challans</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-user-minus nav-icon"></i>
                    <p>Fee Concessions</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fas fa-chart-pie nav-icon"></i>
                    <p>Fee Heads</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fas fa-file-invoice-dollar nav-icon"></i>
                    <p>Fee Reports</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fas fa-print nav-icon"></i>
                    <p>Print Fee Slips</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fas fa-hand-holding-usd nav-icon"></i>
                    <p>Advance Fee</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                    <p>Create Fee Slips</p>
                  </a>
                </li>
          </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-money-bill-alt"></i>
              <p>
                Payroll
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fas fa-database nav-icon" style="color: white"></i>
                    <p>Fee Collection</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="	fas fa-money-check-alt nav-icon"></i>
                    <p>Fee Challans</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-user-minus nav-icon"></i>
                      <p>Fee Concessions</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-poll nav-icon"></i>
                      <p>Fee Heads</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-file nav-icon"></i>
                      <p>Fee Reports</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-wallet"></i>
              <p>
                Finance
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fas fa-plus nav-icon" style="color: white"></i>
                    <p>Create Voucher</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="	fas fa-book-open nav-icon"></i>
                    <p>Chart of Accounts</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-book nav-icon"></i>
                      <p>Journel</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-tag nav-icon"></i>
                      <p>Expense</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fas fa-chart-line nav-icon"></i>
                      <p>Income</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fas fa-balance-scale nav-icon"></i>
                      <p>Trial Balance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fas fa-file-invoice-dollar nav-icon"></i>
                      <p>Balance Sheet</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fas fa-file-invoice nav-icon"></i>
                      <p>Income statement</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fas fa-chart-pie nav-icon"></i>
                      <p>Reports</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Curriculm
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fas fa-stream nav-icon" style="color: white"></i>
                    <p>Subjects Lists</p>
                  </a>
                </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Exam
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fas fa-calendar-alt nav-icon" style="color: white"></i>
                    <p>Date Sheet</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="	fas fa-clock nav-icon"></i>
                    <p>Assessments</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-calculator nav-icon"></i>
                      <p>Monthly tests</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-stopwatch nav-icon"></i>
                      <p>Manage Terms </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-calendar-check nav-icon"></i>
                      <p>Final Results</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-file nav-icon"></i>
                      <p>Exams Reports</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-bus"></i>
              <p>
                Transport
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fas fa-restroom nav-icon" style="color: white"></i>
                    <p>Passengers</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="	fas fa-bus nav-icon"></i>
                    <p>Vehicles</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-route nav-icon"></i>
                      <p>Vehicles Routes</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-chart-pie nav-icon"></i>
                      <p>Reports</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Saved Reports
                {{-- <span class="right badge badge-danger">New</span> --}}
                {{-- <i class="fas fa-angle-right right"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Reports/History
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fas fa-sms nav-icon" style="color: white"></i>
                    <p>SMS History</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="	fas fa-poll nav-icon"></i>
                    <p>Fee analytics</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="	fas fa-wallet nav-icon"></i>
                      <p>Payroll analytics</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="	fas fa-funnel-dollar nav-icon"></i>
                      <p>Earning Report</p>
                    </a>
                  </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="{{url('pages/widgets')}}" class="nav-link">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Settings
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fas fa-map nav-icon" style="color: white"></i>
                    <p>Regions List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="	fas fa-stamp nav-icon"></i>
                    <p>Professionals List</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/chartjs.html" class="nav-link">
                      <i class="fas fa-building nav-icon" style="color: white"></i>
                      <p>School List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="	fas fa-clock nav-icon"></i>
                      <p>Auto SMS Alert</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/chartjs.html" class="nav-link">
                      <i class="fas fa-calendar-alt nav-icon" style="color: white"></i>
                      <p>Session Management</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="	fa fa-poll nav-icon"></i>
                      <p>Session Promotion</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="	fa fa-cog nav-icon"></i>
                      <p>Campus Setting</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="	fas fa-stamp nav-icon"></i>
                      <p>User Accounts</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('/logout')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Update log
                {{-- <span class="right badge badge-danger">New</span> --}}
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
