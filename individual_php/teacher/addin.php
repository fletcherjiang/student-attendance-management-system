<?php
require_once ('../db.php');

$sub_title=$_POST['sub_title'];
$sub_day=$_POST['sub_day'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$href=$_POST['href'];
$tid=$_POST['tid'];


$sql="INSERT INTO subject(sub_title,sub_day,start_time,end_time,href,tid)VALUES('$sub_title', '$sub_day', '$start_time', '$end_time', '$href','$tid')";//数据库查询语句
mysqli_query($conn,'set names utf8');//连接数据库表
//mysqli_query($conn,$sql);
echo mysqli_error($conn);
if(mysqli_query($conn,$sql)){
    echo"<script>alert('success'); window.location.href='subject.php';</script>";
}else{
   echo"<script>alert('error'); window.location.href='subject.php';</script>";
}
?>