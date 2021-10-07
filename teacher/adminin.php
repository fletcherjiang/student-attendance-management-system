<?php
require_once ('../db.php');
session_start();
$teacher_name=$_POST['admin'];
$teacher_password=$_POST['password'];
$sql="SELECT * FROM teacher  WHERE teacher_name='$teacher_name'";//数据库查询语句
mysqli_query($conn,'set names utf8');//连接数据库表
$res=mysqli_query($conn,$sql);//查询出数据并赋值
header("Content-type: text/html; charset=utf-8");//头部文件
$ros=mysqli_fetch_assoc($res);

if(!isset($ros)){
    echo"<script>alert('登陆失败！用户名或者密码错误！'); window.location.href='../index.php';</script>";
}else{
    if($ros['teacher_password']==$teacher_password){
	    $_SESSION['teacher']= $teacher_name;
	    $_SESSION['tid']= $ros['tid'];
        echo"<script>alert('登陆成功'); window.location.href='subject.php';</script>";
        
    }else{

        echo"<script>alert('登陆失败！用户名或者密码错误！！'); window.location.href='../index.php';</script>";
    }


}







?>
<?php
