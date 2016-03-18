<!DOCTYPE html>
<html>
   <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    {!! Html::style( asset('/backend/bootstrap/css/bootstrap.min.css') ) !!} 
    
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    {!! Html::style( asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ) !!} 
    
    <!-- Theme style    -->
    {!! Html::style( asset('backend/dist/css/AdminLTE.min.css') ) !!} 
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load.         -->
    {!! Html::style( asset('backend/dist/css/skins/_all-skins.min.css') ) !!} 
       
    {!! Html::script( asset('backend/plugins/jQuery/jQuery-2.1.4.min.js') ) !!}
    {!! Html::script( asset('backend/plugins/datepicker/bootstrap-datepicker.js') ) !!}

    
    {!! Html::style( asset('backend/plugins/datepicker/datepicker3.css') ) !!} 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
              </li>
              <li class="user user-menu">
                  <a href="{{ url('advisor/logout') }}" class="dropdown-toggle">
                    <span class="hidden-xs">Log out</span>
                  </a>
              </li>
              <!-- Control Sidebar Toggle Button -->
             <!--  <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
            </ul>
          </div>

        </nav>
      </header>
      
      
      @if (Auth::user())
        @if(Auth::user()->is_admin == 1)
              @section('left_nav_template')
              <!-- Left side column. contains the logo and sidebar -->
              <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
             
                  <!-- sidebar menu: : style can be found in sidebar.less -->
                  <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview">
                      <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="pull-right"></i>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('/invite') }}">
                        <i class="fa fa-envelope"></i> <span>Invite</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('/advisor') }}">
                        <i class="fa fa-envelope"></i> <span>Manage Advisor</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('advisor/manage_student')}}">
                        <i class="fa fa-envelope"></i> <span>Manage Student</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('advisor/manage_volunteer_hour') }}">
                        <i class="fa fa-envelope"></i> <span>Manage Volunteer Hour</span>
                      </a>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Manage Service</span> <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <li>
                          <a href="{{ url('/setting') }}">
                            <i class="fa fa-envelope"></i> <span>Hour Requirement</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('/service_type') }}">
                            <i class="fa fa-envelope"></i> <span>Service Type</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Setting</span> <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <li class="active"><a href="{{ url('/schoolYear') }}"><i class="fa fa-circle-o"></i>Establish School Year</a></li>
                        <li><a href="{{ url('/advisor/notification') }}"><i class="fa fa-circle-o"></i> Send Notification</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{ url('advisor', [Auth::user()->adv_id]) }}">
                        <i class="fa fa-envelope"></i> <span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('advisor/logout') }}">
                        <i class="fa fa-envelope"></i> <span>Logout</span>
                      </a>
                    </li>
                  </ul>
                </section>
                <!-- /.sidebar -->
              </aside>
              @show
        @else
              @section('left_nav_template')
              <!-- Left side column. contains the logo and sidebar -->
              <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
             
                  <!-- sidebar menu: : style can be found in sidebar.less -->
                  <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview">
                      <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="pull-right"></i>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('advisor/manage_volunteer_hour') }}">
                        <i class="fa fa-envelope"></i> <span>Manage Volunteer Hour</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('advisor/manage_student')}}">
                        <i class="fa fa-envelope"></i> <span>Manage Student</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('advisor', [Auth::user()->adv_id]) }}">
                        <i class="fa fa-envelope"></i> <span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ url('advisor/logout') }}">
                        <i class="fa fa-envelope"></i> <span>Logout</span>
                      </a>
                    </li>
                  </ul>
                </section>
                <!-- /.sidebar -->
              </aside>
              @show  
        @endif
      @endif
      
      @section('body_template')  
   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Dash
            <small>Version 2.0</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">       

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- MAP & BOX PANE -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Create Advisor</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <div class="pad col-md-6">
        
                      </div>
                    </div><!-- /.col -->
               
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      @show
      
      @section('footer_template')
      <!-- footer start -->  
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b></b>
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="">Eservice Tracker</a>.</strong> All rights reserved.
      </footer>
      <!-- footer end -->
      @show
      
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class='control-sidebar-menu'>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class='control-sidebar-menu'>
              <li>
                <a href='javascript::;'>
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href='javascript::;'>
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href='javascript::;'>
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-waring pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href='javascript::;'>
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->

          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked />
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right" />
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    {!! Html::script( asset('backend/plugins/jQuery/jQuery-2.1.4.min.js') ) !!}
    <!-- Bootstrap 3.3.2 JS -->    
    {!! Html::script( asset('backend/bootstrap/js/bootstrap.min.js') ) !!}
    <!-- FastClick -->
    {!! Html::script( asset('backend/plugins/fastclick/fastclick.min.js') ) !!}
    <!-- AdminLTE App -->
    {!! Html::script( asset('backend/dist/js/app.min.js') ) !!}
    <!-- Sparkline -->
    {!! Html::script( asset('backend/plugins/sparkline/jquery.sparkline.min.js') ) !!}
    <!-- jvectormap -->
    {!! Html::script( asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ) !!}
    {!! Html::script( asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ) !!}
    <!-- SlimScroll 1.3.0 -->
    {!! Html::script( asset('backend/plugins/slimScroll/jquery.slimscroll.min.js') ) !!}
    <!-- ChartJS 1.0.1 -->
    {!! Html::script( asset('backend/plugins/chartjs/Chart.min.js') ) !!}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {!! Html::script( asset('backend/dist/js/pages/dashboard2.js') ) !!}
    <!-- AdminLTE for demo purposes -->

    {!! Html::script( asset('backend/dist/js/demo.js') ) !!} 
  </body>
</html>