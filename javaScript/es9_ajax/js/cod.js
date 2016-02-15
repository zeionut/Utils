$().ready(function(){

	var root = 'http://jsonplaceholder.typicode.com';

	$('#pressMe').click(function(){
		
		var ajaxOptions = {
			
			url: root + '/posts',
			method: 'GET'
			
		};
			
		$.ajax(ajaxOptions).

			then(function(data){
				
				for(var i = 0; i < 10; i++) {
				
					$(".container").append("<div class='col-md-6 col-md-offset-3 margin-top-10'>" + 
						
						"<p><strong>id:</strong> " + data[i].id + "</p>" + 
						
						"<p><strong>title:</strong> " + data[i].title + "</p>" + 
					
						"<p><strong>body:</strong> " + data[i].body + "</p>" +
						
					"</div>");
					
			
				};
		
		});
		
	});
	
});

/*http://jsonplaceholder.typicode.com*/
