<!DOCTYPE html>
<html>
<head>
	@include('dashboard.partials._header')
</head>

<body>

<div class="wrapper">
	@include('dashboard.partials._navside')
	@include('dashboard.partials._navbar')
	@yield('content')
	@include('dashboard.partials._footer')
</div>
</body>
</html>