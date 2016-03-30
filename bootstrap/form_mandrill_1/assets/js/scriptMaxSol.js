
$(document).ready(function ($) {

    var mandrillKey = 'zY4amYJtRK9aaLvrMbiI4A';

    var formElements = $('.form input ,.form textarea');

    $('.send').on('click', function(e){
        e.preventDefault();

        var results = testFields(formElements);
        var errors = $('.errors');

        if(Array.isArray(results))
        {
            errors.html('');
            for(var I in results){
                errors.append('<p>'+results[I]+'</p>');
            }
            errors.show();
        }
        else {

            var params = {
                "message": {
                    "from_email": results.email,
                    "to" : [{ "email": 'andrea.speziale@top-ix.org' }],
                    "subject" : "ENGIM test mail",
                    "text": results.message
                }
            };

            errors.hide();

            sendEmail(params, mandrillKey);

        }

    });

    function sendEmail(params, key){

        $.ajax({
                url : 'https://mandrillapp.com/api/1.0/messages/send.json',
                method: 'POST',
                data: {
                    key: key,
                    message : params.message
                }
            })
        .error(function (e) {
            console.log(e)
            })
        .success(function (e) {
            console.log('ok');
        });

    }

    function testFields(formElements){

        var mailRegEx = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        var results = {} ;
        var error = [];

        formElements.each(function ($key, $val) {

            var key = $(this).prop('name');
            var value = $(this).val();

            if(value == "" || value == " ") {
                error.push(key+': Non puo essere vuoto');
            }

            switch (key){
                case 'email':
                    if(!mailRegEx.test(value))
                        error.push(key+': Non è una mail valida');
                    break;
                case 'phone':
                    if(isNaN(value) ){
                        error.push(key+': Deve Essere un numero');
                    }
                    break;
                case 'name' || 'surname':
                    if(value.length <= 1){
                        error.push(key+': Deve contenere almeno 2 caratteri');
                    }
                    break;
            }

            results[key] = value;

        });

        return error.length==0? results: error;

    }

});
