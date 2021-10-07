<?php session_start();?>
<div class="left">
				
				
				<h1>Student Attendance Management System</h1>
				<?php
				 if($_SESSION['teacher']=="bell"){
					 
					 echo"<h3>Welcome! Dr. Bell Liu</h3>";
					 
				 }else if($_SESSION['teacher']=="fan"){
					 echo"<h3>Welcome! Dr. Yan Fan</h3>";
					 
				 }else if($_SESSION['teacher']=="pang"){ 
					 echo"<h3>Welcome! Dr. Ka Man PANG</h3>"; 
				 } else {
                                    echo"<script>alert('请先登录！'); window.location.href='../index.php';</script>";
                                 }
				 
				 
				 ?>
				<a href="add.php">Add Course</a>
				<a href="subject.php">My Courses</a>
				<a href="../no.php">Exit</a>
                                <a href="#" onclick='if(confirm("Warning!!!!! This feature is cleared once a week at the end of the week. You will delete all student attendance records, which is irreversible. If you are sure to delete it, click Yes, if not, click No."))
                                {location.href="empty.php";}'style="display: block; margin: 15px; width: 90%; height: 50px; 
                                   background: darkred; line-height: 45px; color: #fff; text-align: left;text-decoration: none; margin-top: 500px;border-bottom: #25456a">
                                    Clear all student attendance records</a>
				
			</div>