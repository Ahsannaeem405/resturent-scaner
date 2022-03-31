<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Scan </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
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
    @include("layouts.topmenu")
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include("layouts.sidemenu")
      <!-- partial -->
      <div class="main-panel">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-2">
              <li class="breadcrumb-item"><a href="#">Settings</a></li>
              <li class="breadcrumb-item active" aria-current="page">Site Setting</li>
          </ol>
        </nav>
        <div class="content-wrapper">
          
        <form action="{{route('location-info')}}" method='post' enctype="multipart/form-data">
          @csrf
          <div class="row justify-content-end">
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-end">
              <button type="submit" class="w-50 save-setting" id="save_info">Save</button>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mt-3">
              <div class="location-info p-4">
                <h4>Location Info</h4>
              
                  <div class="row">
                    <div class="col-12 mt-3">
                      <input type="text" name='name' class="form-control" value="{{ isset($data->name) ? $data->name : '' }}" placeholder="">
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-12 mt-3">
                      <input type="text" name='address' class="form-control" value="{{ isset($data->address) ? $data->address : '' }}" placeholder="Name">
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-12 mt-3">
                      <input type="text" name='street' class="form-control" value=" {{ isset($data->street) ? $data->street : '' }}" placeholder="Name">
                    </div> 
                    <div class="col-lg-4 col-12 mt-3">
                      <input type="text" name='house_no' class="form-control" value="{{ isset($data->house_no) ? $data->house_no : '' }}" placeholder="Name">
                    </div> 
                    <div class="col-lg-4 col-12 mt-3">
                      <input type="text" name='zip' class="form-control" value="{{ isset($data->zip) ? $data->zip : '' }}" placeholder="Name">
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-12 mt-3">
                      <input type="text" name='phone_no' class="form-control" value='{{ isset($data->phone_no) ? $data->phone_no : '' }}' placeholder="Phone Number" placeholder="Name">
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
                    <a href="{{route('soundplay', ['id' => $data->id, 'status' => $data->playsound])}}">
                      <input name='sound' type="checkbox" @if($data->playsound=="on") checked @endif>
                      <span class="slider round"></span>
                      </a>
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
                  <input  type="file" hidden id="file-upload" name='image'>
                  <label for="file-upload"><img src="{{asset('images/dashboard/upload-logo.jpg')}}" alt="" class="img-fluid" onclick={document.getElementById(file-upload).clicked()}></label>
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
                      <input type="text" name='message' value='{{ isset($data->message) ? $data->message : '' }}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type here">
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
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/dashboard.js')}}"></script>
  <script src="{{asset('js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>