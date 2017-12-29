<?php
require_once('db_config.php');
$conn=mysqli_connect($dbhost,$dbusername,$dbpassword);
// mysqli_set_charset($conn,"utf-8");
if(!$conn)
{
	die('Could not connect:'.mysqli_errno($conn));
}else
{
	echo 'success!!';
}
//创建数据库
$sql = "CREATE DATABASE blog";
if($query=$conn->query($sql))
{
	echo "</br>";
	echo "create successful!!";
}else
{
	echo "failed to built databae".mysqli_errno($conn);
}
mysqli_select_db($conn,$dbname);
$sql1 = "DROP TABLE IF EXISTS articles";
$query=$conn->query($sql1);
$sql2 = "CREATE TABLE articles (
	id mediumint(8) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	username char(20) NOT NULL ,
	title varchar(120) NOT NULL ,
	content mediumtext NOT NULL ,
	create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	updatetime int(10) unsigned NOT NULL default '0'
) ENGINE = MYISAM;";
if($query=$conn->query($sql2))
{
echo  "</br>";
echo "success";
}
else
{
	echo mysqli_error();
}
// mysql_close($conn);
?>