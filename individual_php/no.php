<?php
session_start();
if(session_destroy()){
	 echo"<script>alert('退出成功！'); window.location.href='index.php';</script>";
	
	
}


?>