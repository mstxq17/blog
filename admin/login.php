<?php  
session_start();
echo '<meta charset="utf-8">';
$admin="lover";
$password="loverisweak";
if($_POST['username']==$admin && $_POST['password']==$password)
	{
		$_SESSION['username']=$admin;
		$_SESSION['flag']=1;
		 echo "<script>alert('登录成功');location='publish.php'</script>";
	}else
	{
		echo "<script>alert('大笨蛋,你输错了');history.go(-1);</script>";
	}
?>