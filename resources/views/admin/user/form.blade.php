<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>表单</title>
	<script type="text/javascript" src="/js/jquery.min.js"></script>

</head>
<body>

	<form action="/create" method="post">
		用户名:<input type="text" name="uanme" />
			{{csrf_field()}}
		<button>提交</button>
	</form>
	<a href="/edit/4/www">修改</a>
	<a href="{{route('ac',['id'=>10])}}">跳转</a>
	<button id="buts"> 点击 </button>
	<script type="text/javascript">
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
		
		$('#buts').click(function(){

			$.post('/create',{},function(data){

				console.log(data);

			})

		})
	</script>
</body>
</html>
