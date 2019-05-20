<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/admin/users" method="post">
		手机号: <input type="text" name='phone' />
			{{csrf_field()}}
		<button>提交</button>
	</form>
	<a href="/admin/edit/10">修改</a>

	<a href="{{route('ar')}}">列表页</a>
</body>
</html>