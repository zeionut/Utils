$().ready(function(){

	var listItem = $('li');
	
	/*var first = listItem[0];
	console.log(first);
	
	//elemento viene cancelloato perchè gli passo l'indirizzo no una stringa
	//first.remove();
	
	var first = listItem.eq(0);
	console.log(first);*/
	
	for (var i=0; i < listItem.length; i++) {
		
		var elem = listItem.eq(i);
		
		if (elem.is('.special')) {
				
				elem.removeClass('special');
				elem.addClass('bomba');
				
		}
		
	}	
	
});


