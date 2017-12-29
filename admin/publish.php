<?php
	require_once("admin_check.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>后台管理系统-发表文章</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header>
		<nav id="nav">
			<div class="header">
				<ul>
				<li><a href="#" style=" color: #fff; background: #299982; transform:skewX(10deg);-webkit-transform:skewX(10deg);-o-transform:skewX(10deg);-ms-transform:skewX(10deg);-moz-transform:skewX(10deg)">网站后台管理</a></li>
				<li><a href="edit.php" style="float:right;">编辑文章</a></li>
				<li><a href="publish.php" style="float:right;">发表文章</a></li>
				</ul>
		</div>
		</nav>
	</header>
	<content>
		<div id="content">
			<h1>文章发表</h1>
			<form  method="POST" action="handle.php">
				<div class="c-1">
					文章标题:<input type="text" name="title">
				</div>
				</br>
				<div class="c-1">
					作者名称:<input type="text" name="username">
				</div>
				</br>
				<div class="c-1">
					<p style="font-size: 20px">内容</br><textarea name="content" cols="106" rows="32"></textarea></p>
				</div>
				<div class="c-1">
					<p><input type="submit" name="button" value="发表文章" style="border:none;background: #333;color: #eee;border-radius: 10px;padding: 10px"></p>
				</div>
			</form>
		</div>
	</content>
</body>
</html>