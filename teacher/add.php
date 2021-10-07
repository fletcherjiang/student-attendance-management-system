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
					<h1>Add Course</h1>
					
					<form action="addin.php" method="post">
					
					<div class="cts">
						<span>Course</span>
						<input type="text" name="sub_title" placeholder="Input Course name(e.g.AST10XXX Xxxxx)"/>
					</div>
					<div class="cts">
						<span>Zoom link</span>
						<input type="text" name="href" placeholder="Input Zoom/WebEx link"/>
					</div>
					<div class="cts">
						<span>Teacher</span>
						<select class="change" name="tid">
							<option value="1">Dr. Bell</option>
							<option value="2">Dr. Yan</option>
							<option value="3">Dr. PANG</option>
						</select>
					</div>
					
					
					<div class="cts">
						<span>Change day</span>
						<select class="change" name="sub_day">
							<option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
							<option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
							<option value="5">Friday</option>
						</select>
					</div>
					
					<div class="cts">
						<span>Start time</span>
						<input type="time" name="start_time" placeholder="input subject"/>
					</div>
					
					<div class="cts">
						<span>End time</span>
						<input type="time" name="end_time" placeholder="input subject"/>
					</div>
					<input type="submit" value="Add" class="css"/>
					
					</form>
				</div>
				
			</div>
			
		</div>
		
		
	</body>
</html>
