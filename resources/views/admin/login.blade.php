<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>{{$title}}</title>
		<link rel="stylesheet" type="text/css" href="../../static/admin/layui/css/layui.css" />
		<link rel="stylesheet" type="text/css" href="../../static/admin/css/login.css" />
		<script src="../../js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<!-- <link rel="stylesheet" type="text/css" href="../../js/jquery.min.js" /> -->
<!-- 		<style type="text/css">
			.mws-form-message{
			    background-color: #ffcbca;
			    background-image: url(../images/core/message-error.png);
			    background-repeat:no-repeat;
			    border-color: #eb979b;
			    color: #9b4449;
			    line-height: 27px
			}
		</style> -->


		<style type="text/css">
			.mws-form-message{
			    background-color: #ffcbca;
			    background-image: url(../../admin/images/core/message-error.png);
			    background-repeat:no-repeat;
			    border-color: #eb979b;
			    color: #9b4449;
			    line-height: 27px;
			    margin-bottom:15px;

			}
		</style>


 <i class="layui-layer-ico layui-layer-ico5"></i>
	</head>

	<body>
		<div class="m-login-bg">
			<div class="m-login">
				<h3>后台系统登录</h3>
				<div class="m-login-warp">
					@if(session('error'))
                		<div class="mws-form-message">
                    <li style="font-size:12px; margin-left:30px">{{session('error')}} </li>
                		</div>
              		@endif
					
                	@if(session('success'))
                		<div class="mws-form-message">
                    <li style="font-size:12px; margin-left:30px">{{session('success')}} </li>
                		</div>
                	@endif


					<form class="layui-form" action="/admin/dologin" method="post">
						<div class="layui-form-item">
							<input type="text" name="username" required lay-verify="required" placeholder="用户名" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-form-item">
							<input type="password" name="password" required lay-verify="required" placeholder="密码" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-form-item">
							<div class="layui-inline">
								<input type="text" name="code" required lay-verify="required" placeholder="验证码" autocomplete="off" class="layui-input">
							</div>
							<div class="layui-inline">
								<img class="verifyImg" onclick="this.src=this.src+'?c='+Math.random();" src="/admin/captcha" />
							</div>
						</div>
						<div class="layui-form-item m-login-btn">
							<div class="layui-inline">
								{{csrf_field()}}
								<button class="layui-btn layui-btn-normal" lay-submit lay-filter="login">登录</button>
								
							</div>
							<div class="layui-inline">
								<button type="reset" class="layui-btn layui-btn-primary">取消</button>
							</div>
						</div>
					</form>
				</div>
				<p class="copyright">Copyright 2015-2016 by XIAODU</p>
			</div>
		</div>
		<script type="text/javascript">
			setTimeout(function(){
				$('.mws-form-message').slideUp(500);
			},1500)
		
		</script>
	</body>

</html>
