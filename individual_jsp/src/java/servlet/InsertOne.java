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
 
@WebServlet("/InsertOne")
public class InsertOne extends HttpServlet {
	private static final long serialVersionUID = 1L;
 
	@Override
	protected void service(HttpServletRequest request,HttpServletResponse response) throws ServletException, IOException{
		response.setContentType("text/html;charset=utf-8");
		PrintWriter out = response.getWriter();
		request.setCharacterEncoding("utf-8");
		String sub_title = request.getParameter("sub_title");
		String href = request.getParameter("href");
                String tid = request.getParameter("tid");
		String sub_day = request.getParameter("sub_day");
                String start_time = request.getParameter("start_time");
		String end_time = request.getParameter("end_time");
		//out.println("<script>alert('ddd')</script>");
		if (sub_title == null || sub_title.length() == 0) {
			out.println("<script>alert('请输入课程名');window.history.back();</script>");
		} else if (href == null || href.length() == 0) {
			out.println("<script>alert('请输入连接');window.history.back();</script>");
		}else if (start_time == null || start_time.length() == 0) {
			out.println("<script>alert('请输入开始时间');window.history.back();</script>");
		}else if (end_time == null || end_time.length() == 0) {
			out.println("<script>alert('请输入结束时间);window.history.back();</script>");
		}
                
                
                
                else if (sub_title.length() > 0 && href.length() > 0 && start_time.length() > 0 && end_time.length() > 0) {
                  
                         try{
                          ConnSql test=new ConnSql();
                          Connection one=test.getConnection();//获取getConnection()方法
                          Statement statement = one.createStatement();//获取操作数据库的对象
                          String sql="INSERT INTO subject (sub_title,href,tid,sub_day,start_time,end_time) VALUES('"+sub_title+"','"+href+"','"+tid+"','"+sub_day+"','"+start_time+"','"+end_time+"')";
                          int resultSet = statement.executeUpdate(sql);//执行sql，获取结果集
                          if(resultSet>0){
                                  
                                  out.println("<script>alert('添加成功');window.location.href='web/teacher/subject.jsp';</script>");
                          
                          
                          }else{
                          
                           out.println("<script>alert('添加失败');window.history.back();</script>");
                          
                          }
                       
                          
                         }catch(Exception e){
                          out.println("<script>alert('添加失败！');window.history.back();</script>");
                           
                         }
                             
                           
                         
                          
			
		}
		
	}
 
}
