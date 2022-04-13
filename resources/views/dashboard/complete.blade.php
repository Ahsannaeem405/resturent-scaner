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
                  <h3 class="page-heading">Orders Completed</h3>
              </div>
               @if(count($orders) == 0)
              <div align="center" width="200px"><img src="data:image/png;base64,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"></div>
              @endif
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
                                <li class="list-inline-item px-3 border-right"> {{$output->order_no}} </li>
                                <li class="list-inline-item px-3"> 
                                Order time:  <span class="timedate d-none">{{ $output->created_at}}</span> 
                                
                                
                                <span class="showtime">{{'0d 0h 0m 0s'}}</span>  </li>
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
                            
                            <span>@if($output->status==1) {{"Done"}} @else {{"Waiting"}} @endif</span>
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
  <script>
   $(function(){

    setInterval(function (){



      $('.timedate').each(function( index ) {
        
    var datetime=$(this).text();
  //  alert(1);
  let diffTime = Math.abs(new Date().valueOf() - new Date(datetime).valueOf());
let days = diffTime / (24*60*60*1000);
let hours = (days % 1) * 24;
let minutes = (hours % 1) * 60;
let secs = (minutes % 1) * 60;
[days, hours, minutes, secs] = [Math.floor(days), Math.floor(hours), Math.floor(minutes), Math.floor(secs)]
var datain=$('.showtime');
$(datain[index]).text(days+'d'+' '+hours+'h'+' '+minutes+'m'+' '+secs+'s');




    });


  }, 1000);



   

});
    </script>
</body>

</html>