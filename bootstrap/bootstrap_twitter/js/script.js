$(document).ready(function(){
	
	var texMax = 140;
	
	var countAr = $('#textAr').val().length;
	
	$('#textAr').keyup(function(){
		
		countAr = $('#textAr').val().length;
	
		$('#count').html(function(index, oldHtml){
			
			return '<p id="count">' + (texMax-countAr) + '</p>';
			
		});
		
		if (countAr < 1 || countAr > 140) {
			
			$('#postBot').attr('disabled', true);
			
		}
		
		else {
			
			$('#postBot').attr('disabled', false);
			
		}
		
	});
	
	$('#postBot').click(function(){
			
		$('#over').prepend('<div class="margin-top-15 col-md-12 well word-wrap"><p>' + $('#textAr').val() + '</p></div>');
				
		countAr = $('#textAr').val('').length - 1;
				
		$('#count').html(function(index, oldHtml){
				
			return '<p id="count">' + (texMax-countAr) + '</p>';
				
		});
				
		$('#postBot').attr('disabled', true);
				
				
		});

});
