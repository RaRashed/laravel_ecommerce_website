<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">messages</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{route('backend.contacts')}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Hi Rashed You Have new Message
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">See all Messages</p>
  
              </div>
            </div>
            <!-- Message End -->
          </a>
         
     
    </ul>
  </nav>