
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>网站后台管理模版</title>
		<link rel="stylesheet" type="text/css" href="/admin/layui/css/layui.css" />
		<link rel="stylesheet" type="text/css" href="/admin/css/admin.css" />
	</head>
	<body>
		<div class="wrap-container">
				<form class="layui-form" action="/admin/user" method="post" style="width: 90%;padding-top: 20px;">
					<div class="layui-form-item">
						<label class="layui-form-label">菜单分类：</label>
						<div class="layui-input-block">
							<select name="power" lay-verify="required">
								<option value="">权限选择</option>
								<option value="0">普通管理员</option>
								<option value="1">超级管理员</option>
								
							</select>
						</div>
					</div>
				
					
				
					<div class="layui-form-item">
						<label class="layui-form-label">用户名 : &nbsp;</label>
						<div class="layui-input-block">
							<input type="text" name="uname" required lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
						</div>
					</div>
					


					<div class="layui-form-item">
						<label class="layui-form-label">密&nbsp;&nbsp;&nbsp;&nbsp;码 : &nbsp;</label>
						<div class="layui-input-block">
							<input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
						</div>
					</div>

					<div class="layui-form-item">
						<label class="layui-form-label">确认密码 : &nbsp;</label>
						<div class="layui-input-block">
							<input type="password" name="password1" required lay-verify="required" placeholder="请再次输入密码已确认" autocomplete="off" class="layui-input">
						</div>
					</div>
					

					<div class="layui-form-item">
						{{csrf_field()}}
						<div class="layui-input-block">
							<button class="layui-btn layui-btn-normal" lay-submit lay-filter="formDemo">立即提交</button>
							<button type="reset" class="layui-btn layui-btn-primary">重置</button>
						</div>
					</div>
				</form>
		</div>

		
		
	</body>

</html>