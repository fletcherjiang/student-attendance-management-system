<?php session_start();?>
<div class="left">
				
				
				<h1>Student Attendance Management System</h1>
				<?php
				if(!isset($_SESSION['student'])){
					 
                                    echo"<script>alert('请先登录！'); window.location.href='../index.php';</script>";
					 
				 } else {
                                    echo"<h3>Welcome! ".$_SESSION['student']."</h3>"; 
                                 }
					
				
				 
				 
				 ?>
				
				<a href="subject.php">My courses</a>
				<a href="../no.php">Exit</a>
                                
				
			</div>