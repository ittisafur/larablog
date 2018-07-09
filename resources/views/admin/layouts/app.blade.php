<!DOCTYPE HTML>
<html lang="en">
<head>
	@include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini">

	<div class="wrapper">
		@include('admin.layouts.header')
		@include('admin.layouts.sidebar')

		@yield('content')
		
		@include('admin.layouts.footer')
	</div>
	@include('admin.layouts._script')
</body>
</html>