
<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/wh_adventure?user=root&password=" catalogUri="/WEB-INF/queries/dwadventure2_pengiriman.xml">

select {[Measures].[OrderQty],[Measures].[SubTotal]} ON COLUMNS,
  {([Time].[All Times], [Shipmethod],[Address],[Product], [Customer])} ON ROWS
from [Kirim]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query WH Adventure Fakta Pengiriman using Mondrian OLAP</c:set>
