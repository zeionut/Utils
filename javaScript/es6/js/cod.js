$().ready(function(){

	var h1Item = $('h1');
	var h2Item = $('h2');
	
	$('#toggle').click(function(){ 
		
		if (h1Item.is('.green')) {
			
			UncolorMe();
			
		}
		
		else {
			
			ColorMe();
			
		}
		
	// toggleClass funzione per mettere e togliere la classe
		
		h2Item.toggleClass('red');
		
	});
		
	function ColorMe() {
		
		h1Item.addClass('green');
		
	}
		
	
	
	function UncolorMe() {
		
		h1Item.removeClass('green');
		
	}
	
});
