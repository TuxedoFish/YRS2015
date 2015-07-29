<!DOCTYPE html>
<html>
<head>
<title>Comparison</title>

<link rel="stylesheet" type="text/css" href="../css/comparison.css" >
<script src="../library/jquery-2.0.3.min.js"></script>
<script src="../library/jquery.transit.min.js"></script>
<script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.js"></script>

<?php
require_once 'mysql_login.php';
require_once '../library/rss_fetch.inc';
$user_id = $_GET['user_id'];
$user_ranking = $_GET['user_ranking'];
$article_count = $_GET['article_count'];

if ($user_ranking == '') {
$result = query_db("SELECT ranking FROM tblUsers WHERE user_id='" . $user_id . "'");
$user_ranking = (mysql_fetch_array($result)[0]);
}
if ($article_count == '') {
$result = query_db("SELECT article_count FROM tblUsers WHERE user_id='" . $user_id . "'");
$user_ranking = (mysql_fetch_array($result)[0]);
}

$article1rank = 1;
$article2rank = 2;

function getrssurl() {
    $result = query_db("SELECT url FROM tblNewspapers ORDER BY RAND() LIMIT 0,1");
    return mysql_fetch_array($result)[0];
}

for($i = 0; $i == 0; $i = 0)
{
    $rss1=fetch_rss(getrssurl());
    $rss2=fetch_rss(getrssurl());
    $ranint1=rand(1,16);
    $ranint2=rand(1,16);
    if ($rss1 != $rss2 && $ranint1 != $ranint2) break;
}

if ($article_count > 5) {
$result = query_db("UPDATE tblUsers SET ranking=" . $user_ranking . " WHERE user_id='" . $user_id . "'");
http_redirect('index.php');
}
else
{
//$result = query_db("UPDATE tblUsers SET ranking=0 WHERE user_id='" . $user_id . "'");
}

?>
</head>

<body>

<div id="container" ng-app="quiz" ng-controller="quizcontroller">
  <div id="headline">
    <h1>
      Which of these do you agree with?
    </h1>
  </div>

<div class="textbox" id ="textbox1">
  <div class="tagline" id ="headlineA">
      <a href="comparison.php?user_id=<?php echo $user_id; ?>&user_ranking=<?php echo ($user_ranking + $article1rank); ?>&article_count=<?php echo ($article_count + 1); ?>"><?php echo($rss1->items[$ranint1]['title']); ?></a>
  </div>
  <div class="text" id ="textA">
    <a href="<?php echo($rss1->items[$ranint1]['link']); ?>"><?php echo($rss1->items[$ranint1]['description']); ?></a>
  </div>
</div>

<div class="textbox" id ="textbox2">
  <div class="tagline" id ="headlineB">
      <a href="comparison.php?user_id=<?php echo $user_id; ?>&user_ranking=<?php echo ($user_ranking + $article2rank); ?>&article_count=<?php echo ($article_count + 1); ?>"><?php echo($rss2->items[$ranint2]['title']); ?></a>
  </div>
  <div class="text" id ="textB">
    <a href="<?php echo($rss2->items[$ranint2]['link']); ?>"><?php echo($rss2->items[$ranint2]['description']); ?></a>
  </div>
</div>
</body>
</html>