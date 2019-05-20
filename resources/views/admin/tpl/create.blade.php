<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>这是模板测试</h1>

	<h2>{{$str}}</h2>
  	@foreach($arr as $k => $v)
		<h1>{{$v}}</h1>
  	@endforeach

  	@for($i = 1;$i <= 10; $i++)
		<h3>{{$i}}</h3>
  	@endfor

  	{{date('Y-m-d H:i:s',time())}}

  	@php
		echo date('Y-m-d H:i:s',time());
  	@endphp

  	{{$str or '的发掘看来'}}

  	{{$hrs}}
</body>
</html>
