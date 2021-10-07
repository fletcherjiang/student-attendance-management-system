<?php session_start();


require_once ('../db.php');

    $sid=$_POST['id'];
    $state=$_POST['state'];
    $bid=$_POST['bid'];
    $dates=$_POST['dates'];
    
    if($_SESSION['teacher']=="bell"){
					 
    $tid=1;
					 
     }else if($_SESSION['teacher']=="fan"){
     $tid=2;

     }else if($_SESSION['teacher']=="pang"){
       $tid=3;
     } else {
         
        echo"<script>alert('请先登录！'); window.location.href='../index.php';</script>";
     }
    

    
    if($state>-1){
          $dates=date('Y-m-d,H:m:s');
	  $sql="INSERT INTO checkin(`tid`, `bid`, `sid`, `state`, `dates`) VALUES ('$tid', '$bid', '$sid', '$state', '$dates');";//数据库查询语句
	  mysqli_query($conn,'set names utf8');//连接数据库表
          echo mysqli_error($conn);
	   if(mysqli_query($conn,$sql)){
	   
	         echo"<script>alert('修改成功！'); window.location.href='student.php?id=".$bid."';</script>";
	     
	   
	   
	   }else{
	     echo"<script>alert('修改失败！'); window.location.href='student.php?id=".$bid."';</script>";
	     
	   }
	    
	    
    }else{
	    
	  
	     echo"<script>alert('出现未知错误，请退出系统重新登陆。'); window.location.href='student.php?id=".$bid."';</script>";
	  
	    
	    
    }
    
    


?>