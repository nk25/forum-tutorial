<?php
	session_start();
	
	include ('dbconn.php');
	
	$topic = $_POST['topic'];
	$content = $_POST['content'];
	$cid = $_GET['cid'];
	$scid = $_GET['scid'];
	echo $topic;
	echo $content;
	$a = array($topic,$content,$cid,$scid,$_SESSION['username']);
	print_r($a);
	$insert = mysqli_query($con, "INSERT INTO `topics`( `category_id`, `subcategory_id`, `author`, `title`, `content`) VALUES ('".$cid."','".$scid."','".$_SESSION['username']."','".$topic."','".$content."')");
								  
	if ($insert) {
		header("Location: /forum-tutorial/topics.php/?cid=".$cid."&scid=".$scid."");
	}
?>