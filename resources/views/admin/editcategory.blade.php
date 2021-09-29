
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
            <a class="nav-link" href="">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
    
      
          <li class="nav-item {{ Request::is('adminproduct') ? 'active':''}} ">
            <a class="nav-link" href="">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Produacts</span>
            </a>
          </li>
       <!-- start User -->
          <li class="nav-item {{ Request::is('ShowUser') ? 'active':''}} ">
            <a class="nav-link" href="" >
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">User Pages</span>
            </a>
          </li>
       <!-- end User -->

         <!-- start Category -->
         <li class="nav-item {{ Request::is('admincategory') ? 'active':''}} ">
            <a class="nav-link" href="" >
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
            <div>
                <form action="{{ route('updatecategory',['id'=>$categories->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
        
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" required  value="{{ $categories->name }}">
                    </div>
        
                    <div>
                        <label for="slug">slug</label>
                        <input type="text" name="slug" required value="{{ $categories->slug }}">
                    </div>
        
                    <div>
                        <label for="description">description</label>
                        <input type="text" name="description" required value="{{ $categories->description }}">
                    </div>
        
                    <div>
                      <label for="image"> Old image</label>
                      <img width="50px;" height="50px;" src="/assets/categorie_image/{{ $categories->image }}" alt="{{ $categories->name }}">
                  </div>
                    <div>
                        <label for="image">New Image</label>
                        <input type="file" name="image">
                    </div>
        
                    <div>
                        <label for="status">status</label>
                        <input type="checkbox" name="status"  value="{{ $categories->status }}" >
                    </div>
        
                    <div>
                        <label for="popular">popular</label>
                        <input type="checkbox" name="popular" required value="{{ $categories->popular }}" >
                    </div>
        
                    <div>
                        <label for="meta_title">meta_title</label>
                        <input type="text" name="meta_title" required value="{{ $categories->meta_title }}" >
                    </div>
        
                    <div>
                        <label for="meta_descrip">meta_descrip</label>
                        <input type="text" name="meta_descrip" required  value="{{ $categories->meta_descrip }}">
                    </div>
        
                    <div>
                        <label for="meta_keyword">meta_keyword</label>
                        <input type="text" name="meta_keyword" required  value="{{ $categories->meta_keyword }}">
                    </div>
        
                    <div>
                        
                        <input type="submit" value="Update" >
                    </div>
                
        
                </form>
            </div>
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

