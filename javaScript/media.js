function MyArr() {

	this.arr = [];
	this.arrLen = 0;
	this.aggiungi = function(num) {

		this.arr.push(num);
		this.arrLen=this.arr.length;

	}

	this.ordina = function(num){

		return this.arr.sort(function(a,b){return a-b;});

	}

	this.calMedia = function(num){

		var med = 0;

		for (var i=0; i<this.arrLen;i++) {

			med=med+this.arr[i];

        	}

        	med = med/this.arrLen;

		return med;

      }

	this.rimuovi = function() {

		this.arr.pop();

		this.arrLen=this.arr.length;

	}

	this.toString = function() {

		var stampArr = "";

		for (var i=0; i<this.arrLen;i++) {

			stampArr = stampArr+i+"["+this.arr[i]+"]"+",";

		}

		return console.log(stampArr);    

	}

}

var arry = new MyArr();

arry.aggiungi(5);
arry.aggiungi(5);
arry.aggiungi(5);
arry.aggiungi(5);
arry.aggiungi(5);
arry.toString();

arry.ordina();
arry.toString();

console.log(arry.calMedia());

arry.rimuovi();
arry.toString();
