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
				
				
			})
                      
                        function con(){
                            var cfm = confirm("确认吗? ");
                            if(cfm) {
                                return true;
                            }
                            else {
                                return false;
                            }
                        }

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
					    <td>Student list</td>
				           <td>Delete</td>
				      </tr>
				<?php
				require_once ('../db.php');
				$tid=$_SESSION['tid'];
				$sql = "select * from subject where tid='$tid'   order by bid desc "  ;//数据库查询
					
				           
				     mysqli_query($conn,'set names utf8');
				     $res=mysqli_query($conn,$sql);//查询出数据并赋值
				     header("Content-type: text/html; charset=utf-8");//头部文件
				
				     while($ros=mysqli_fetch_assoc($res)) {   
						
							 
					 
					    echo"   <tr>
						     <td>".$ros['sub_title']."</td>
						    <td>".$ros['start_time']."</td>
						    <td>".$ros['end_time']."</td>
						     <td><a href='student.php?id=".$ros['bid']."'>View my students</a></td>
						     <td><a href='delete.php?id=".$ros['bid']."'>Delete this course</a></td>
						    </tr>
							 ";
					 
						}
						
						
						
						
						
						
						?>
				  </table>
			</div>
			
		</div>
		
		
	</body>
</html>
