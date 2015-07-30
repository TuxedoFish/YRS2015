<?php
require_once 'mysql_login.php';

$user_id = $_GET['user_id'];

$result = query_db("SELECT * from tblUsers WHERE user_id = " . $user_id);
echo json_encode(mysql_fetch_object($result));
?>