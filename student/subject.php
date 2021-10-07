<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student Attendance Management System</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css"/>
		<script src="../js/jquery.js"></script>
		<script type="text/javascript">
			$(function(){
				
				$(".cont").height($(window).height());
				var time = Date.parse(new Date());
				var mydate = new Date();
				mydate.getDay(); 
				console.log(time);
                              
				
			})
		</script>
	</head>
	<body class="bj">
		<div class="cont">
			
			<?php include"left.php";?>
			<div class="right">
				<div class="fenge"></div>
				<table class="mt" cellpadding="0" cellspacing="0" border="0">
				      <tr>
				           <td>Course Name</td>
				           <td>Start time</td>
					   <td>End time</td>
				           <td>Check in with link</td>
                                           <td>Entering class</td>
				      </tr>
				<?php
//				session_start();
				$sid=$_SESSION['sid'];
				require_once ('../db.php');
				$day=date("w");
				$sql = "select * from subject  order by bid desc "  ;//数据库查询
					
				           
				     mysqli_query($conn,'set names utf8');
				     $res=mysqli_query($conn,$sql);//查询出数据并赋值
				     header("Content-type: text/html; charset=utf-8");//头部文件
				
				     while($ros=mysqli_fetch_assoc($res)) {   
						
							 
					 
					    echo"  <tr>
						    <td>".$ros['sub_title']."</td>
						    <td>".$ros['start_time']."</td>
						    <td>".$ros['end_time']."</td>
						    ";
						   if($day==$ros['sub_day']) {
							   
							echo"
							<td><a href='checkin.php?id=".$ros['bid']."&&start_time=".$ros['start_time']."&&endtime=".$ros['end_time']."&&tid=".$ros['tid']."&&sid=".$sid."'>".$ros['href']."</a></td>
							";   
							   
						   }else{
							   
							  echo "<td>There's no class today</td>"; 
							   
						   }
                                                   
                                                   if($day==$ros['sub_day']) {
                                                         echo "<td><a href='".$ros['href']."'target =’_blank'>Enter</a> </td>";

                                                    }else{
							   
							  echo "<td>Not allowed</td>"; 
							   
                                                     }
						   	   echo " </tr>";
						    
						    
						    
					 
						}
						
						
						
						
						
						
						?>
				  </table>
			</div>
			
		</div>
		
		
	</body>
</html>
