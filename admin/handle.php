<?php
require_once('../config/config.php');
require_once('admin_check.php');
echo '<meta charset="utf-8">';
if(!(isset($_POST['title'])&&(!empty($_POST['title']))))
{
	echo "<script>alert('标题不能为空');history.go(-1);</script>";
	exit;
}
$title = htmlspecialchars(addslashes($_POST['title']));
$author = htmlspecialchars(addslashes($_POST['username']));
$content = htmlspecialchars($_POST['content'],ENT_QUOTES);
$sql = "insert into articles(title,username,content) values('$title','$author','$content')";
if($result=$conn->query($sql))
{
	echo "<script>alert('发表文章成功');window.location.href='publish.php';</script>";
}else
{
	echo "<script>alert('xq17表示懵b了,发表文章失败');history.go(-1);</script>";
}
?>