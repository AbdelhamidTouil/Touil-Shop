
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
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
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
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
          <li class="nav-item {{ Request::is('dashboard') ? 'active':''}}">
            <a class="nav-link" href="">
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
          <li class="nav-item {{ Request::is('dashboard') ? 'active':''}} ">
            <a class="nav-link" href="" >
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
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          

                
                <table align="center" style="margin-top: 20px;">
                    <tr>
                   
                    <th style="padding: 30px;">Name</th>
                    <th style="padding: 30px;">Email</th>
                    <th style="padding: 30px;">image</th>
                    <th style="padding: 30px;">Action</th>
                </tr>
                @foreach ($users as $users)
                    
              
                <tr align="center">
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td><img width="70px" height="70px" src="https://www.iconpacks.net/icons/2/free-user-icon-3297-thumb.png" alt="" ></td>
                   
                    @if($users->usertype == 0)
                    <td><a href="{{ route('DeleteUser',['id'=>$users->id]) }}"><button class="btn btn-danger">Delete</button></a></td>
                    
                    @else
                    <td><a href=""><button class="btn btn-danger">Not Alowed</button></a></td>
                    
                    @endif
                  
                </tr> 
                
                @endforeach
                </table>
            
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

