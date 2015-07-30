<html>
<head>
	<title>Newspaper Discovery</title>
	<link rel="stylesheet" type="text/css" href="../css/results.css" >
	<script src="../library/jquery-2.0.3.min.js"></script>
	<script src="../library/jquery.transit.min.js"></script>
	<script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.js"></script>
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
        $bbc_percent = ($bbc_total/$total)*100;
        $guardian_percent = ($guardian_total/$total)*100;
        $telegraph_percent = ($telegraph_total/$total)*100;
        $dailymail_percent = ($dailymail_total/$total)*100;
        $times_percent = ($times_total/$total)*100;
        $sun_percent = ($sun_total/$total)*100;
        ?>
</head>

<body>
	<!--contains the website within a box-->
	<div id="container">
		<div id="headline">
			<h1>
				Results
			</h1>
		</div>
		<div class="icon" id="thesun">
			<img src="../images/the sun.jpg">
			<br> The Sun
			<br> <?php echo $sun_percent ?> % of people trusted
		</div>
		<div class="icon" id="bbc">
			<img src="../images/bbc.png">
			<br> BBC News
			<br> <?php echo $bbc_percent ?> % of people trusted
		</div>
		<div class="icon" id="guardian">
			<img src="../images/guardian.png">
			<br> The Guardian
			<br> <?php echo $guardian_percent ?> % of people trusted
		</div>
		<div class="icon" id="thetimes">
			<img src="../images/the times.png">
			<br> The Times
			<br> <?php echo $times_percent ?> % of people trusted
		</div>
		<div class="icon" id="dailymail">
			<img src="../images/daily mail.jpg">
			<br> Daily Mail
			<br> <?php echo $dailymail_percent ?> % of people trusted
		</div>
		<div class="icon" id="telegraph">
			<img src="../images/telegraph.jpg">
			<br> The Telegraph
			<br> <?php echo $telegraph_percent ?> % of people trusted
		</div>
		<div id="newpaper">
			<img src="../images/the times.png">
				 Your recommended paper
		</div>

		</div>

	</div>
</body>
</html>

	</div>
</body>
