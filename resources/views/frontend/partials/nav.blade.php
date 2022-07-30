	<?php
    /*
  use App\Http\Controllers\Controller;
use App\Models\Cart;
$total_item=Cart::totalitems();
*/

  ?>

  {{--
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
       <a href="{{ route('index') }}" class="brand-link">
      <img src="{{asset('images/logo/Rashed.jpg')}}" class="brand-image img-circle" alt="Rashed Logo" width="70">
    </a>
<b>  <a class="navbar-brand" href="{{ route('index') }}" style="color: white" >Search and Buy</a></b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}" style="color: white">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('products') }}" style="color: white">Products</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}" style="color: white">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}" style="color: white">Contact</a>

      </li>

      <li class="nav-item">
          <form class="form-inline my-2 my-lg-0" action="{{route('search')}}" method="get">


      <div class="input-group mb-3">
        <input class="form-control" name="search" type="text" placeholder="Search products" aria-label="Search">
      <button name="search" class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>


      </div>

    </form>
      </li>


    </ul>




                             <li class="nav-item">
                                <a class="nav-link" href="{{ route('cartsshow') }}">
                                <button class="btn  btn-danger">  <span class="mt-1">Cart</span>

                                  <span class="badge badge-danger">

                                   {{ $total_item=Cart::totalitems()}}
                                  </span></button>
                                </a>
                            </li>

                              @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <b> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </b><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </ul>

  </div>
</div>
</nav>

--}}
