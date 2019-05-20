<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="/js/jquery.min.js" type="text/javascript"></script>
</head>
<body>
	<a href="/admin/req?id=10&name=qqq&age=500&p=1">修改</a>

	<form action="/admin/req" method='post'>
		用户名:<input type="text" name='uname' />
		邮箱:<input type="text" name='email' />
		手机号:<input type="text" name='phone' />
		{{csrf_field()}}
		<button>提交</button>

	</form>

	<hr>

	<form action="/admin/upload" method='post' enctype="multipart/form-data">
		文件上传:<input type="file" name='imgs' />
		{{csrf_field()}}
		<button>提交</button>
	</form>

	<hr>

	<form action="/admin/old" method='post'>
		用户名:<input type="text" name='uname' value="{{old('uname')}}"/>
		邮箱:<input type="text" name='email' value="{{old('email')}}"/>
		手机号:<input type="text" name='phone' value="{{old('phone')}}"/>
		{{csrf_field()}}
		<button>提交</button>


	</form>

	<hr>
	<script type="text/javascript">
		$.get('/admin/jsons',{},function(data){
			// for(var i = 0; i< data.length; i++){
			// 	console.log(data[i]);
			// }
			// console.log(data);
			
			for(var i = 0; i< data.length;i++){
				console.log(data[i].name);
			}
		})
	</script>

	{{session('success')}}

	{!!$hrs!!}
</body>
</html>