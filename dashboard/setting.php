<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Scan </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu text-light"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.php">
            <!-- <img src="images/logo.svg" alt="logo" /> -->
            
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <!-- <img src="images/logo-mini.svg" alt="logo" /> -->
           
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">

          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning</h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
              aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 notifications</p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas border-right" id="sidebar">
        <ul class="nav">
          <li class="nav-item  active">
            <a class="nav-link" href="/dashboard/">
              <i class="menu-icon mdi mdi-clock-alert"></i>
              <span class="menu-title">Waiting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/complete.php">
              <i class="menu-icon mdi mdi-checkbox-multiple-marked-circle"></i>
              <span class="menu-title">Fulfilled</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/dashboard/setting.php">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title"> Settting
              </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/dashboard/reports.php">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper py-5">
          <div class="row">
            <div class="col-md-7 col-12 mt-4">
                <div class="profile-settings">
                    <h4>Profile Setting</h4>
                    <form action="" class="form-group px-4">
                        <div class="form-group mt-4">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="Usman khan" >
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Email address</label>
                            <input type="email" class="form-control" value="abc@xyz.com" >
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" value="+921079433894" >
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            <div class="col-md-5 col-12 mt-4">
                <div class="password-rest text-center">
                    <h4> Reset Password</h4> 
                    <form action="">
                        <input type="password" placeholder="Old Password" class="form-control mt-5">
                        <input type="password" placeholder="New Password" class="form-control mt-5">
                        <input type="password" placeholder="Confirm Password" class="form-control mt-5">
                        <input type="submit" value="Update" class="w-100 reset-pass">
                    </form>
                </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <script>
    
    var time = new Date().getHours();
    if (time < 12){
      document.querySelector(".welcome-text").innerHTML = "Good Morning";
      console.log("moring");
    }
    else if(time => 12 && time < 20){
      document.querySelector(".welcome-text").innerHTML = "Good Afternoon";
      console.log("evening");
    }
    else{
      document.querySelector(".welcome-text").innerHTML = "Good Evening";
    }
  </script>
</body>

</html>