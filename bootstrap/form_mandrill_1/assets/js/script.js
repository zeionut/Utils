$(document).ready(function(){
	
	var name = $('#inputName').val();
	var surname = $('#inputSurname').val();
	var email = $('#inputEmail').val();
	var number = $('#inputNumber').val();
	var company = $('#inpitCompany').val();
	var textArea = $('#inpitTextarea').val();
	var params = {};
	
	var isMail = function(email) {
		
		var regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		
		var valMail = regex.test(email);

        return valMail;

    };
    
    var isNumber = function(numbern) {
		
		return !isNaN(parseFloat(numbern)) && isFinite(numbern);
			
	}
	
	 var sendTheMail = function(params, key) {
		console.log("SONO IN SEND MAIL");
		console.log(params.message);
		console.log(params.message.from_email);
		console.log(key);
		
		$.ajax({
			
			type: "POST",
			
			url: "https://mandrillapp.com/api/1.0/messages/send.json",
			
			data: {
				
				'key': key,
				
				'message': {
					
					'from_email': params.message.from_email,
					'to': params.message.to,
					'subject': params.message.subject,
					'text': params.message.text
					
				}
				
			}
			
		}).done(function(response) {
				
				console.log("RISPOSTA", response);
				
			});
		
	}
	
	$('#form-send-mail').on('submit', function(){
		
		var key = 'zY4amYJtRK9aaLvrMbiI4A';
		
		
		name = $('#inputName').val();
		surname = $('#inputSurname').val();
		email = $('#inputEmail').val();
		number = $('#inputNumber').val();
		company = $('#inpitCompany	').val();
		textArea = $('#inpitTextarea').val();
		
		var validMail = isMail(email);
		var validNumber = isNumber(number);
		
		if (!validMail) {

			$('#mailValid').html(function(index, oldHtml){
				
				return '<div class="col-md-12 textRed" id="mailValid"><p>Errore mail non valida</p></div>';
				
			});

		}
		
		else {
			
			$('#mailValid').html(function(index, oldHtml){
				
				return '<div id="mailValid"></div>';
				
			});
			
		}
		
		if (!validNumber) {

			$('#numberValid').html(function(index, oldHtml){
				
				return '<div class="col-md-12 textRed" id="numberValid"><p>Errore numero di telefono non valido</p></div>';
				
			});

		}
		
		else {
			
			$('#numberValid').html(function(index, oldHtml){
				
				return '<div id="numberValid"></div>';
				
			});
			
		}
		
		if (validMail && validNumber) {
			
			console.log("this is mail ", email);
			console.log("this is textarea ", textArea);
			
			var params = {
				"message": {
					"from_email": email,
					"to": [{"email":'andrea.speziale@top-ix.org'}],
					"subject": "Engim test mail",
					"text": textArea
			
				}
			};
			
			console.log("this is mail 2", email);
			
			console.log("params message", params.message);
			sendTheMail(params, key);
			
		}
			
	});

});
