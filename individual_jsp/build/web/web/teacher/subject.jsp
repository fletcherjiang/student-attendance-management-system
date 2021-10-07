<%@ page language="java" contentType="text/html; charset=UTF-8" import="java.util.*,java.sql.*" pageEncoding="UTF-8"%>
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
			
			<%@ include file='left.jsp' %>
                        <div class="right">
                            
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
                                      
                                      <jsp:useBean id="test" class="conns.ConnSql"/>
						    <%
       
                                                          Connection one=test.getConnection();//获取getConnection()方法
                                                           Statement statement = one.createStatement();//获取操作数据库的对象
                                                           Object tid=request.getSession().getAttribute("tid");
                                                            String sql="select * from subject where tid="+tid;
                                                            ResultSet resultSet = statement.executeQuery(sql);//执行sql，获取结果集

                                                            while(resultSet.next()){ //遍历结果集，取出数据

                                                               int bid = resultSet.getInt("bid");//测试输出
                                                               String sub_title = resultSet.getString("sub_title");
                                                               String start_time = resultSet.getString("start_time");
                                                               String end_time = resultSet.getString("end_time");
                                                              
                                                                //输出数据
                                                              // out.println(test_name);
                                                             out.println("<tr>");
                                                             //out.println("<td>"+bid+"</td>");
                                                             out.println("<td>"+sub_title+"</td>");
                                                             out.println("<td>"+start_time+"</td>");
                                                             out.println("<td>"+end_time+"</td>");
                                                             out.println("<td><a href='student.jsp?id="+bid+"&&tid="+tid+"'>View my students</a></td>");
                                                             out.println("<td><a href='../../DeleteOne?id="+bid+"'>Delete this course</a></td>");
                                                             out.println("</tr>");

                                                            }
        
       

    
                                                          %>
                                      
                                      
                                      
                                      
                                      
                                </table>
                            
                            
                            
                        </div>
			
		</div>
		
		
	</body>
</html>
