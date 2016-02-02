function formaGeometrica() {

	this.calcolaArea=function() {}


}

function Quadrato(l1) {

	this.l1=l1;
  this.calcolaArea=function() {return this.l1*this.l1;}

}

function Cechio(r) {

	this.r=r;
  this.pi=Math.PI;
  this.calcolaArea=function() {return this.r*this.r*this.pi;}

}

var qua1 = new Quadrato(20);
console.log(qua1.calcolaArea());

var cer1 = new Cechio(15);
console.log(cer1.calcolaArea());

-----------------------------------------------------------------------------------------
//Complicazione con un unico oggetto

function FormaGeometrica() {

//https://developer.mozilla.org/it/docs/Web/JavaScript/Reference/Global_Objects/Object/hasOwnProperty

	this.calcolaArea=function() {
  
	  	if (this.hasOwnProperty("pi")) {
	    
			return this.r*this.r*this.pi;
	      
		}

		else {
	    	
			return this.l1*this.l1;
	    
		}

	}
	
}

function Quadrato(l1) {

	this.l1=l1;
  /*this.calcolaArea=function() {return this.l1*this.l1;}*/

}

function Cerchio(r) {

	this.r=r;
  this.pi=Math.PI;
  /*this.calcolaArea=function() {return this.r*this.r*this.pi;}*/

}

Quadrato.prototype = new FormaGeometrica();

Cerchio.prototype = new FormaGeometrica();

var form1 = new FormaGeometrica();
console.log(form1.calcolaArea());

var qua1 = new Quadrato(20);
console.log(qua1.calcolaArea());

var cer1 = new Cerchio(15);
console.log(cer1.calcolaArea());
