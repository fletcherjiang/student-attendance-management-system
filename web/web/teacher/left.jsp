<%@ page language="java" contentType="text/html; charset=UTF-8" import="java.util.*,java.sql.*" pageEncoding="UTF-8"%>

<%
                            if(request.getSession().getAttribute("teacher")==null){
                            // Object one=   request.getSession().getAttribute("username");
                             out.println("<script>alert('您还没有登录，请登录后查看！');window.location.href='../../index.jsp';</script>");
                             
                            }
%>
<div class="left">
				
				<h1>Student Attendance Management System</h1>
                                <%
				Object teacher=request.getSession().getAttribute("tid");
                              
				 if(teacher.equals("1")){
					 
					 out.println("<h3>Welcome! Dr. Bell Liu</h3>");
					 
				 }else if(teacher.equals("2")){
					
                                         out.println("<h3>Welcome! Dr. Yan Fan</h3>");
					 
				 }else{
					out.println("<h3>Welcome! Dr. Ka Man PANG</h3>"); 
				 }
				 %>
                                
                                
                                
				<a href="add.jsp">Add Course</a>
				<a href="subject.jsp">My Courses</a>
				<a href="no.jsp">Exit</a>
</div>