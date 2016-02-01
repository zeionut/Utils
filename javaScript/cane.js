function verso(ver) {

	return console.log(ver);

}

function Cane(nome) {

	this.nome=nome;
  this.verso=verso;

}

var cagn = new Cane("Bob");

cagn.verso("Bau");

____________________________________________________________________

function verso() {

	return console.log("Miao");

}

function Cane(nome,callback) {

	this.nome=nome;
	this.verso=callback?callback:function(){return console.log("Puppa");};

}

// stampa "Puppa"
var cagn = new Cane("Bob");
cagn.verso();

// stampa "Miao"
var cagn2 = new Cane("Bob",verso);
cagn2.verso();

// stampa "Galahad"
var cagn3 = new Cane("Bob",function(){return console.log("Galahad");});
cagn3.verso();
