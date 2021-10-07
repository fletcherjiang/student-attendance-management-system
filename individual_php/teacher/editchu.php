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
				
				
			})
		</script>
	</head>
	<body class="bj">
		<div class="cont">
			
			<?php include"left.php";?>
			<div class="right">
				<div class="fenge"></div>
				<div class="ccont">
					<h1>Edit State</h1>
					
					<form action="editinchu.php" method="post">
					<?php
					$id=$_GET['id'];
    
					echo"<input type='hidden' name='id'value='".$id."'/>";

					?>
                     
                                        <?php
                                        
				require_once ('../db.php');
				$tid=$_SESSION['tid'];
				$sql = "select * from subject where tid='$tid'   order by bid desc "  ;//数据库查询
					
				           
				     mysqli_query($conn,'set names utf8');
				     $res=mysqli_query($conn,$sql);//查询出数据并赋值
				     header("Content-type: text/html; charset=utf-8");//头部文件
                                     
                                     
                                     echo "<div class='cts'>
                                            
						<span>Courses</span>
						<select class='change' name='bid'>";
                                                
				     while($ros=mysqli_fetch_assoc($res)) {   

					    echo "
						<option value=".$ros['bid'].">".$ros['sub_title']."</option> ";
					 
						}
                                            echo "</select>
					</div>";
                                            
                                            

						?>
                                            
                                            
                                            
					<div class="cts">
                                            
						<span>Courses</span>
						<select class="change" name="state">
							<option value="0">缺席</option>
                                                        <option value="2">正常签到</option>
                                                        <option value="3">早退</option>
							<option value="4">上课分心</option>						
						</select>
					</div>
                                            
<!--                                        <div class="cts">
						<span>Check in time</span>
                                                <input type="datetime-local" name="dates" placeholder="input subject"/>
					</div>-->
					
					
					<input type="submit" value="Add" class="css"/>
					
					</form>
				</div>
				
			</div>
			
		</div>
		
		
	</body>
</html>
