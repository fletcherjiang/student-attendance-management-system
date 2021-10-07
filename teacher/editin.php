<?php
require_once ('../db.php');
 
    
    $id=$_POST['id'];
    $state=$_POST['state'];
    if($state==0){
	    $sql="DELETE FROM checkin WHERE cid=$id";//数据库查询语句
	   if(mysqli_query($conn,$sql)){
	   
	         echo"<script>alert('改为缺席成功！'); window.location.href='subject.php';</script>";
	     
	   
	   
	   }else{
	     echo"<script>alert('改变缺席失败！'); window.location.href='subject.php';</script>";
	     
	   }
	    
	    
    }else{
	    
	  $sql="UPDATE checkin SET state ='$state' WHERE cid = $id";//数据库查询语句
	  mysqli_query($conn,'set names utf8');//连接数据库表
	  if(mysqli_query($conn,$sql)){
	      echo"<script>alert('更新状态成功！'); window.location.href='subject.php';</script>";
	  }else{
	     echo"<script>alert('更新状态失败！'); window.location.href='subject.php';</script>";
	  }
	    
	    
    }
    
    


?>