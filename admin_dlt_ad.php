<?php
	include "conn.php";
	if(!(isset($_GET['adId'])) || $_GET['adId'] == ""){
		header("location: adminallproduct.php");
	}else{
		$adId = $_GET['adId'];
	}
	session_start();
    $conn = connect::connected(); 
     $q = "SELECT image FROM images WHERE postId = $adId";
     $res = $conn->query($q);
     $query = $conn->query("DELETE FROM `postad` WHERE `postId` = $adId");
     while($data = $res->fetch_assoc()){
     	$path = "PostImg/".$data['image'];
     	//echo $path;
     	unlink($path);
     	$conn->query("DELETE FROM `images` WHERE `postId` = $adId");     	
     }
     echo "<script>window.location='adminallproduct.php?submit=deleted';</script>";

 
      //$query = $conn->query("delete from postad where postId=$adId");
	//echo "<script>window.location='adminallproduct.php?submit=deleted';</script>";

?>