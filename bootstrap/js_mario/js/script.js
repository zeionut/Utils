$().ready(function(){
	
	$('body').keydown(function(event) {
		
		switch (event.which) {
			
			case 37: // LEFT 
				$('.mario').animate({ 'left': '-=5'},50);
				
			break;
			
			case 38: // TOP 
				$('.mario').animate({ 'bottom': '+=5' },50);
				
			break;
				
			case 39: // RIGHT 
				$('.mario').animate({ 'left': '+=5' },50);
				
			break;
			
			case 40: // BOTTOM 
				$('.mario').animate({ 'bottom': '-=5' },50);
				
			break;
			
		}
		
	});


});
