

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.adminCss')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html">Touil Shop</a>
  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        
       
        <ul class="navbar-nav navbar-nav-right">
        <!-- start notificatipn -->
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="" data-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
          </li>
           <!-- end notificatipn -->

            <!-- start profileImage -->
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="assets2/images/faces/face28.jpg" alt="profile"/>
            </a>
          </li>
           <!-- end profileImage -->
        </ul>
       
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item {{ Request::is('a') ? 'active':''}}">
            <a class="nav-link" href="{{ route('a') }}">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
    
      
          <li class="nav-item {{ Request::is('adminproduct') ? 'active':''}} ">
            <a class="nav-link" href="{{ route('adminproduct') }}">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Produacts</span>
            </a>
          </li>
       <!-- start User -->
          <li class="nav-item {{ Request::is('ShowUser') ? 'active':''}} ">
            <a class="nav-link" href="{{ route('ShowUser') }}" >
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">User Pages</span>
            </a>
          </li>
       <!-- end User -->

         <!-- start Category -->
         <li class="nav-item {{ Request::is('admincategory') ? 'active':''}} ">
            <a class="nav-link" href="{{ route('admincategory') }}" >
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
       <!-- end Category -->

         <!-- start contact -->
         <li class="nav-item {{ Request::is('contact') ? 'active':''}} ">
          <a class="nav-link" href="{{ route('contact') }}" >
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">Contact</span>
          </a>
        </li>
     <!-- end contact -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        
        </div>
       
        <!-- content-wrapper ends -->
     @include('main.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
 @include('admin.adminScript')
  <!-- End custom js for this page-->
</body>

</html>

