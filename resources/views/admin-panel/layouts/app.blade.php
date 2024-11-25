<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela!</title>

     <!-- Bootstrap -->
     <link href="{{asset('/admin-panel/css/bootstrap.min.css')}}" rel="stylesheet">
     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet">
     
     <!-- Custom Theme Style -->
     <link href="{{asset('/admin-panel/css/custom.min.css')}}" rel="stylesheet">

    </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
        @include('admin-panel.layouts.sidebar')

        <!-- top navigation -->
        @include('admin-panel.layouts.navbar')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
                   
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('/admin-panel/js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin-panel/js/bootstrap.bundle.min.js')}}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin-panel/js/custom.min.js')}}"></script>
	
  </body>
</html>
