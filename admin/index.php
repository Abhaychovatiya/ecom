<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Dashboard</title>
    <!-- CSS Files -->
    <link rel="stylesheet" href="../fa/svg-with-js/css/fa-svg-with-js.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_panel.css">

</head>
<body>
    <!--header section -->
    <header>
        <div class="container-fluid">
            <div class="header-content">
                <!-- sider place of header -->
                <div class="side-head">
                   <span class="text-white"> Admin Panel </span> &nbsp;
                   <i class="fas fa-bars menu-btn text-white"></i>
                   <i class="fas fa-arrow-right text-white close-btn"></i>
                </div>

                
                <!-- header navigation bar-->
                <div class="header-nav">
                    <ul>
                        <li><a href="#"><i class="fas fa-shopping-bag"></i> Order</a></li>
                        <li><a href="#"><i class="fas fa-truck"></i> Delivery</a></li>
                        <li><a href="#"><i class="fas fa-users"></i>User</a></li>
                        <li><a href="#"><i class="fas fa-sign-out-alt"></i>LogOut</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
      <!-- this is sidebar-->   
    <section class="sidebar">
    <ul class="nav-bar">
        <li><a href="#">&nbsp;<i class="fas fa-tachometer-alt"></i> <span class="text-link"> Dashboard </span></a> </li>
        <li><a href="#">&nbsp;<i class="fas fa-chess-rook"></i> <span class="text-link"> Brand</span></a> </li>
        <li><a href="#">&nbsp;<i class="fas fa-list-alt"></i> <span class="text-link"> Category</span></a> </li>
        <li><a href="#">&nbsp;<i class="fas fa-cube"></i> <span class="text-link"> Products</span></a> </li>
        <li><a href="#">&nbsp;<i class="fas fa-shopping-bag"></i> <span class="text-link"> Orders</span></a> </li>
        <li><a href="#">&nbsp;<i class="fas fa-truck"></i> <span class="text-link"> Delivery</span></a> </li>
        <li><a href="#">&nbsp;<i class="fas fa-images"></i> <span class="text-link">Slider Images</span></a> </li>
        <li><a href="#">&nbsp;<i class="fas fa-cogs"></i> <span class="text-link"> Settings</span></a> </li>
        <li><a href="#">&nbsp;<i class="fas fa-id-badge"></i> <span class="text-link"> Profile</span></a> </li>
        <li><a href="#">&nbsp;<i class="fas fa-sign-out-alt"></i> <span class="text-link"> LogOut</span></a> </li>
        
       
    </ul>
    </section>

   
    <!-- this is working panel-->
    <section class="working-panel">
    <div class="container-fluid">
    <h1 class="display-4">welcome to Dashboard </h1>
    <hr>

        <div class="row">
            <!-- category widget -->
            <div class="col-md-3">
                <div class="card bg-orange-g text-white">
                    <div class="card-body">
                        <h4 class="font-weight-light"><i class="fas fa-list-alt"></i> Category</h4>
                        <hr>
                        <h5>
                           <b>1234</b> 
                        </h5>
                    </div>
                </div>
            </div>
            <!--all brands-->
            <div class="col-md-3">
                <div class="card bg-green-g text-white">
                    <div class="card-body">
                        <h4 class="font-weight-light"><i class="fas fa-chess-rook"></i> All Brands</h4>
                        <hr>
                        <h5>
                           <b>32333</b> 
                        </h5>
                    </div>
                </div>
            </div>
            <!--All Users-->
            <div class="col-md-3">
                <div class="card bg-primary-g text-white">
                    <div class="card-body">
                        <h4 class="font-weight-light"><i class="fas fa-users"></i> All Users</h4>
                        <hr>
                        <h5>
                           <b>32333</b> 
                        </h5>
                    </div>
                </div>
            </div>
            <!--All Orders-->
            <div class="col-md-3">
                <div class="card bg-golden-g text-white">
                    <div class="card-body">
                        <h4 class="font-weight-light"><i class="fas fa-shopping-bag"></i> Orders</h4>
                        <hr>
                        <h5>
                           <b>32333</b> 
                        </h5>
                    </div>
                </div>
            </div>
     </div>
    
     <!-- All Order Table-->
     <div class="all-order mt-5">
         <h2>New Orders</h2>
     <table class="table table-bordered table-hover">
  <thead>
    <tr class="bg-primary text-white">
      <th scope="col">Order no.</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Date</th>
      <th scope="col">Paid Status</th>
      <th scope="col">Order Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>4</td>
      <td>15-05-2022</td>
      <td><span class="badge badge-danger">Unpaid</span></td>
      <td><span class="badge badge-success">Complete</span></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>5</td>
      <td>15-05-2022</td>
      <td><span class="badge badge-success">Paid</span></td>
      <td><span class="badge badge-info">Proccess</span></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Roy</td>
      <td>15</td>
      <td>15-05-2022</td>
      <td><span class="badge badge-success">Paid</span></td>
      <td><span class="badge badge-danger">Rejected</span></td>
    </tr>
  </tbody>
</table>
    <div class="order-pagination">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
    </div>
     </div>
    </div>
    </section>
</div>

   <!-- for JS Files -->
   <script src="../js/jquery.js"></script>
    <script src="../fa/svg-with-js/js/fontawesome-all.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html> 
  