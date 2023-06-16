
<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/wh_adventure?user=root&password=" catalogUri="/WEB-INF/queries/dwadventure.xml">

select {[Measures].[OrderQty],[Measures].[SubTotal]} ON COLUMNS,
  {([Time],[Store],[Product], [Employee])} ON ROWS
from [Jual]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query WH Adventure Fakta Penjualan using Mondrian OLAP</c:set>
