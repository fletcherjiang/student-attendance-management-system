<?php
require_once ('../db.php');

$sql = "truncate table checkin";


if(mysqli_query($conn,$sql )){
	echo"<script>alert('success'); window.location.href='subject.php';</script>";
}else{
	
	echo"<script>alert('error'); window.location.href='subject.php';</script>";
}

?>