/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package servlet;
import java.math.BigDecimal;
import java.sql.*;
import conns.ConnSql;
import java.io.IOException;
import java.io.PrintWriter;
 
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
 
@WebServlet("/Checkin")
public class Checkin extends HttpServlet {
	private static final long serialVersionUID = 1L;
 
	@Override
	protected void service(HttpServletRequest request,HttpServletResponse response) throws ServletException, IOException{
		response.setContentType("text/html;charset=utf-8");
		PrintWriter out = response.getWriter();
		request.setCharacterEncoding("utf-8");
		String bid = request.getParameter("bid");
		String tid = request.getParameter("tid");
                String sid = request.getParameter("sid");
              
                         try{
                          ConnSql test=new ConnSql();
                          Connection one=test.getConnection();//获取getConnection()方法
                          Statement statement = one.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_UPDATABLE);//获取操作数据库的对象
                         // 
                          String sql="select * from checkin where bid='"+bid+"'and sid='"+sid+"'"; 
                          ResultSet resultSet = statement.executeQuery(sql);//执行sql，获取结果集
                          resultSet.last();
                          int lastRow=resultSet.getRow();
                          if(lastRow>0){
                             out.println("<script>alert('You have registered for this course');window.history.back();</script>");
                          }else{
                          //out.println("<script>alert('2');window.history.back();</script>");
                          java.sql.Timestamp stamp=new java.sql.Timestamp(System.currentTimeMillis());
                           String sqls="INSERT INTO checkin (tid,bid,sid,state,dates) VALUES('"+tid+"','"+bid+"','"+sid+"','2','"+stamp+"')";
                          int resultSets = statement.executeUpdate(sqls);//执行sql，获取结果集
                          if(resultSets>0){
                                  
                                  out.println("<script>alert('Successful registration');window.location.href='web/student/subject.jsp';</script>");
                                 
                          
                          }else{
                          
                           out.println("<script>alert('error');window.history.back();</script>");
                          
                          }
                          }
                          
                          
                          
                         }catch(Exception e){
//                          out.println("<script>alert('error！');window.history.back();</script>");
                          out.println(e.getMessage());
                           
                         }
                             
                           
                         
                          
			
		}
		
	
 
}
