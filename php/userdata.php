<?php
require_once 'mysql_login.php';
query_db("UPDATE tblUsers SET total = bbc + guardian + telegraph + dailymail + times + sun");
$result = query_db("SELECT * from tblUsers");
echo json_encode(mysql_fetch_object($result));
?>