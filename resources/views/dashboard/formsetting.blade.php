<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Scan </title>
  <!-- plugins:css -->
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
              <li class="breadcrumb-item active" aria-current="page">Customer form</li>
          </ol>
        </nav>
        <div class="content-wrapper">
          <div align='right'>
            <!-- <button class='btn btn-primary btn-sm' id='vcolor_btn'>Add Vehicle Color</button> -->
            <!-- <button class='btn btn-primary btn-sm' id='vtype_btn'>Add Vehicle Type</button> -->
          </div>

          <!-- Model -->
          <!-- Button trigger modal -->

          <div class="customer-form pt-3">
            <div class="page-title mx-3">


              

              

              <h3 class="my-3">Configure Customer Form</h3>
            </div>


            <form action="">
            <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th >Field</th>
                  <!-- <th >Configuration</th> -->
                  <th >Shown</th>
                  <th >Required</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $output)
                <tr>
                  <td >{{$output->field}}</td>
                  <!-- <td></td> -->
                  <td>
                   
                    <label class="switch"> 
                      <a href="{{route('shown', ['id' => $output->id, 'shown' => $output->shown])}}">
                      <input type="checkbox" @if($output->shown==1) checked @endif>
                      <span class="slider round"></span>
                      </a>
                    </label>
                  </td>
                  <td>
                    <label class="switch"> 
                      <a href="{{route('required',['id' => $output->id, 'required' => $output->required])}}">
                      <input type="checkbox" @if($output->required==1) checked @endif>
                      <span class="slider round"></span>
                      </a>
                    </label>
                  </td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
            </div>
            <!-- <div class="mt-5">
                <input type="submit" class="save-from mb-5 mx-5" value="Save">
            </div> -->
             
            </form>
          </div>
          <div class="customer-form pt-3 mt-4">
            <div class="page-title mx-3 d-flex justify-content-between align-items-center">
              <h3 class="my-3">Vehicle Color</h3>
            <button class='btn btn-primary btn-sm' id='vcolor_btn'>Add Vehicle Color</button>
            <div align='right' id='vcolor' class="shadow shadow-lg">
              <form action="{{route('add_color')}}" method='post'>
                @csrf
                <input type="text" name='color' class="form-control ml-5" placeholder="Add vehicle color" required="required">
                <input type="button" id="close_color" class='btn btn-white btn-sm' value="Cancel">
                <input type="submit" class='btn btn-primary btn-sm' value="Add">
              </form>
              </div>
            </div>
      
            <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th >Vehicle Color</th>
                  <!-- <th>Active</th> -->
                  <th >Edit</th>
                  <th >Delete</th>
                </tr>
              </thead>
              <tbody>
               @foreach($vcolor as $out)
               <tr>
                  <td >{{$out->color}}</td>
                  <!-- <td><label class="switch"> 
                      <a href="{{route('color/status', ['id' => $out->id, 'status' => $out->status])}}">
                      <input type="checkbox" @if($out->status==1) checked @endif>
                      <span class="slider round"></span>
                      </a>
                    </label></td>-->
                  <td> 
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{$out->id}}">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$out->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update vehicle color</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('color.update')}}" method='post'>
          @csrf
          <label for="">Enter color</label>
          <input type="hidden" name='id' value='{{$out->id}}'>
          <input type="text" name='color' class="form-control mt-1" value="{{$out->color}}" required="required">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </form>

      </div>
    </div>
  </div>
</div>
                  </td>
                  <td>
                  <a href='{{route("color/delete", ["id" => $out->id])}}' class='btn btn-sm btn-pill btn-danger delete_vcolor'>Delete</a>
                  </td>
                </tr>
               @endforeach
                
                
                
              </tbody>
            </table>
            </div>
            <!-- <div class="mt-5">
                <input type="submit" class="save-from mb-5 mx-5" value="Save">
            </div> -->
             
    
          </div>

          <div class="customer-form pt-3 mt-4">
            <div class="page-title mx-3 d-flex justify-content-between align-items-center" style='display:flex;'>
              
              <h3 class="my-3">Vehicle Type</h3>
            <button class='btn btn-primary btn-sm' id='vtype_btn'>Add Vehicle Type</button>
            <div align='right' id="vtype" class="shadow shadow-lg">
              <form action="{{route('add_type')}}" method='post'> 
                @csrf
                <input type="text" name='type' class="form-control ml-5" placeholder="Add vehicle type" required="required">
                <input type="button" id="close_type" class='btn btn-white btn-sm' value="Cancel">
                <input type="submit" class='btn btn-primary btn-sm' value="Add">
              </form>
              </div>

            </div>
            <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th >Vehicle Type</th>
                  <!-- <th>Active</th> -->
                  <th >Edit</th>
                  <th >Delete</th>
                </tr>
              </thead>
              <tbody>
               @foreach($vtype as $output)
               <tr>
                  <td >{{$output->type}}</td>
                  <!-- <td><label class="switch"> 
                      <a href="{{route('type/status', ['id' => $output->id, 'status' => $output->status])}}">
                      <input type="checkbox" @if($output->status==1) checked @endif>
                      <span class="slider round"></span>
                      </a>
                    </label></td> -->
                  <td>
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#typeModal{{$output->id}}">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="typeModal{{$output->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$output->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel{{$output->id}}">Update vehicle type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('type.update')}}" method='post'>
          @csrf
          <label for="">Enter type</label>
          <input type="hidden" name='id' value='{{$output->id}}'>
          <input type="text" name='type' class="form-control mt-1" value="{{$output->type}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Save</button>

      </div>
      </form>
      
    </div>
  </div>
</div>
                  </td>
                  <td>
                  <a href='{{route("type/delete", ["id" => $output->id])}}' class='btn btn-sm btn-pill btn-danger delete_vtype'>Delete</a>
                  </td>
                </tr>
               @endforeach
                
                
                
              </tbody>
            </table>

            </div>
            <!-- <div class="mt-5">
                <input type="submit" class="save-from mb-5 mx-5" value="Save">
            </div> -->
             
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
<!-- Button trigger modal -->

  <!-- plugins:js -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $(document).on("click", '.delete_vtype', function(){
return confirm('If you want to delete, press Ok');
        // $(".delete_vtype").click();
      })

      $(document).on("click", '.delete_vcolor', function(){
return confirm('If you want to delete, press Ok');
        // $(".delete_vtype").click();
      })
        // $(this).hide(1000);
      $("#vtype").hide();
      $("#vcolor").hide();

      $("#vtype_btn").on("click", function(){
        $("#vtype_btn").hide(1000);
        // $(this).hide(1000);
      $("#vcolor").hide();
        $("#vtype").toggle(1000);
      });

      $("#vcolor_btn").on("click", function(){
        $("#vcolor_btn").hide(1000);
      $("#vcolor").toggle(1000);
        $("#vtype").hide();
      });

      $("#close_color").on("click",function(){
        $("#vcolor_btn").show();
      $("#vcolor").hide(1000);
      })

      $("#close_type").on("click",function(){
        $("#vtype_btn").show();
      $("#vtype").hide(1000);
      })

    })
  </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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