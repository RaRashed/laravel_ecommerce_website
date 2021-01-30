 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('images/logo/Rashed.jpg')}}" alt="Rashed Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Search and Buy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('images/rashed.jpg')}}" class="img-circle elevation-2" width="100" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Rashedul Aziz Rashed</a>
        </div>
      </div>










     









      <!-- Sidebar Menu -->
          <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.product.create')}}" class="nav-link">
                 
                  <h6>Add Product</h6>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('backend.products')}}" class="nav-link ">
          
                  <h6>Show All Product</h6>
                </a>
              </li>
            
            </ul>
          </li>


          <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.categories')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('backend.category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage Brands
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.brands')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Brands</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('backend.brand.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Brands</p>
                </a>
              </li>
            </ul>
          </li>

           <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#division_pages" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage Divisions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.divisions')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Divisions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('backend.division.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Division</p>
                </a>  
              </li>
            </ul>
          </li>
           <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#district_pages" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage Districts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.districts')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Districts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('backend.district.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add District</p>
                </a>
              </li>
            </ul>
          </li>






             <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#orders_pages" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Order List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.orders')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order List</p>
                </a>
              </li>
          
            </ul>
          </li>
        </ul>
      </nav>







          </aside>

