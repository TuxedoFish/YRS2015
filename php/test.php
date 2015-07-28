<?php
	$url = "";
	
	$url = "http://www.bbc.co.uk/news/world-asia-china-33672037";
	
	$response = file_get_contents("http://api.diffbot.com/v3/article?token=14bc76d1b7868c3feca9e6be884d5e1c&url=" . $url);
	echo $response;
?>