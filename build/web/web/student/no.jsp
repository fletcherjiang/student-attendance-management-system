
<%@ page language="java" contentType="text/html; charset=UTF-8" import="java.util.*,java.sql.*"  pageEncoding="UTF-8"%>
<!DOCTYPE html>
<body>
  <%  
           request.getSession().removeAttribute("student");
           response.sendRedirect("../../index.jsp"); 
       
       %>　　　
       
</body>    
</html>