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
  <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #FF7300;
}

input:focus + .slider {
  box-shadow: 0 0 1px #FF7300;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
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
            <a class="nav-link dropdown collapsed" data-bs-toggle="collapse" href="#tables" aria-expanded="true" aria-controls="tables">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Settting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/dashboard/sitesetting.php">Site Sittings</a></li>
              </ul>
            </div>
            <div class="" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/dashboard/formsetting.php">Customer Form</a></li>
              </ul>
            </div>
            <div class="" id="tables">
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
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-2">
              <li class="breadcrumb-item"><a href="#">Settings</a></li>
              <li class="breadcrumb-item active" aria-current="page">Site Setting</li>
          </ol>
        </nav>
        <div class="content-wrapper">
          
        <form action="">
          <div class="row justify-content-end">
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-end">
              <button class="w-50 save-setting">Save</button>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mt-3">
              <div class="location-info p-4">
                <h4>Location Info</h4>
              
                  <div class="row">
                    <div class="col-12 mt-3">
                      <input type="text" class="form-control" value="Palm Palace">
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-12 mt-3">
                      <input type="text" class="form-control" value="2370 carpanter road">
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-12 mt-3">
                      <input type="text" class="form-control" value="Ann Arbor">
                    </div> 
                    <div class="col-lg-4 col-12 mt-3">
                      <input type="text" class="form-control" value="MI">
                    </div> 
                    <div class="col-lg-4 col-12 mt-3">
                      <input type="text" class="form-control" value="48108">
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-12 mt-3">
                      <input type="text" class="form-control" placeholder="Phone Number">
                    </div> 
                  </div>
              
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mt-3">
              <div class="sound-setting p-4 d--block d-lg-flex align-items-center justify-content-between">
               <h4>Play Sound On Customer Check In</h4>
               <div class="text-end">
                  <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                  </label>
               </div>
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mt-4">
              <div class="sound-setting p-4 d-flex align-items-center justify-content-between">
              <h4>Upload logo</h4>
              <div class="upload-img">
                  <input type="file" hidden id="file-upload">
                  <img src="./images/dashboard/upload-logo.jpg" alt="" class="img-fluid" onclick={document.getElementById(file-upload).clicked()}>
              </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mt-4">
               <div class="location-info p-4">
                  <h4>Order Form Custom Text</h4>

                  <div class="form-group mt-3">
                      <small id="emailHelp" class="form-text text-muted">Your may optionally provide instructions for your customers on how to use the curbside pickup form.</small>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type here">
                  </div>
              </div>
            </div>
          </div>
          </form>
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