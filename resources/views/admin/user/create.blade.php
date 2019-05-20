
<style>
.mws-form-message.error {
    background-color: #ffcbca;
    background-image: url(../images/core/message-error.png);
    background-repeat:no-repeat;
    border-color: #eb979b;
    color: #9b4449;
    line-height: 27px
}
</style>
@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="font-size:12px; margin-left:30px">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


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
						<label class="layui-form-label">用户名 : &nbsp;</label>
						<div class="layui-input-block">
							<input type="text" name="uname"   placeholder="请输入用户名6-12位非特殊符号组成" autocomplete="off" class="layui-input">
						</div>
					</div>

					<div class="layui-form-item">
						<label class="layui-form-label">手机号 : &nbsp;</label>
						<div class="layui-input-block">
							<input type="text" name="tel"   placeholder="请输入正确的手机号码" autocomplete="off" class="layui-input">
						</div>
					</div>


					<div class="layui-form-item">
						<label class="layui-form-label">密&nbsp;&nbsp;&nbsp;&nbsp;码 : &nbsp;</label>
						<div class="layui-input-block">
							<input type="password" name="password" placeholder="请输入密码8-16位由字母数字下划线组成" autocomplete="off" class="layui-input">
						</div>
					</div>

					<div class="layui-form-item">
						<label class="layui-form-label">确认密码 : &nbsp;</label>
						<div class="layui-input-block">
							<input type="password" name="password1"  placeholder="请再次输入密码已确认" autocomplete="off" class="layui-input">
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
		<script src="../../static/admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script src="../../admin/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		
		
	</body>

</html>
	<script>
		setTimeout(function(){
			$('.mws-form-message').slideUp(1500);
		},3000)
		
	</script>
