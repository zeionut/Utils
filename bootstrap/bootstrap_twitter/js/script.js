$(document).ready(function(){
	
	var texMax = 140;
	
	var countAr = $('#textAr').val().length;
	
	$('#textAr').keyup(function(){
		
		countAr = $('#textAr').val().length;
	
		$('#count').html(function(index, oldHtml){
			
			return '<p id="count">' + (texMax-countAr) + '</p>';
			
		});
		
		if (countAr > 1) {
			
			$('#postBot').innerHTML = '<a id="postBot" href="#" class="form-control btn btn-info"">Post</a>';
			
			});
			
		};
		
	});
	
	/**
			// Disable by default
		$('#send-message-button').prop('disabled', true);

		// Do stuff when there is textarea activity
		$('#message-input-field').on("propertychange input textInput", function () {
			var charLimit = 140;
			var remaining = charLimit - $(this).val().length;
			if(remaining == charLimit) {
				console.log("disabling");
				// No characters entered so disable the button
				$('#send-message-button').attr('disabled', true);
			} if (remaining < 0) {
				// remaining = 0; // Prevents the counter going into negative numbers
				$('#counter').addClass("over-char-limit").text(remaining);
				$('#send-message-button').attr('disabled', true);
			} else {
				$('#send-message-button').removeAttr('disabled');
				$('#counter').removeClass("over-char-limit").text(remaining);
			}
		});
 
		**/

});
