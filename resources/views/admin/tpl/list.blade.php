@extends('admin.tpl.index')
@section('title','兲加新闻的页面')
<h1>奥里给</h1>
@section('content')
	<form action="" method="post">
		用户名:<input type="text">

		手机号:<input type="text">

		<button>提交</button>
	</form>

	@if(false)
		<h1>我是真的</h1>
	@else
		<h1>假的</h1>
	@endif

	@switch(1)
		@case(1)
			兲
			@break
		@case(2)
			玐
			@break
		@default

	@endswitch

	{{--注释且不会被F12显示--}}
	<!--  注释会被F12显示 -->
@stop