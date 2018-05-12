var token = '1398178032.9b710e5.050f662f36674f68a390a09d472e893c',
    userid = 1398178032, // User ID - get it in source HTML of your Instagram profile
    num_photos = 20; // how much photos do you want to get
 
$.ajax({
	url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent',
	dataType: 'jsonp',
	type: 'GET',
	data: {access_token: token, count: num_photos},
	success: function(data){
 		console.log(data);
		for( x in data.data ){
			$('ul.image-list').append('<li class="image-list-item"><img class="image-list-item--image" src="'+data.data[x].images.standard_resolution.url+'"/></li>');

			// data.data[x].images.low_resolution.url - URL of image, 306х306
			// data.data[x].images.thumbnail.url - URL of image 150х150
			// data.data[x].images.standard_resolution.url - URL of image 612х612
			// data.data[x].link - Instagram post URL 
		}
	},
	error: function(data){
		console.log(data); // send the error notifications to console
	}
});