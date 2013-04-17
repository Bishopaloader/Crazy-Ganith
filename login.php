<?php
require 'current_page.php';
require 'connection.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT `id` FROM `users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."' ";
if($query_run = mysql_query($query)){
	$query_num_rows = mysql_num_rows($query_run);
	if($query_num_rows==0){
		echo 'user does not exist';
	} 	else if($query_num_rows==1){
		$user_id = mysql_result($query_run,0,'id');
		$_SESSION['user_id']= $user_id;
		header('Location: index.php');
		
		}
	}
	
?>

</body>

</html>
