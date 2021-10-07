<%-- 
    Document   : add.jsp
    Created on : 2021-5-16, 19:20:30
    Author     : admin
--%>
<%@ page language="java" contentType="text/html; charset=UTF-8" import="java.util.*,java.sql.*" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curriculum system</title>
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
				<div class="fenge"></div>
				<div class="ccont">
					<h1>Edit State</h1>
					
					<form action="../../UpdateOne" method="post">
					
					
					<%
                                            String id= request.getParameter("id");
                                            out.println("<input type='hidden' name='id'value='"+id+"'/>");
                                        
                                        %>
					
					
					<div class="cts">
						<span>state</span>
						<select class="change" name="state">
							<option value="0">缺席</option>
							<option value="4">上课分心</option>
							<option value="2">正常签到</option>
                                                        <option value="3">早退</option>
						</select>
					</div>
					
					
					<input type="submit" value="Add" class="css"/>
					
					</form>
				</div>
				
			</div>
			
		</div>
		
		
	</body>
</html>

