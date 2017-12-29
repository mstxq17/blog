<?php
ini_set('date.timezone','Asia/Shanghai');
require_once('../config/config.php');
require_once("header.php");
// 分页操作
$num=4;
$page=isset($_GET['p']) ? $_GET['p']:1;
if($page<1)
{
	$page=1;
}
$offset = intval(($page-1)*$num);
// echo $offset;
echo '<div class="wrapper-content">';
echo '<div style="text-align:center;"><h1 style="margin:0px;padding:5px">文章列表</h1></div>';
echo '<div id="blog">';
echo '<ul>';
if ($result=$conn->query("select count(*) as count from articles")) {
	$rows=mysqli_fetch_assoc($result);
	$count=$rows['count'];
	}
$sql = "select id,title,username,create_time,content FROM articles  order by create_time desc LIMIT {$offset},{$num}";
if($result =$conn->query($sql))
{
	//$rows = mysql_fetch_array($result);
	// foreach ($rows as $row) {
	// 	 echo '<li>
	// 	 	<div class="blog-left">
	// 	  	<p ><a href="detail.html" class="title">'.$row['title'].'</a></p>
	// 	  	<p style="margin-top: 20px">'.$row['content'].'</p>
	// 	  	<p style="margin-top: 90px"><i class="fa fa-user-circle" style="font-size:25px;padding:10px;"></i>'.$row['username'].'<i class="fa fa-calendar-times-o" style="font-size:25px;padding:10px;"></i>'.$row['create_time'].'</p>
	// 	  	</div>
	// 	  	</li>';
	// }
	while($row=mysqli_fetch_array($result)){
	 	 echo '<li>
	 	<div class="blog-left">
	  	<p ><a href="../articles.php?id='.$row['id'].'" class="title">'.$row['title'].'</a></p>
	  	<p style="margin-top: 20px">'.$row['content'].'</p>
	  	<p style="margin-top: 90px"><i class="fa fa-user-circle" style="font-size:25px;padding:10px;"></i>'.$row['username'].'<i class="fa fa-calendar-times-o" style="font-size:25px;padding:10px;"></i>'.$row['create_time'].'</p>
	  	</div>
	  	</li>';
	}
}
//计算总页数
$total =ceil($count / $num);
if ($page>$total) {
	$page=$page-1;
}
 echo '</ul>';
 echo '</div>';
 echo '<div class="page">
 <a href="?p=1">首页</a>';
 echo '<a href="?p='.($page-1).'">上一页</a>';
for ($p=$page; $p<=$page+2; $p++) { 
	if($p<=$total)
	{
	echo '<a href="?p='.$p.'">'.$p.'</a>';
}
}
if ($p<=$total) {
	echo '<a href="#">...</a><a href="?p='.$total.'">尾页</a>';
}else
{
	echo '<a href="?p='.$total.'">尾页</a>';
}
 echo '</div>
 </div>
 </div>';
require_once("footer.php");
?>