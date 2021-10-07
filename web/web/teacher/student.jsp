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
                                for(var i=0; i<$(".xuesheng").length;i++){
					//alert("ddd");
					for( var j=0; j<$(".na").length;j++){
						//alert($(".na").html());
						if($(".xuesheng").eq(i).html()==$(".na").eq(j).html()){
							$(".xuesheng").eq(i).remove()
                                                        $(".quexi").eq(i).remove()
                                                        $(".xiugai").eq(i).remove()
//							$(".xuesheng").eq(i).html("");
						}
						
						
					}
					
				}

			})
		</script>
	</head>
	<body class="bj">
		<div class="cont">

			<%@ include file='left.jsp' %>
                        <div class="right">

                            <div class="right" style="overflow: scroll;">
				<div class="fenge"></div>
				<table class="mt" cellpadding="0" cellspacing="0" border="0">
				      <tr>
					    <td>Student Name</td>
				            <td>State</td>
                                            <td>Attendence time</td>
				           <td>Edit</td>
				      </tr>

                                      <jsp:useBean id="test" class="conns.ConnSql"/>
						    <%

                                                            Connection one=test.getConnection();//获取getConnection()方法
                                                            Statement statement = one.createStatement();//获取操作数据库的对象
                                                            Statement statementc = one.createStatement();//获取操作数据库的对象
                                                            Object tid=request.getSession().getAttribute("tid");

                                                            response.setContentType("text/html;charset=utf-8");

	                                                    request.setCharacterEncoding("utf-8");
		                                            String bid = request.getParameter("id");

                                                           String sql="select * from checkin left join student on checkin.sid=student.sid  where tid='"+tid+"'and bid='"+bid+"'";
                                                            ResultSet resultSet = statement.executeQuery(sql);//执行sql，获取结果集
                                                            List<String> list = new ArrayList<String>();
                                                           //
                                                             //  
                                                          
                                                            while(resultSet.next()){ //遍历结果集，取出数据
                                                        
                                                               int sid = resultSet.getInt("sid");//测试输出
                                                               String p=resultSet.getString("sid");//测试输出
                                                               list.add(p);
                                                               
                                                               String student_name = resultSet.getString("student_name");
                                                               String state = resultSet.getString("state");
                                                               String dates = resultSet.getString("dates");
                                                               out.println("<tr>");
                                                               out.println("<td class='na'>"+student_name+"</td>");

                                                               if(state.equals("2")){

                                                               out.println("<td>正常签到</td>");
                                                               }else if(state.equals("3")){
                                                                out.println("<td>早退</td>");

                                                               }else if(state.equals("4")){
                                                                out.println("<td>上课分心</td>");

                                                               }


                                                              out.println("<td class='na'>"+dates+"</td>");
                                                              out.println("<td class='edit'><a href='edit.jsp?id='>edit</a></td>");
                                                               
                                                             out.println("</tr>");


                                                            }



                                                          %>





                                </table>

                            <h2 style='font-weight:500; margin-left:15px;'> Students who are absent from class</h2>
                             
                            <table class="mt" cellpadding="0" cellspacing="0" border="0">
				      <tr>
     
				           <td>Student Name</td>
                                           <td>Stade</td>
				      </tr>
                            
                            <%
                              // out.println(list);
                              
                               String sone="select * from student"; 
                                ResultSet resultSets = statement.executeQuery(sone);//执行sql，获取结果集 
                                while(resultSets.next()){ //遍历结果集，取出数据
                                    String student_name = resultSets.getString("student_name");
                                    out.println("<tr><td class='xuesheng'>"+student_name+"</td>");
                                    out.println("<td class='quexi'>缺席！！</td>");
//                                    out.println("<td class='xiugai'><a href='edit.jsp?id='>Edit</a></td>");
                                    
                                }

                                %>
                                  </table>
                       
                            </div>

		</div>

	
         </body>
</html>
