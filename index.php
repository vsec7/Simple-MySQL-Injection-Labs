<?php

include('config.php');
include('waf.php');

// Coded by Versailles - viloid - cans21
// Sec7or Team - Surabaya HackerLink
// Simple SQL injection in GET Method ( Union Based )

if(isset($_GET['id'])){

	$id = $_GET['id'];	
	//$id = waf_replace($_GET['id']);
	//$id = waf_block_word($_GET['id']);

	/*
	$id = waf_addslashes($_GET['id']);
	mysqli_query($con,"SET NAMES gbk");  // Untuk bypass Addslashes() query Mysql harus menggunakan charset big5 / gbk (multibyte character)
	*/

	$query = "SELECT * FROM gath39 WHERE id = $id LIMIT 0,1"; // Integer based
    //$query = "SELECT * FROM gath39 WHERE id = '$id' LIMIT 0,1"; // String based
    $result = mysqli_query($con,$query) or mysqli_error($con);
    $row = mysqli_fetch_array($result);

    /* Routed Injection

    $query2 = "SELECT image, quote FROM gath39 WHERE id = '$row[id]' ORDER BY id ASC";
    $result2 = mysqli_query($con,$query2) or mysqli_error($con);
    $row2 = mysqli_fetch_array($result2);
	*/

	/* ----------------------------------------
	//Mencegah SQLi dengan Mysqli Prepare Statement 

    $stmt = $con->prepare("SELECT * FROM gath39 WHERE id = ? LIMIT 0,1");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    */
    
?>

<html>
<head>
<title><?=$row['title'];?></title>
</head>

<body>
	<br><br>
	<center>
		<h2> <a href="index.php?id=1">[ HOME ]</a> | <a href="insert.php">[ INPUT ]</a> </h2>
		<img src="<?=$row['image'];?>">
		<h2><?=$row['quote'];?></h2>
		<span style=background-color:black><font color=lime> QUERY :</font> <font color=red><?php if(isset($query)){ echo $query;} else echo $_GET['id'];?></font></span>		
	</center>

<?php
}else 
	header('Location: index.php?id=1');

?>
</body>
</html>