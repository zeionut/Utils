$().ready(function(){

	var h1Item = $('h1');
	var h2Item = $('h2');
	
	$(".metti").click(function() {
		
		h1Item.addClass('green');
		h2Item.addClass('red');
		
	});
	
	$(".togli").click(function() {
		
		h1Item.removeClass('green');
		h2Item.removeClass('red');
		
	});
	
	
});
