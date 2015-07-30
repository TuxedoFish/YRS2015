<?php
require_once 'mysql_login.php';
$user_id = $_GET['user_id'];
$bbc =  mysql_fetch_array(query_db("SELECT bbc FROM tblUsers WHERE user_id=$user_id"))[0];
$guardian =  mysql_fetch_array(query_db("SELECT guardian FROM tblUsers WHERE user_id=$user_id"))[0];
$telegraph =  mysql_fetch_array(query_db("SELECT telegraph FROM tblUsers WHERE user_id=$user_id"))[0];
$dailymail =  mysql_fetch_array(query_db("SELECT dailymail FROM tblUsers WHERE user_id=$user_id"))[0];
$times =  mysql_fetch_array(query_db("SELECT times FROM tblUsers WHERE user_id=$user_id"))[0];
$sun =  mysql_fetch_array(query_db("SELECT sun FROM tblUsers WHERE user_id=$user_id"))[0];
$array = array (
    'bbc' => $bbc,
    'guardian' => $guardian,
    'telegraph' => $telegraph,
    'dailymail' => $dailymail,
    'times' => $times,
    'sun' => $sun,
);
echo(array_search(max($array), $array));
