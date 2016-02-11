$().ready(function(){

	var h1Item = $('h1');
	var h2Item = $('h2');
	
	//tre modi per aggiungere una classe a un tag <html>
	
	for (var i=0; i < h1Item.length; i++) {
		
		var elem = h1Item.eq(i);
		
		elem.addClass('red');
		
	}
	
	for (var i=0; i < h2Item.length; i++) {
		
		h2Item.eq(i).addClass('blue');
		
	}
	
	h1Item.addClass('green');
	
});
