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
				for(var i=0; i<$(".xuesheng").length;i++){
					//alert("ddd");
					for( var j=0; j<$(".na").length;j++){
						//alert($(".na").html());
						if($(".xuesheng").eq(i).html()==$(".na").eq(j).html()){
							
							$(".xuesheng").eq(i).remove()
                                                        $(".quexi").eq(i).remove()
                                                        $(".xiugai").eq(i).remove()
                                               
						}
						
						
					}
					
				}
				
			})
		</script>
	</head>
	<body class="bj">
		<div class="cont">
			
			<?php include"left.php";?>
			<div class="right" style="overflow: scroll;">
				<div class="fenge"></div>
				<table class="mt" cellpadding="0" cellspacing="0" border="0">
				      <tr>
					    
				            <td>Student Name</td>
					    <td>Stade</td>
					    <td>Attendence time</td>
				            <td>Edit</td>
				      </tr>
                                      
				<?php
				require_once ('../db.php');
				$tid=$_SESSION['tid'];
				$bid=$_GET['id'];
				
				$sql="select * from checkin left join student on checkin.sid=student.sid  where tid='$tid' and bid='$bid'"  ;	
				           
				     mysqli_query($conn,'set names utf8');
				     $res=mysqli_query($conn,$sql);//查询出数据并赋值
				     header("Content-type: text/html; charset=utf-8");//头部文件
				     $arr=array();
				     while($ros=mysqli_fetch_assoc($res)) {   
					
					  
					   echo"  <tr>
						    
						    <td class='na'>".$ros['student_name']."</td>
						    
						    ";
						     
						    
						    if($ros['state']=="2"){
							    
							  echo"<td class='tdd'>正常签到</td>";    
							    
						    }else if($ros['state']=="3"){
							    
							echo"<td class='tdd'>早退</td>";      
							    
						    }else if($ros['state']=="4"){
							    
							echo"<td class='tdd'>上课分心</td>";      
							    
						    }
						   
						     array_push($arr,$ros['sid']);
						     
						     
						     
						     
						     
						     echo"
						     <td>".$ros['dates']."</td>
						     <td class='edit'><a href='edit.php?id=".$ros['cid']."'>edit</a></td>
						    </tr>
								 
								 
								 
								 ";
					 
						}
						
						
						
						
						?>
				  </table>
                                
                                <?php
                                echo"<h2 style='font-weight:500;margin-left:15px;'> Students who are absent from class</h2>";?>
                                
                                
				  <table class="mt" cellpadding="0" cellspacing="0" border="0">
				      <tr>
					    
				           <td>Student Name</td>
                                           <td>Stade</td>
                                           <td>Edit</td>
		
				      </tr>
           
                                
				  <?php
//				  echo"<h1 style='font-weight:100; margin-left:10px;'>未签到学生</h1>";
				 $arr_string = join(',', $arr);
				// var_dump($arr_string);
				//  $sqls="select * from student where sid not in ('$arr_string')";
				  $sqls="select * from student";
				  $ress=mysqli_query($conn,$sqls);//查询出数据并赋值
				  					
				  while($ross=mysqli_fetch_assoc($ress)) { 
				  	
                                        
				  	echo "<tr><td class='xuesheng'>".$ross['student_name']."</td>";
                                        
                                        echo "<td class='quexi'>缺席！</td>";
     
                                         echo "<td class='xiugai'><a href='editchu.php?id=".$ross['sid']."'>edit</a></td>
						    </tr>";
                                        
                                        
                                        
                                        
//                                        echo "<td class='xuesheng'>".$ros['student_name']."</td>";
 	
				  }
				  
				  
				  ?>
				  
                                </table>
				  
			</div>
			
		</div>
		
		
	</body>
</html>
