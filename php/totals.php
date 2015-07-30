<?php
	 require_once 'mysql_login.php';
     $result = query_db("SELECT SUM(bbc), SUM(guardian), 
	 SUM(telegraph), SUM(dailymail), SUM(times), SUM(sun) FROM tblusers");
	 echo json_encode(mysql_fetch_object($result));
?>