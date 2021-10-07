<?php
require_once ('../db.php');
$id=$_GET['id'];

$sql="DELETE FROM subject WHERE bid=$id";//数据库查询语句
mysqli_query($conn,'set names utf8');//连接数据库表
if(mysqli_query($conn,$sql)){

      echo"<script>alert('删除成功！'); window.location.href='subject.php';</script>";
  


}else{
  echo"<script>alert('删除失败！'); window.location.href='subject.php';</script>";
  
}






?>
