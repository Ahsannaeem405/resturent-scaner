<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
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
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">




                  <!-- <h2>Sound Information</h2> -->
                  <!-- <audio id="myAudio" controls >
  <source src="{{asset('tone/notification.ogg')}}" type="audio/ogg">
  <source src="{{asset('tone/notification.mp3')}}" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio> -->
<audio src="{{asset('tone/notification.mp3')}}" audio="{{asset('tone/notification.mp3')}}" class="audio" controls hidden></audio>

<input type="hidden" name="allOrder" id='allOrders' value='{{$all}}'>




                    <div class="row">
                      <div class="col-sm-12">

                        <div class="statistics-details d-flex align-items-center justify-content-between">

                          <div class="row w-100">
                            <!-- <div class="col-md-3 col-6 mt-3 mt-md-0">
                              <div class="stat-details bg1 p-2 text-center">
                                <p class="statistics-title">Total Orders</p>
                                <h3 class="rate-percentage mt-3">{{$all}}</h3>
                              </div>

                            </div> -->
                            <div class="col-md-4 col-6  mt-3 mt-md-0">
                              <div class="stat-details bg2 p-2 text-center">
                                <p class="statistics-title">Today's Orders </p>
                                <h3 class="rate-percentage mt-3">{{$today}}</h3>
                              </div>

                            </div>

                            <div class="col-md-4 col-6 mt-3 mt-md-0">
                              <div class="stat-details bg4 p-2 text-center">
                                <p class="statistics-title">Waiting </p>
                                <h3 class="rate-percentage mt-3">{{$waiting}}</h3>
                              </div>
                            </div>
                            <div class="col-md-4 col-6 mt-3 mt-md-0">
                              <div class="stat-details bg3 p-2 text-center">
                                <p class="statistics-title">Completed </p>
                                <h3 class="rate-percentage mt-3">{{$complete}}</h3>
                              </div>
                            </div>
                            <!-- <div class="col-md-3 col-6 mt-3 mt-md-0">
                              <div class="stat-details bg4 p-2 text-center">
                                <p class="statistics-title">Waiting</p>
                                <h3 class="rate-percentage mt-3">{{$waiting}}</h3>
                              </div>
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-12 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Total Orders</h4>
                                    <h5 class="card-subtitle card-subtitle-dash">Graph of total orders
                                      </h5>
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
                    </div> -->

                    
<div class='p-3 mb-5 rounded' id="chartContainer" style="height: 300px; width: 100%;"></div>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      var obj = document.createElement('audio');
      
$("#playNow").on("click",function(){
  var audio = document.createElement("AUDIO")
document.body.appendChild(audio);
audio.src = "{{asset('tone/notification.mp3')}}";
    audio.play();

})
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
          if(data!=0){
            if($(".orderCount").text() == '' || $(".orderCount").text() < $data){
            var audio = $('.audio').attr('audio');
            obj.src = audio;
            obj.play();
            $(".orderCount").text("");
            $(".orderCount").text(data);
            }
            
          }else{
        
            



//             var audio = document.createElement("AUDIO")
// document.body.appendChild(audio);
// audio.src = "{{asset('tone/notification.mp3')}}";
//     audio.play();
            
          }
        }
      });
      }, 5000);

      

        // $(this).hide(1000);
    //  alert("helo");
     setInterval(() => {
      //  alert("helo")
     }, 3000);

    });


    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  </script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  <script>

	window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Converting in Local Time"
      },

      // axisX:{
      //   title: "time",
      //   gridThickness: 2,
      //   interval:1, 
      //   intervalType: "hour",        
      //   valueFormatString: "hh TT K", 
      //   labelAngle: -20
      // }
      axisY:{
        title: "time",
        includeZero:true, 
        suffix: "mn"
      },
      axisX:{
        // title: "time",
        // gridThickness: 2,
        // interval:1, 
        // intervalType: "hour",        
        // valueFormatString: "hh TT K", 
        // labelAngle: -20
        title: "distance"
      },
      data: [
      {        
        type: "line",
        dataPoints: [//array
          @foreach($ordersData as $showOnGraph)

          @php
          $to =Carbon\Carbon::create($showOnGraph->created_at);
$from = Carbon\Carbon::create($showOnGraph->fullfill);


$diff_in_minutes = $to->diffInMinutes($from);

          @endphp
          
        {x: {{$showOnGraph->id}} ,  y:  {{$diff_in_minutes}}},
        @endforeach
        
        ]
      }
      ]
    });

chart.render();
}
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
</body>

</html>