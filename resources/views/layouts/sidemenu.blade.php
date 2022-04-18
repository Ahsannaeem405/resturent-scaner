<nav class="sidebar sidebar-offcanvas border-right" id="sidebar" style="background-color: #660066 !important;">
        <ul class="nav">
        <li class="nav-item ">
            <a class="nav-link" href="{{route('home')}}">
              <i class="menu-icon mdi mdi-airplay"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('waiting-order') }}">
              <i class="menu-icon mdi mdi-clock-alert"></i>
              <span class="menu-title">Waiting({{App\Models\OrderPickup::where('status',0)->count()}})</span>
              <div class="badge bg-danger badge-pill orderCount"></div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('complete_order') }}">
              <i class="menu-icon mdi mdi-checkbox-multiple-marked-circle"></i>
              <span class="menu-title">Fulfilled</span>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="{{ route('setting')}}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title"> Setttings
              </span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link dropdown collapsed" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Settting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse sub-items" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('setting')}}">Profile Setting</a></li>
              </ul>
            </div>
            @if(auth()->user()->is_admin==1)
            <div class="collapse sub-items" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('site_setting') }}">Site Setting</a></li>
              </ul>
            </div>
            <div class="collapse sub-items" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('customer_form')}}">Customer Form</a></li>
              </ul>
            </div>
            <div class="collapse sub-items" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('add_employee')}}">Add Employee</a></li>
              </ul>
            </div>
            @endif
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="{{route('reports')}}">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li> -->
        </ul>
      </nav>
      <script>
        var sub_menu = document.querySelector(".sub-items");
        console.log("hello", sub_menu)
        var path = window.location.pathname;
          console.log("your pth", path); 
        
        if (path == "/admin/settings" || path == "/public/admin/settings/site-setting" || path == "/public/admin/settings/customer-form"  )
        {  
        
          $('.sub-items').removeClass("collapse");
        
        
        }
   
      </script>