<?php
session_start();
require_once ('../db.php');
$user=$_SESSION['student'];
$sid=$_SESSION['sid'];
$start_times=$_GET['start_time'];
$id=$_GET['id'];
$tid=$_GET['tid'];
//比较时间


				$sql = "select * from subject where bid ='$id'"  ;//数据库查询
				mysqli_query($conn,'set names utf8');
			       $res=mysqli_query($conn,$sql);//查询出数据并赋值
			       header("Content-type: text/html; charset=utf-8");//头部文件	
				$ros=mysqli_fetch_assoc($res);
				$nowtime=date('Y-m-d H:m');
				$ctime=date('Y-m-d ').$ros['start_time'];
				$btime=date('Y-m-d ').$ros['end_time'];
				$n= strtotime($nowtime)."<br/>";
				$b= strtotime($btime);
				$c= strtotime($ctime);//开始时间
				echo $c."</br/>";
				echo $b."</br/>";
				echo $n."</br/>";
				
				if($n<$c or $n>$b ){
					
					echo"<script>alert('It is past the check-in time'); window.location.href='subject.php';</script>";
				}else{
					
					$check="select * from checkin where bid ='$id' and sid='$sid'" ;
					$checkres=mysqli_query($conn,$check);//查询出数据并赋值
					$checkros=mysqli_fetch_assoc($checkres);
					if(!isset($checkros['bid'])){
						$dates=date('Y-m-d,H:m:s');
						$updates="INSERT INTO checkin(tid,bid,sid,state,dates)VALUES('$tid', '$id', '$sid', '2','$dates')";//数据库查询
//						mysqli_query($conn,$updates);
//                                                echo mysqli_error(conn);
						if(mysqli_query($conn,$updates)){
						    echo"<script>alert('签到成功！'); window.location.href='subject.php';</script>";
						}else{
						   echo"<script>alert('签到失败！'); window.location.href='subject.php';</script>";
						}

					}else{
						
					echo"<script>alert('You have signed up in the same period'); window.location.href='subject.php';</script>";	
						
					}
							
}
				
	
	
	



?>