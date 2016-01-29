var n1 = 7;
var n2 = 6;
var opera = "+";
var risultato;

risultato = calcolatrice(n1,n2,opera);

alert(risultato);

function calcolatrice(dato1,dato2,opera) {

	if(arguments.length!=3){
  
  	return "Numero di argomenti della funzioni errato.";
   
	}
   
	else {
	
		if (opera == "+"){

		return sum(dato1,dato2);

		}

		else if(opera == "-") {

			return diff(dato1,dato2);

		}

		else if(opera == "*") {

			return mult(dato1,dato2);

		}

		else if(opera == "/") {

			return div(dato1,dato2);

		}
    
	}

}

function sum(dato1,dato2) {

	return dato1+dato2;

}

function diff(dato1,dato2) {

	return dato1-dato2;

}

function mult(dato1,dato2) {

	return dato1*dato2;

}

function div(dato1,dato2) {

	return dato1/dato2;

}
