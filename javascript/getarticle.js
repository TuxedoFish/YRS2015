function getUrl(url, callback) {
	$.ajax({
		url: url,
		type: 'GET',
		data: 'json'
		
		}).done(function ( data ) {
			callback(data);
		});
}
function getArticle(number, newspaper, callback) { 
	var link = "i am here";
	$.ajax({
		url: "../json/links.json",
		type: 'GET',
		data: 'json'
		
		}).done(function ( data ) {
			var paper = data.topics[number][newspaper];
			link = "http://api.diffbot.com/v3/article?token=14bc76d1b7868c3feca9e6be884d5e1c&discussion=false&paging=false&url=".concat(paper);
			
			callback(link);
		}).error(function ( data ) {
			console.log(data + "fail");
		});
	return link;
}