<%-- 
    Document   : left
    Created on : 2021-5-16, 15:51:39
    Author     : admin
--%>

<%@ page language="java" contentType="text/html; charset=UTF-8" import="java.util.*,java.sql.*" pageEncoding="UTF-8"%>

<%
                            if(request.getSession().getAttribute("student")==null){
                            // Object one=   request.getSession().getAttribute("username");
                             out.println("<script>alert('您还没有登录，请登录后查看！');window.location.href='../../index.jsp';</script>");
                             
                            }
%>

<div class="left">
				
				<h1>Student Attendance Management System</h1>
                             <%   
                                 Object student=request.getSession().getAttribute("student");
                                  out.println("<h3>Welcome! "+student+"</h3>");
                             %>

				<a href="subject.jsp">My courses</a>
				
				<a href="no.jsp">Exit</a>
				
			</div>