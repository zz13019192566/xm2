<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
<body>
	<center>
		
	@include('admin/tpl/menu')
		@section('content');
		<h1>list页面头</h1>
		<h1>list页面体</h1>
		<h1>list页面尾</h1>
		@show
	</center>
	
	@include('admin/tpl.cos')
</body>
</html>