<!DOCTYPE html>
<html>
<head>
	<title>登录页面</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script type="text/javascript">
		function foo()
		{
			if(myform.name.value=="")
			{
				alert("请输入用户名");
				myform.name.focus();
				return false;
			}
			if(myform.password.value=="")
			{
				alert("请输入密码");
				myform.password.focus();
				return false;
			}
		}
	</script>
</head>
<body style="background: #444 url(../images/timg.jpg);
 	background-size: cover;
 	background-attachment: fixed;
 		background-position: center;">
	<form action="login.php" method="POST" onsubmit="return foo();" name="myform">
		<div class="container">
			<div class="right">
				<p style="position: relative;left:70px">
					飞往神奇的世界
				</p>
				<p>
					用户名:<input type="text" name="username" id='name' placeholder="请输入用户名">
				</p>
				<p>
					密&#12288码:<input type="password" name="password" id="password" placeholder="请输入密码">
				</p>
				<p style="padding: 20px">
					<button>立刻登录</button>
				</p>
			</div>
		</div>
	</form>
</body>
</html>