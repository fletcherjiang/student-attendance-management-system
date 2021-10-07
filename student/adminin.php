<?php
require_once ('../db.php');
session_start();
$student_name=$_POST['admin'];
$student_password=$_POST['password'];
$sql="SELECT * FROM student  WHERE student_name='$student_name'";//数据库查询语句
mysqli_query($conn,'set names utf8');//连接数据库表
$res=mysqli_query($conn,$sql);//查询出数据并赋值
header("Content-type: text/html; charset=utf-8");//头部文件
$ros=mysqli_fetch_assoc($res);

if(!isset($ros)){
    echo"<script>alert('登陆失败！用户名或者密码错误！'); window.location.href='../index.php';</script>";
}else{
    if($ros['student_password']==$student_password){
        echo"<script>alert('登陆成功！'); window.location.href='subject.php';</script>";
	$_SESSION['sid']= $ros['sid'];
        $_SESSION['student']= $student_name;
    }else{

        echo"<script>alert('登陆失败！用户名或者密码错误！'); window.location.href='../index.php';</script>";
    }


}







?>
<?php
