<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@foreach($arr as $k => $v)

		<li>{{$v->uname}}</li>

	@endforeach

	{{$arr->links()}}
</body>
</html>