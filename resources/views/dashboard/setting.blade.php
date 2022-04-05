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
            <div class="col-md-7 col-12 mt-4">
                <div class="profile-settings">
                    <h4>Profile Setting</h4>
                    @if(Session::has("success"))
                    <div class="alert alert-success">Profile updated successfully</div>
                    @endif

                    <form action="{{route('update-setting')}}" class="form-group px-4">
                        <div class="form-group mt-4">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}" >
                            <input type="text" name="id" value="{{Auth::user()->id}}" hidden='hidden'>
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Email address</label>
                            <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" >
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" class="form-control" value="{{Auth::user()->phone_no}}" >
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            <div class="col-md-5 col-12 mt-4">
                <div class="password-rest text-center">
                    <h4> Reset Password</h4> 
                    @if(Session::has("success"))
                    <div class="alert alert-success">{{Session::get("success")}}</div>
                    @endif
                    @if(Session::has("error"))
                    <div class="alert alert-danger">{{Session::get("error")}}</div>
                    @endif
                     
                    <form action="{{route('change-password')}}">
                        <input type="password" name='old' placeholder="Old Password" class="form-control mt-5">
                        <span class="text-warning">@error('old') {{$message}} @enderror </span>
                        <input type="password" name="new" placeholder="New Password" class="form-control mt-5">
                        <span class="text-warning">@error('new') {{$message}} @enderror </span>
                        <input type="password" name="new_confirm" placeholder="Confirm Password" class="form-control mt-5">
                        <span class="text-warning">@error('new_confirm') {{$message}} @enderror </span>
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
  <audio src="{{asset('tone/notification.mp3')}}" audio="{{asset('tone/notification.mp3')}}" class="audio" controls hidden></audio>

<input type="hidden" name="allOrder" id='allOrders' value='{{$all}}'>
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