<?php
ini_set('date.timezone','Asia/Shanghai');
require_once('/config/config.php');
require_once("/tmplate/header.php");
echo '<div class="article-wrapper">
	<div class="ulist">
    	<section> <a href="#"> <img src="images/xq17.png"></a>
      	<ul>
        	<h2><a href="#">执子之手，与子偕老</a></h2>
        	<p>一个行走在黑暗的少年,无人疼爱...</p>
      	</ul>
    	</section>
		</div>
		<hr>';
$id = $_GET['id'] ? $_GET['id']:1;
$sql = "select username,content,title,date_format(create_time,'%Y-%m-%d') as create_time from articles where id=".intval($id);
if($result=$conn->query($sql))
{
	$rows=mysqli_fetch_array($result);
	// print_r($rows);
	// foreach ($rows as $key=>$value) {
	// 	echo '<div id="article-title">';
	// 	<h1><i class="fa fa-wifi" style="font-size:48px;color:#fff;"></i></h1>
	// echo '</div>
	// </div>';
	// 	}	
	echo '<div id="article-title">';
	echo '<h1><i class="fa fa-wifi" style="font-size:48px;color:#fff;margin-right:20px;"></i>'.$rows['title'].'</h1>';
	echo '<p style="font-size:20px;font-weight:700;font-style:italic;padding:50px;">'.$rows['content'].'</p>';
	echo '<div class="author"><p>author:'.$rows['username'].'</p>
			<p>time:'.$rows['create_time'].'</p></div>';

	echo '</div>';
}
 echo '</div>';
require_once("/tmplate/footer.php");
?>