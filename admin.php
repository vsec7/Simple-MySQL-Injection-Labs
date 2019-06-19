<?php
session_start();
error_reporting(0);
include('config.php');
?>

<html>
	<head>
		<title>Administrator Page</title>
	</head>
	<center>
		<h1>Administrator Page</h1>
<?php
if(!isset($_SESSION['shl'])){
	?>
		<form method='POST'>
			<br>
			<table>
				<tr><td>Username</td><td>: <input type='text' name='user'></td></tr>
				<tr><td>Password</td><td>: <input type='password' name='pass'></td></tr>
				<tr><td></td><td> <input type='submit' value='Login'></td></tr>
			</table>
		</form>
<?php
}

if(isset($_POST['user'])&&isset($_POST['pass'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	//$pass = md5($_POST['pass']);
	$query = "SELECT * FROM login WHERE `user`='$user' AND `pass`='$pass'";
	$r = mysqli_query($con,$query);
	$cans = mysqli_fetch_array($r);

	if(!empty($cans)){
		$_SESSION['shl'] = array($cans['user'],$user,$pass);
		header('location: ?');
	}else{
		echo "<font color=red><b>Username/Password Salah !</b></font><br>";
	}

echo "<br><span style=background-color:black><font color=orange>SELECT * FROM login WHERE `user`='<font color=red>$user</font>' AND `pass`='<font color=red>$pass</font>'</font></span>";
}

if(isset($_SESSION['shl'])){
	echo "<h2>Welcome <font color=red>". $_SESSION['shl'][0]."</font> </h2><br> <a href=?logout>[LOGOUT]</a><br>";
	echo "<br><span style=background-color:black><font color=orange>SELECT * FROM login WHERE `user`='<font color=red>".$_SESSION['shl'][1]."</font>' AND `pass`='<font color=red>".$_SESSION['shl'][2]."</font>'</font></span>";
}

if(isset($_GET['logout'])){
	session_destroy();
	header('location: ?');
}
