<?php

$conn=mysqli_connect("127.0.0.1","root","root","study");//填写数据库的，地址，数据库用户名，密码，数据库名
if(!$conn){
die("对不起连接错误！");//如果连接错误提示

}