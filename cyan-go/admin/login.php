<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>
<link type="text/css" rel="stylesheet" href="css/admin.css">
<link type="text/css" rel="stylesheet" href="css/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="../js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="../js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body>
<div class="headerBar">
	<div class="logoBar login_logo">
		<div class="comWidth">
			<div class="logo fl">
				<a href="#"><img src="img/logo.jpg" alt="cyanshop"></a>
			</div>
			<h3 class="welcome_title">欢迎登陆</h3>
		</div>
	</div>
</div>

<div class="loginBox">
	<div class="login_cont">
	<form action="dologin.php" method="post">
			<ul class="login">
				<li class="l_tit">管理员帐号</li>
				<li class="mb_10"><input type="text"  name="username" placeholder="请输入管理员帐号"class="login_input user_icon"></li>
				<li class="l_tit">密码</li>
				<li class="mb_10"><input type="password"  name="password" class="login_input password_icon"></li>
				<li class="autoLogin"><input type="checkbox" id="a1" class="checked" name="autoFlag" value="1"><label for="a1">自动登陆(一周内自动登陆)</label></li>
				<li><input type="submit" value="登录" class="login_btn"></li>
			</ul>
		</form>
	</div>
</div>

<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">cyanblog简介</a><i>|</i><a href="#">cyanblog公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-675-1234</p>
	<p>copyright © 2016 Cyan | 京ICP备15060006号-1&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="img/webLogo.jpg" alt="logo"></a><a href="#"><img src="img/webLogo.jpg" alt="logo"></a><a href="#"><img src="img/webLogo.jpg" alt="logo"></a><a href="#"><img src="img/webLogo.jpg" alt="logo"></a></p>
</div>
</body>
</html>
