<%@ page language="java" contentType="text/html; charset=UTF-8" import="java.util.*,java.sql.*,java.util.Date" pageEncoding="UTF-8"%>
<%@ page import="javax.servlet.*,java.text.*" %>
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
				var day=new Date();
                                
                                $(".start_time").each(function(){
                                 var h=day.getHours();  
                                 var m=day.getMinutes();  
                                 // alert(h);
                                arr=$(this).html().split(':');
                                arr1=$(this).siblings(".end_time").html().split(':');
                               // var startz=arr[0]+arr[1];
                                //var endz=arr1[0]+arr1[1];
                               // alert(arr1[0]);
                              //alert(h);
                                if(h==parseInt(arr[0])&&m>parseInt(arr[1])){
                                   
                                 }else if(h>parseInt(arr[0])){ }
                                 else{
                                    
//                                    $(this).siblings(".cc").html("Please check in during class hours");  
                                 
                                    
                                }
                                
                                 if(h==parseInt(arr1[0])&&m<parseInt(arr1[1])){
                                   
                                 }else if(h<parseInt(arr1[0])){ }
                                 else{
                                    
//                                    $(this).siblings(".cc").html("Please check in during class hours");  
                                
                                    
                                }
                                
                                })
                               
                                
				
			})
		</script>
	</head>
	<body class="bj">
		<div class="cont">
			
			<%@ include file='left.jsp' %>
                        <div class="right">
                            <div class="fenge"></div>
                            <input type="hidden" value="" class="week" name="week"/>
				<table class="mt" cellpadding="0" cellspacing="0" border="0">
				      <tr>

				           <td>Course Name</td>
				           <td>Start Time</td>
					    <td>End Time</td>
				           <td>Check in with link</td>
                                           <td>Entering class</td>

				      </tr>
                                      
                                      <jsp:useBean id="test" class="conns.ConnSql"/>
						    <%
       
                                                          Connection one=test.getConnection();//??????getConnection()??????
                                                           Statement statement = one.createStatement();//??????????????????????????????
                                                            Object sid=request.getSession().getAttribute("sid");
                                                            String sql="select * from subject";
                                                            ResultSet resultSet = statement.executeQuery(sql);//??????sql??????????????????
                                                            Date dNow = new Date( );
                                                            SimpleDateFormat ft = new SimpleDateFormat ("EE");
                                                            String week=ft.format(dNow);
                                                            // out.println(week);  
                                                            java.util.Date date=new java.util.Date();
                                                           
                                                           
                                                            while(resultSet.next()){ //??????????????????????????????

                                                               int bid = resultSet.getInt("bid");//????????????
                                                               int tid = resultSet.getInt("tid");//????????????
                                                               String sub_title = resultSet.getString("sub_title");
                                                               String start_time = resultSet.getString("start_time");
                                                               String end_time = resultSet.getString("end_time");
                                                               String href = resultSet.getString("href");
                                                               int sub_day = resultSet.getInt("sub_day");
                                                                //????????????
                                                             //  out.println(sub_day);
                                                             out.println("<tr>");
//                                                             out.println("<td>"+bid+"</td>");
                                                             out.println("<td>"+sub_title+"</td>");
                                                            
                                                             
                                                             
                                                            if(date.getDay()==sub_day){
                                                             out.println("<td class='start_time'>"+start_time+"</td>");
                                                             out.println("<td class='end_time'>"+end_time+"</td>");
                                                             out.println("<td class='cc'><a href='../../Checkin?bid="+bid+"&&tid="+tid+"&&sid="+sid+"'>"+href+"</a></td>");
                                                             out.println("<td><a href="+href+"target = '_blank'>Enter</a> </td>");
                                                             
                                                            }else{
                                                                 out.println("<td>"+start_time+"</td>");
                                                                 out.println("<td>"+end_time+"</td>");
                                                                 out.println("<td>There's no class today</td>");
                                                                 out.println("<td>Not allowed</td>");
                                                            }
                                                             
                                                            
                                                             out.println("</tr>");

                                                            }
        
       

    
                                                          %>
                                      
                                      
                                      
                                      
                                      
                                </table>
                            
                            
                            
                        </div>
			
		</div>
		
		
	</body>
</html>
