<!DOCTYPE html>
<html>
<head>
	<title>Search and Buy</title>
	 <meta name="_token" content="{{csrf_token()}}" />
	@include('frontend.partials.styles')

</head>
<body>
<div class="wrapper">
	{{-- navigation --}}


@include('frontend.partials.nav')

<!-- end nav bar-->

@yield('content')


<!-- End slidebar+content -->
@include('frontend.partials.footer')

	
</div>

@include('frontend.partials.scripts')
@yield('scripts')
</body>
</html>