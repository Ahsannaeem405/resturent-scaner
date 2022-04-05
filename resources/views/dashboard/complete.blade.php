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
              <div class="col">
                  <h3 class="page-heading">Complete Orders</h3>
              </div>
              @foreach($orders as $output)
              <div class="col-12 mt-3">
               <div class="waiting-order d-md-flex justify-content-between align-items-center p-3">
                   <div class="order-details">
                       <div>
                        <h6> <span>{{ $output->name }}</span> {{$output->phone_no}} </h6>
                        <div class="order-info ">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item px-3 border-right">{{$output->color}} </li>
                                <li class="list-inline-item px-3 border-right">{{ $output->type}} </li>
                                <!-- <li class="list-inline-item px-3 border-right"> 2 </li> -->
                                <li class="list-inline-item px-3"> 
                                  Order time:  <span>{{ Carbon\Carbon::create($output->created_at)->format("D, d M, H:i A") }}</span>  </li>
                              </ul>
                        </div>
                       </div>
                       
                   </div>
                   <div class="order-status  mt-3 mt-md-0">
                       <div class="d-flex align-items-center justify-content-center">
                            
                            <label class="switch mx-3" >
                            <a href="{{ route('complete/status', ['status' => $output->status, 'id' => $output->id]) }}">
                                <input class="checkbox_btn" name='checkbox' id='' value="{{$output->status}}" type="checkbox" @if($output->status==1) checked @endif>
                                <span class="slider round"></span>
                                </a>
                            </label>
                            
                            <span>@if($output->status==1) {{"Completed"}} @else {{"Waiting"}} @endif</span>
                       </div>
                   </div>
               </div>
           </div>
              @endforeach
           
           
           
          
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
  <div class="modal fade notice-model" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header position-relative">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Order added in complete list
        </div>
      </div>
    </div>
  </div>
  <audio src="{{asset('tone/notification.mp3')}}" audio="{{asset('tone/notification.mp3')}}" class="audio" controls hidden></audio>

<input type="hidden" name="allOrder" id='allOrders' value='{{$all}}'>
  <!-- plugins:js -->
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->

   <!-- bootstrap -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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

    $(document).ready(function(){
      $(document).on("click",".checkbox_btn", function(){
        var check_val= $(this).val();
        $.ajax({
          method: "post",
          dataType: "json",
          data: {"checkVal":check_val}.
        })
      });
    })






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