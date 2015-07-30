<?php
        require_once 'mysql_login.php';
        $bbc_total = query_db("SELECT SUM(bbc) FROM tblUsers");
        $bbc_total = (mysql_fetch_array($bbc_total)[0]);
        $guardian_total = query_db("SELECT SUM(guardian) FROM tblUsers");
        $guardian_total = (mysql_fetch_array($guardian_total)[0]);
        $telegraph_total = query_db("SELECT SUM(telegraph) FROM tblUsers");
        $telegraph_total = (mysql_fetch_array($telegraph_total)[0]);
        $dailymail_total = query_db("SELECT SUM(dailymail) FROM tblUsers");
        $dailymail_total = (mysql_fetch_array($dailymail_total)[0]);
        $times_total = query_db("SELECT SUM(times) FROM tblUsers");
        $times_total = (mysql_fetch_array($times_total)[0]);
        $sun_total = query_db("SELECT SUM(sun) FROM tblUsers");
        $sun_total = (mysql_fetch_array($sun_total)[0]);
        $total = $bbc_total + $guardian_total + $telegraph_total + $dailymail_total + $times_total + $sun_total;
        $np = $_GET['np'];
        $np_total = query_db("SELECT SUM($np) FROM tblUsers");
        $np_total = (mysql_fetch_array($np_total)[0]);
        $np_percent = ($np_total/$total)*100;
        echo $np_percent;
        ?>