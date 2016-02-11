$().ready(function(){

	$('input[type="email"]').keyup(function(){
		
		$("#sovrascrivo").html(function(index, oldHtml){
					
			return '<div id="sovrascrivo" class="col-md-6 col-md-offset-3 textRed">' + ($('input[type="email"]').val()) + '</div>';
					
		});
		
	});
	
});
