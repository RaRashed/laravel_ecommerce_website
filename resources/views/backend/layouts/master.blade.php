<!DOCTYPE html>
<html>
<head>
  <title>Search and Buy</title>
  @include('backend.partials.styles')

</head>
<body>
<div class="wrapper">
  {{-- navigation --}}


@include('backend.partials.nav')

  @include('backend.partials.left-sidebar')

<!-- end nav bar-->

@yield('content')


<!-- End slidebar+content -->
@include('backend.partials.footer')

  
</div>

@include('backend.partials.scripts')
</body>
</html>