<!DOCTYPE html>
<html>
<head>
	@include('blog.partials._header')
	
</head>
<body>
  <div id="wrapper">
  @include('blog.partials._navbar')
  @yield('content')
  </div>
  @include('blog.partials._footer')
</body>
</html>
