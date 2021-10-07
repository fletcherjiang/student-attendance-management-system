<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student Attendance Management System</title>
		<link href="web/css/style.css" rel="stylesheet" type="text/css"/>
		<script src="web/js/jquery.js"></script>
		<script type="text/javascript">
			$(function(){
				
				$(".login").height($(window).height());
				$(".change").change(function(){
					
					if($(".change").val()=="1"){
						$("#ac").attr("action","LoginUser");
						return false;
					}
					
					if($(".change").val()=="2"){
						$("#ac").attr("action","LoginServlet");
						return false;
					}
					
				})
				
			})
		</script>
	</head>
	<body class="bj">
		<div class="login">
			<form action="LoginUser" method="post" id="ac">
				
			<div class="lc">
				<h1>Student Attendance Management System</h1>
				<div class="ct">
					<span>Identity</span>
					<select class="change">
						<option value="1">Student</option>
						<option value="2">Teacher</option>
					</select>
				</div>
				<div class="ct">
					<span>Name</span>
                                        <input type="text" name="admin" placeholder="Input username (E.g: JIANG Yiyang)"/>
				</div>
				<div class="ct">
					<span>Password</span>
                                        <input type="password" name="password" placeholder="Input password (Default: 123456)"/>
				</div>
				<input type="submit" value="login" class="cs"/>
				
			</div>	
				
				
				
			</form>
			
			
		</div>
		
		
	</body>
</html>
