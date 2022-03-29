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
  background-color: rgb(255,115,0);
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
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
            <a class="nav-link dropdown collapsed" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
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
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-2">
              <li class="breadcrumb-item"><a href="#">Settings</a></li>
              <li class="breadcrumb-item active" aria-current="page">Customer form</li>
          </ol>
        </nav>
        <div class="content-wrapper">
          <div class="customer-form pt-3">
            <div class="page-title mx-3">
              <h3 class="my-3">Configure Customer Form</h3>
            </div>
            <form action="">
            <table class="table">
              <thead>
                <tr>
                  <th >Field</th>
                  <th >Configuration</th>
                  <th >Shown</th>
                  <th >Required</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td >Name</td>
                  <td></td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td >Phone</td>
                  <td></td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td >Order Name</td>
                  <td></td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>Delivery Driver</td>
                  <td></td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                  </td>
                </tr> 
                <tr>
                  <td >Walk-up order (hides vehicle fleids when selected)</td>
                  <td></td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                  </td>
                </tr>
                <tr>
                  <td >Vehicle</td>
                  <td>
                  <div class="input-group">
                    <select name="" id="" class="custom-select">
                      <option>Use Generic Type</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                  </td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td >Vehicle Color</td>
                  <td></td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                  </td>
                </tr>
                <tr>
                  <td >Customer Positioning</td>
                  <td>
                  <div class="input-group">
                    <select name="" id="" class="custom-select">
                      <option>Parking Sort Identifiers</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                  </td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td >Order Notes</td>
                  <td></td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>Item Request in Check in</td>
                  <td></td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                    <label class="switch"> 
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>
              
            <div class="mt-5">
                <input type="submit" class="save-from mb-5 mx-5" value="Save">
            </div>
             
            </form>
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