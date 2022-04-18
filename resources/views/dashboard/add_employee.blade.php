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
        <div class="content-wrapper py-5">
          <div class="row">
            {{-- <div class="col-md-7 col-12 mt-4">
                <div class="profile-settings">
                    <h4>ADD Employee</h4>
                    @if(Session::has("success"))
                    <div class="alert alert-success">Profile updated successfully</div>
                    @endif

                    <form action="{{route('employee-add')}}" class="form-group px-4" method="post">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control"  >
                           
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Email address</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" class="form-control"  >
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control"  >
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div> --}}
            <div class="content-wrapper">
                <div align='right'>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                       Add Employee
                      </button>
                </div>
      
                <!-- Model -->
                <!-- Button trigger modal -->
      
                <div class="customer-form pt-3">
                  <div class="page-title mx-3">
      
      
                    
      
                    
      
                    <h3 class="my-3">Employees</h3>
                  </div>
      
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th >Name</th>
                      <!-- <th >Configuration</th> -->
                      <th >Email</th>
                      <th >Phone No</th>
                      <th >Edit</th>
                  <th >Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($employee as $employee)
                  <tr>
                      <td>{{$employee->name}}</td>
                      <td>{{$employee->email}}</td>
                      <td>{{$employee->phone_no}}</td>
                      <td> 
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{$employee->id}}">
        Edit
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Employee</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{route('employee-update')}}" class="form-group px-4" method="post">
                    @csrf
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$employee->name}}"  >
                    <input type="hidden" name="id" class="form-control" value="{{$employee->id}}"  >
                    <label for="">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{$employee->email}}">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="phone"value="{{$employee->phone_no}}" >
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control"  >
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-sm">Update</button>
                  </form>
      
            </div>
          </div>
        </div>
      </div>
                        </td>
                      <td>
                        <a href='{{route("employee/delete", ["id" => $employee->id])}}' class='btn btn-sm btn-pill btn-danger delete_vcolor'>Delete</a>
                        </td>
                  </tr>
                  @endforeach
                    
                  </tbody>
                </table>
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
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD Employee</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('employee-add')}}" class="form-group px-4" method="post">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" class="form-control"  >
            <label for="">Email address</label>
            <input type="email" name="email" class="form-control">
            <label for="">Phone Number</label>
            <input type="text" name="phone" class="form-control" id="phone" >
            <label for="">Password</label>
            <input type="password" name="password" class="form-control"  >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
          </form>
  
        </div>
      </div>
    </div>
  </div>
  <!-- container-scroller -->
  <audio src="{{asset('tone/notification.mp3')}}" audio="{{asset('tone/notification.mp3')}}" class="audio" controls hidden></audio>


  <!-- plugins:js -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

function pauseAudio() { 
  x.pause(); 
} 
  //     const audio = new Audio("{{asset('tone/notification.mp3')}}" );
  // audio.play();
      // var aud = $("#notification")[0];
      // aud.play(); 
      // $("#audio_form").submit();
      var orders = $("#allOrders").val();

      setInterval(() => {
        $.ajax({
        type: "ajax",
        method: "get",
        data: {"allOrder":orders},
        url: "{{route('audio_form')}}",
        datatype: "json",
        success: function(data){
          if(data==1){
            if($(".orderCount").text() != 'i' ){
            var audio = $('.audio').attr('audio');
            obj.src = audio;
            obj.play();
            $(".orderCount").text("i");
            }
            
          }else{
        
          }
        }
      });
      }, 5000);
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
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
  <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
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
             <script>
                $(":input").inputmask();

                 $("#phone").inputmask({"mask": "(999) 999-9999"});
            </script>
</body>

</html>