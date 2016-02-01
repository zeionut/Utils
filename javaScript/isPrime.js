function Numero(num) {

	this.num=num;
  this.isPrime=function(){
  	if (this.num<=0 || this.num==1){
    	return false;
  	}
    for (var i=2; i<this.num; i++){
    	if(this.num%i==0){
    		return false;
       }
    }
    return true;
  }

}

var num = new Numero(97);
var realy = num.isPrime();

if (realy) {
	
  console.log("vero")

}
else {

	console.log("falso")

}

____________________________________________________________________________________

function isPrime() {

	if (this.num <= 0 || this.num == 1){
    
		return false;
      
	}
    
    for (var i = 2; i < this.num; i++){
    
		if(this.num % i == 0){
      
			return false;
      
		}

	}
    
    return true;
    
 }

function Numero(num) {

	this.num = num;
	this.isPrime = isPrime;

}

var num = new Numero(97);
var realy = num.isPrime();

if (realy) {
	
  console.log("vero")

}
else {

	console.log("falso")

}
