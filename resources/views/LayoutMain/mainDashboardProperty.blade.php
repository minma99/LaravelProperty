﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Property Web site Kurdistan">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">
    @include('Layout.mainCssLinks')
    @include('Layout.mainJSLinks')
    <script src="{{asset('myJS/myJs.js')}}"></script>
    <title>Property Manager Admin - Dashboard</title>
    <style>
      /* CSS to handle the sidebar state */
      .main-sidebar.active {
        /* properties to show the sidebar */
        left: 0; /* Adjust as needed to bring the sidebar into view */
      }
      
      .main-sidebar {
        /* properties to hide the sidebar */
        left: -250px; /* Adjust as needed to move the sidebar out of view */
        transition: left 0.3s; /* This creates a smooth sliding effect */
      }

      .main-header.avtive{
        left:250px;
      }
      .main-header{
        left: 0;
      }

      .content-wrapper.active{
        left:0;
      }

      .content-wrapper{
        left:-250px;
      }

      </style>
     
  </head>

<body class="hold-transition skin-info-light sidebar-mini">
<div class="wrapper">

  
  
  <!-- Left side column. contains the logo and sidebar -->
 @include('LayoutMain.LeftSideBarNew')

 <header class="main-header active" id="main-header">
  <!-- Logo -->
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
  <div>
    <!-- Your button code -->
    <a href="javascript:void(0);" class="sidebar-toggle" onclick="toggleSidebar()" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
  </div>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
    
    <li class="search-box">
          <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
          <form class="app-search" style="display: none;">
              <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
    </form>
        </li>	
    <!-- User Account-->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="images/compony_logo.jpg" class="user-image rounded-circle" alt="User Image">
          </a>
          <ul class="dropdown-menu animated flipInY">
            <!-- User image -->
            <li class="user-header bg-img" style="background-image: url(images/compony_logo.jpg)" data-overlay="3">
        <div class="flexbox align-self-center">					  
          <img src="images/compony_logo.jpg" class="float-left rounded-circle" alt="User Image">					  
        <h4 class="user-name align-self-center">
          <span>Samuel Brus</span>
          <small>samuel@gmail.com</small>
        </h4>
        </div>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
          <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
        <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
        <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
        <div class="dropdown-divider"></div>
        <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
            </li>
          </ul>
        </li>		
    
        <!-- Messages -->
        <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="mdi mdi-email"></i>
          </a>
          <ul class="dropdown-menu animated fadeInDown">
      
            <li class="header">
      <div class="bg-img text-white p-20" style="background-image: url(images/user-info.jpg)" data-overlay="5">
        <div class="flexbox">
          <div>
            <h3 class="mb-0 mt-0">5 New</h3>
            <span class="font-light">Messages</span>
          </div>
          <div class="font-size-40">
            <i class="mdi mdi-email-alert"></i>
          </div>
        </div>
      </div>
      </li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu sm-scrol">
                <li><!-- start message -->
                  <a href="#">
                    <div class="pull-left">
                      <img src="images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                    </div>
                    <div class="mail-contnet">
                       <h4>
                        Lorem Ipsum
                        <small><i class="fa fa-clock-o"></i> 15 mins</small>
                       </h4>
                       <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                  </a>
                </li>
                <!-- end message -->
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                    </div>
                    <div class="mail-contnet">
                       <h4>
                        Nullam tempor
                        <small><i class="fa fa-clock-o"></i> 4 hours</small>
                       </h4>
                       <span>Curabitur facilisis erat quis metus congue viverra.</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                    </div>
                    <div class="mail-contnet">
                       <h4>
                        Proin venenatis
                        <small><i class="fa fa-clock-o"></i> Today</small>
                       </h4>
                       <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                    </div>
                    <div class="mail-contnet">
                       <h4>
                        Praesent suscipit
                      <small><i class="fa fa-clock-o"></i> Yesterday</small>
                       </h4>
                       <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                    </div>
                    <div class="mail-contnet">
                       <h4>
                        Donec tempor
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                       </h4>
                       <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer">				  
        <a href="#" class="text-white bg-info">See all e-Mails</a></li>
          </ul>
        </li>
        <!-- Notifications -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="mdi mdi-bell"></i>
          </a>
          <ul class="dropdown-menu animated fadeInDown">
      
      <li class="header">
      <div class="bg-img text-white p-20" style="background-image: url(images/user-info.jpg)" data-overlay="5">
        <div class="flexbox">
          <div>
            <h3 class="mb-0 mt-0">7 New</h3>
            <span class="font-light">Notifications</span>
          </div>
          <div class="font-size-40">
            <i class="mdi mdi-message-alert"></i>
          </div>
        </div>
      </div>
      </li>
      
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu sm-scrol">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#" class="text-white bg-danger">View all</a></li>
          </ul>
        </li>
        <!-- Tasks-->
        <li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="mdi mdi-bulletin-board"></i>
          </a>
          <ul class="dropdown-menu animated fadeInDown">
      
      <li class="header">
      <div class="bg-img text-white p-20" style="background-image: url(images/user-info.jpg)" data-overlay="5">
        <div class="flexbox">
          <div>
            <h3 class="mb-0 mt-0">6 New</h3>
            <span class="font-light">Tasks</span>
          </div>
          <div class="font-size-40">
            <i class="mdi mdi-bulletin-board"></i>
          </div>
        </div>
      </div>
      </li>
      
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu sm-scrol">
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Lorem ipsum dolor sit amet
                      <small class="pull-right">30%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-danger" style="width: 30%" role="progressbar"
                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">30% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Vestibulum nec ligula
                      <small class="pull-right">20%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-info" style="width: 20%" role="progressbar"
                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Donec id leo ut ipsum
                      <small class="pull-right">70%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-success" style="width: 70%" role="progressbar"
                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">70% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Praesent vitae tellus
                      <small class="pull-right">40%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-warning" style="width: 40%" role="progressbar"
                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">40% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Nam varius sapien
                      <small class="pull-right">80%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-primary" style="width: 80%" role="progressbar"
                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">80% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Nunc fringilla
                      <small class="pull-right">90%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-info" style="width: 90%" role="progressbar"
                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">90% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
              </ul>
            </li>
            <li class="footer"><a href="#" class="text-white bg-warning">View all tasks</a></li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper active" id="content-wrapper">
    <!-- Content Header (Page header) -->	  

    <!-- Main content -->
  <section class="content">
	  
		
		  @yield('PagesContent')
		
		  <!-- /.box -->
		  
			
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="#">Version Stie:1.0.0</a>
		  </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Version Application:1.0.0</a>
        </li>
		</ul>
    </div>
	  &copy; 2024 <a href="#">Property Manager</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
	  
	<div class="rpanel-title"><span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>  
    <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Tasks</a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">General</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          
          
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-success"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	  
		
	
</body>
</html>
