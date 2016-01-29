var person = new Object();

person.name="Filippo";

console.dir(person);

------------------------------------------------

//crea un oggetto person e gli aggiunge le proprietà (variabili) name e surname;

var person = new Object();

person.name="Filippo";

person.surname="Cocchia";

console.log(person.name);

//crea un nuovo oggetto person2 che non ha le proprietà di person

var person2 = new Object();

console.log(person2.name);

------------------------------------------------

//crea un oggetto person e gli instanzia un metodo

var person = new Object();

person.name="Filippo";

person.surname="Cocchia";

person.getFullName=function() {

	return this.name+" "+this.surname;

}

console.log(person.getFullName());

____________________________________________________________________

var triangolo = new Object();

triangolo.l1=4;

triangolo.l2=3;

triangolo.l3=5;

triangolo.getPerimetro = function() {

	return this.l1+this.l2+this.l3;

}

triangolo.getArea = function() {

	return Math.sqrt((triangolo.getPerimetro()/2)*
		((triangolo.getPerimetro()/2)-this.l1)*
		((triangolo.getPerimetro()/2)-this.l2)*
		((triangolo.getPerimetro()/2)-this.l3));

}

console.log("area del triangolo e': "+triangolo.getArea()+" e perimetro e': "+triangolo.getPerimetro());

---------------------------------------------------------------------------

//creazione di un oggetto con il costruttore

function Person(name,surname,age) {
	
  this.name=name;
  this.surname=surname;
  this.age=age;
  this.sayName=function(){
  	return this.name+" "+this.surname+" "+this.age;
  }
  
}

var person = new Person();
var io = new Person("Filippo","Cocchia",30);

	//prototype aggiunge una funzione (o la sovrascrive) alla classe

Person.prototype.getAge = function() {

	return this.age;

}

Person.prototype = {

	contructor: Person,
	getSurname: function() {
		return this.surname;
	}
}

console.dir(person);
console.log(io.sayName());


