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
					
					<form action="editin.php" method="post">
					<?php
					$id=$_GET['id'];
					echo"<input type='hidden' name='id'value='".$id."'/>";
					?>
					
                                            
                                        
					<div class="cts">
						<span>state</span>
						<select class="change" name="state">
							<option value="0">缺席</option>
                                                        <option value="2">正常签到</option>
                                                        <option value="3">早退</option>
							<option value="4">上课分心</option>

						</select>
					</div>
					
					
					<input type="submit" value="Add" class="css"/>
					
					</form>
				</div>
				
			</div>
			
		</div>
		
		
	</body>
</html>
