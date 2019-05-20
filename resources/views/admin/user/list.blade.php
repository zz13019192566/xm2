
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>网站后台管理模版</title>
		<link rel="stylesheet" type="text/css" href="../../static/admin/layui/css/layui.css" />
		<link rel="stylesheet" type="text/css" href="../../static/admin/css/admin.css" />
	</head>

	<body>
		<div class="page-content-wrap">
			<form class="layui-form" action="">
				<div class="layui-form-item">
					<div class="layui-inline tool-btn">
						<button class="layui-btn layui-btn-small layui-btn-normal go-btn hidden-xs" data-url="danye-detail.html"><i class="layui-icon">&#xe654;</i></button>
						<button class="layui-btn layui-btn-small layui-btn-warm listOrderBtn hidden-xs" data-url="/admin/category/listorderall.html"><i class="iconfont">&#xe656;</i></button>
					</div>
					<div class="layui-inline">
						<input type="text" name="title" placeholder="请输入用户名" autocomplete="off" class="layui-input">
					</div>
					<button class="layui-btn layui-btn-normal" lay-submit="search">搜索</button>
				</div>
			</form>
			<div class="layui-form" id="table-list">
				<table class="layui-table" lay-even lay-skin="nob">
					<colgroup>
						<col width="50">
						<col class="hidden-xs" width="50">
						<col class="hidden-xs" width="100">
						<col>
						<col class="hidden-xs" width="200">
						<col width="80">
						<col width="150">
					</colgroup>
					<thead>
						<tr>
							<th></th>
							<th class="hidden-xs">ID</th>
							<th>用户名</th>
							<th>电话号码</th>
							<th>创建时间</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						@foreach($rs as $k => $v)
						<tr>
							<td></td>
							<td class="hidden-xs">{{$v->id}}</td>
							<td>{{$v->uname}}</td>
							
							<td>{{$v->tel}}</td>
							<td>{{$v->cdate}}</td>
							<td width="200px">
								<div class="layui-inline" >
									<button class="layui-btn layui-btn-mini layui-btn-normal  go-btn" data-id="1" data-url="danye-detail.html"><i class="layui-icon">&#xe642;</i></button>
									<button class="layui-btn layui-btn-mini layui-btn-danger del-btn" data-id="1" data-url="del.html"><i class="layui-icon">&#xe640;</i></button>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			
				<div class="page-wrap">
							{{$rs->links()}}
					</div>
			</div>
		</div>
		<script src="../../static/admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script src="../../static/admin/js/common.js" type="text/javascript" charset="utf-8"></script>
		<script>
			layui.use(['form', 'jquery', 'layer', 'dialog'], function() {
				var $ = layui.jquery;

				//修改状态
				$('#table-list').on('click', '.table-list-status', function() {
					var That = $(this);
					var status = That.attr('data-status');
					var id = That.parent().attr('data-id');
					if(status == 1) {
						That.removeClass('layui-btn-normal').addClass('layui-btn-warm').html('隐藏').attr('data-status', 2);
					} else if(status == 2) {
						That.removeClass('layui-btn-warm').addClass('layui-btn-normal').html('显示').attr('data-status', 1);

					}
				})

			});
		</script>
	</body>

</html>