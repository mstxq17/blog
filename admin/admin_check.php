<?php
session_start();
echo '<meta charset="utf-8">';
if(isset($_SESSION['username']))
{
	if(!($_SESSION['flag']==1))
	{
		echo "<script>alert('黑客大哥哥，不要欺负人家网站啦！！！')</script>";
		exit;
	}
}else
{
	echo '登陆操作异常点击<a href="javascript:history.back(-1)">返回</a>';
	exit;
}
?>