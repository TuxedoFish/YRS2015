function getUrl(url) {
	$.ajax({
		url: url,
		type: 'GET',
		data: 'json'
		
		}).done(function ( data ) {
			var title = data.objects[0].title;
			var text = data.objects[0].text;
			$('.slider').append(text);
		});
}