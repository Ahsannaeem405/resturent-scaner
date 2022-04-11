
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
            <h1 class="welcome-text">Palm Palace</h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
          <button type="button" class="btn btn-dark px-3 logout_btn_confirm" href="#"
                                       ><i class="mdi mdi-logout"></i>
                                        {{ __('Logout') }}
                                    </button>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              <!-- <button class="log-btn px-3"> <i class="mdi mdi-logout"></i> Logout</button> -->

               
<!-- Button trigger modal -->
 
  


          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".logout_btn_confirm").on("click",function(){
      myFunction();
    });
    function myFunction() {
  var text = "Press a button!\nEither OK or Cancel.";
  if (confirm("Are you sure to logout ?") == true) {
    $("#logout-form").submit();
  } else {
    
  }
}
  })
    
</script>