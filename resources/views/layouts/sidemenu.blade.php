<nav class="sidebar sidebar-offcanvas border-right" id="sidebar">
        <ul class="nav">
        <li class="nav-item ">
            <a class="nav-link" href="{{route('home')}}">
              <i class="menu-icon mdi mdi-clock-alert"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('waiting-order') }}">
              <i class="menu-icon mdi mdi-clock-alert"></i>
              <span class="menu-title">Waiting</span>
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
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('setting')}}">Profile Sittings</a></li>
              </ul>
            </div>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('site_setting') }}">Site Sittings</a></li>
              </ul>
            </div>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('customer_form')}}">Customer Form</a></li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="{{route('reports')}}">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li> -->
        </ul>
      </nav>