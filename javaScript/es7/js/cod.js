$().ready(function(){

	var h1Item = $('h1');
	var h2Item = $('h2');
	var i = 0;
	
	$('#toggle').click(function(){ 
		
		if (i == 0) {
		
			$('h1').html(function(index, oldHtml){
					
					return oldHtml + ' verde!';
					
			});
			
			$('h2').html(function(index, oldHtml){
					
					return oldHtml + ' rosso!';
					
			});
			
			h1Item.each(function(index, oldHtml){
					
					return oldHtml + ' rosso!';
			
			i = 1;
		
		}
		
		//h1Item.html('green');		
		//h2Item.toggleClass('red');
		
		
		h1Item.toggleClass('green');		
		h2Item.toggleClass('red');
		
	});
	
});
