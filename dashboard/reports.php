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
            <h1 class="welcome-text">Plan Palance</h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
           
              <button class="log-btn px-3"> <i class="mdi mdi-logout"></i> Logout</button>
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
          <li class="nav-item ">
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
          <li class="nav-item">
            <a class="nav-link dropdown" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Settting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/dashboard/sitesetting.php">Site Sittings</a></li>
              </ul>
            </div>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/dashboard/formsetting.php">Customer Form</a></li>
              </ul>
            </div>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/dashboard/persetting.php">Personal Setting</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/dashboard/reports.php">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="row">
                      <div class="col-sm-12">

                        <div class="statistics-details">

                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-3 mt-lg-0">
                              <div class="stat-details bg1 p-3 text-center">
                                <p class="statistics-title">Waiting Time</p>
                                <h3 class="rate-percentage mt-3">493</h3>
                              </div>

                            </div>
                            <div class="col-lg-4 col-md-6 col-12  mt-3 mt-lg-0">
                              <div class="stat-details bg2 p-3 text-center">
                                <p class="statistics-title">Overall Waiting Time </p>
                                <h3 class="rate-percentage mt-3">139</h3>
                              </div>

                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-3 mt-lg-0">
                              <div class="stat-details bg3 p-3 text-center">
                                <p class="statistics-title">Total Orders</p>
                                <h3 class="rate-percentage mt-3">100</h3>
                              </div>
                            </div>
                            <!-- <div class="col-md-3 col-6 mt-3 mt-md-0">
                              <div class="stat-details bg4 p-2 text-center">
                                <p class="statistics-title">Waiting</p>
                                <h3 class="rate-percentage mt-3">39</h3>
                              </div>
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-12 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Order Completed</h4>
                                    <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the
                                      printing</h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                  <canvas id="performaneLine"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
</body>

</html>