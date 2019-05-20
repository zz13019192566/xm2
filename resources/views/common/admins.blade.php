
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>网站后台管理模版</title>
		<link rel="stylesheet" type="text/css" href="./admin/layui/css/layui.css"/>
		<link rel="stylesheet" type="text/css" href="./admin/css/admin.css"/>
	</head>
	<body>
		<div class="main-layout" id='main-layout'>
			<!--侧边栏-->
			<div class="main-layout-side">
				<div class="m-logo">
				</div>
				<ul class="layui-nav layui-nav-tree" lay-filter="leftNav">
				  <li class="layui-nav-item layui-nav-itemed">
				    <a href="javascript:;"><i class="iconfont">&#xe607;</i>管理员管理</a>
				    <dl class="layui-nav-child">
				      <dd><a href="javascript:;" data-url="menu1.html" data-id='1' data-text="后台菜单"><span class="l-line"></span>浏览管理员</a></dd>
				      <dd><a href="javascript:;" data-url="menu2.html" data-id='2' data-text="前台菜单"><span class="l-line"></span>添加管理员</a></dd>
				    </dl>
				  </li>
				  <li class="layui-nav-item layui-nav-itemed">
				    <a href="javascript:;"><i class="iconfont">&#xe607;</i>用户管理</a>
				    <dl class="layui-nav-child">
				      <dd><a href="javascript:;" data-url="menu1.html" data-id='1' data-text="后台菜单"><span class="l-line"></span>浏览用户</a></dd>
				    </dl>
				  </li>
				   <li class="layui-nav-item layui-nav-itemed">
				    <a href="javascript:;"><i class="iconfont">&#xe607;</i>分类管理</a>
				    <dl class="layui-nav-child">
				      <dd><a href="javascript:;" data-url="menu1.html" data-id='1' data-text="后台菜单"><span class="l-line"></span>分类信息</a></dd>
				      <dd><a href="javascript:;" data-url="menu1.html" data-id='1' data-text="后台菜单"><span class="l-line"></span>添加分类</a></dd>

				    </dl>
				  </li>
				  <li class="layui-nav-item">
				    <a href="javascript:;"><i class="iconfont">&#xe608;</i>帖子管理</a>
				    <dl class="layui-nav-child">
				      <dd><a href="javascript:;" data-url="article-list.html" data-id='3' data-text="文章管理"><span class="l-line"></span>帖子浏览</a></dd>
				      <dd><a href="javascript:;" data-url="danye-list.html" data-id='9' data-text="单页管理"><span class="l-line"></span>添加帖子</a></dd>
				    </dl>
				     <li class="layui-nav-item">
				    <a href="javascript:;"><i class="iconfont">&#xe608;</i>敏感词管理</a>
				    <dl class="layui-nav-child">
				      <dd><a href="javascript:;" data-url="article-list.html" data-id='3' data-text="文章管理"><span class="l-line"></span>敏感词浏览</a></dd>
				      <dd><a href="javascript:;" data-url="danye-list.html" data-id='9' data-text="单页管理"><span class="l-line"></span>添加敏感词</a></dd>
				    </dl>
				  </li>
				   <li class="layui-nav-item">
				    <a href="javascript:;"><i class="iconfont">&#xe608;</i>轮播图管理</a>
				    <dl class="layui-nav-child">
				      <dd><a href="javascript:;" data-url="article-list.html" data-id='3' data-text="文章管理"><span class="l-line"></span>轮播图浏览</a></dd>
				      <dd><a href="javascript:;" data-url="danye-list.html" data-id='9' data-text="单页管理"><span class="l-line"></span>添加轮播图</a></dd>
				    </dl>
				  </li>
				   <li class="layui-nav-item">
				    <a href="javascript:;"><i class="iconfont">&#xe608;</i>公告管理</a>
				    <dl class="layui-nav-child">
				      <dd><a href="javascript:;" data-url="article-list.html" data-id='3' data-text="文章管理"><span class="l-line"></span>公告浏览</a></dd>
				      <dd><a href="javascript:;" data-url="danye-list.html" data-id='9' data-text="单页管理"><span class="l-line"></span>添加公告</a></dd>
				    </dl>
				  </li>
				  <li class="layui-nav-item">
				    <a href="javascript:;"><i class="iconfont">&#xe608;</i>友情链接</a>
				    <dl class="layui-nav-child">
				      <dd><a href="javascript:;" data-url="article-list.html" data-id='3' data-text="文章管理"><span class="l-line"></span>查看链接</a></dd>
				    </dl>
				  <li class="layui-nav-item">
				    <a href="javascript:;"><i class="iconfont">&#xe608;</i>RBAC</a>
				    <dl class="layui-nav-child">
				      <dd><a href="javascript:;" data-url="article-list.html" data-id='3' data-text="文章管理"><span class="l-line"></span>文章管理</a></dd>
				      <dd><a href="javascript:;" data-url="danye-list.html" data-id='9' data-text="单页管理"><span class="l-line"></span>单页管理</a></dd>
				    </dl>
				  </li>
				  <li class="layui-nav-item">
				    <a href="javascript:;"><i class="iconfont">&#xe608;</i>个人信息</a>
				    <dl class="layui-nav-child">
				      <dd><a href="javascript:;" data-url="article-list.html" data-id='3' data-text="文章管理"><span class="l-line"></span>修改个人信息</a></dd> 
				    </dl>
				  </li>
				  <li class="layui-nav-item">
				  	<a href="javascript:;" data-url="system.html" data-id='6' data-text="系统设置"><i class="iconfont">&#xe60b;</i>系统设置</a>
				  </li>
				</ul>
			</div>
			<!--右侧内容-->
			<div class="main-layout-container">
				<!--头部-->
				<div class="main-layout-header">
					<div class="menu-btn" id="hideBtn">
						<a href="javascript:;">
							<span class="iconfont">&#xe60e;</span>
						</a>
					</div>
					<ul class="layui-nav" lay-filter="rightNav">
					  <li class="layui-nav-item"><a href="javascript:;" data-url="email.html" data-id='4' data-text="邮件系统"><i class="iconfont">&#xe603;</i></a></li>
					  <li class="layui-nav-item">
					    <a href="javascript:;" data-url="admin-info.html" data-id='5' data-text="个人信息">超级管理员</a>
					  </li>
					  <li class="layui-nav-item"><a href="/admin/logout">退出</a></li>
					</ul>
				</div>
				<!--主体内容-->
				<div class="main-layout-body">
					<!--tab 切换-->
					<div class="layui-tab layui-tab-brief main-layout-tab" lay-filter="tab" lay-allowClose="true">
					  <ul class="layui-tab-title">
					    <li class="layui-this welcome">后台主页</li>
					  </ul>
					  <div class="layui-tab-content">
					    <div class="layui-tab-item layui-show" style="background: #f5f5f5;">
								
					    	<!--1-->
					    	<!-- <iframe src="./welcome.html" width="100%" height="100%" name="iframe" scrolling="auto" class="iframe" framborder="0"></iframe> -->
					    	<!--1end-->
								<span style="font-size: 60px;">

							@section('content')

							@show


								</span>

					    </div>
					  </div>
					</div>
				</div>
			</div>
			<!--遮罩-->
			<div class="main-mask">
				
			</div>
		</div>
		<!-- <script type="text/javascript">
			var scope={
				link:'./welcome.html'
			}
		</script> -->
		<script src="./admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script src="./admin/js/common.js" type="text/javascript" charset="utf-8"></script>
		<script src="./admin/js/main.js" type="text/javascript" charset="utf-8"></script>
		
	</body>
</html>


