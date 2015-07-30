<?php
require_once 'mysql_login.php';

$user_id = $_GET['user_id'];
$bbc = $_GET['bbc'];
$guardian = $_GET['guardian'];
$telegraph = $_GET['telegraph'];
$dailymail = $_GET['dailymail'];
$times = $_GET['times'];
$sun = $_GET['sun'];

if ($user_id == 'new') {
    query_db("INSERT INTO tblUsers(bbc, guardian, telegraph, dailymail, times, sun) VALUES ($bbc, $guardian, $telegraph, $dailymail, $times, $sun)");
    echo mysql_insert_id();
}
else {
query_db("UPDATE tblUsers SET bbc = bbc + " . $bbc . " WHERE user_id='" . $user_id . "'");
query_db("UPDATE tblUsers SET guardian = guardian + " . $guardian . " WHERE user_id='" . $user_id . "'");
query_db("UPDATE tblUsers SET telegraph = telegraph + " . $telegraph . " WHERE user_id='" . $user_id . "'");
query_db("UPDATE tblUsers SET dailymail = dailymail + " . $dailymail . " WHERE user_id='" . $user_id . "'");
query_db("UPDATE tblUsers SET times = times + " . $times . " WHERE user_id='" . $user_id . "'");
query_db("UPDATE tblUsers SET sun = sun + " . $sun . " WHERE user_id='" . $user_id . "'"); 
query_db("UPDATE tblUsers SET total = total + " . "1" . " WHERE user_id='" . $user_id . "'"); 
}


?>