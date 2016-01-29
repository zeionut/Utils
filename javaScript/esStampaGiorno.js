var data = new Date();
var ora  = data.getHours()+":"+data.getMinutes();
var mese = data.getMonth();
var giorno = data.getDay();
var giornoNome = data.getDay();

giornoNome = trovGiorno(giornoNome);

mese = trovMese(mese);

alert("Oggi e' il " + giornoNome + " " + giorno + ", " + mese + " e sono le ore " + ora);

function trovMese(mese) {

	switch(mese) {
 
    case 0:
        mese = "Gennaio";
        break;
 
    case 1:
        mese = "Febbraio";
        break;
        
    case 2:
        mese = "Marzo";
        break;
        
    case 3:
        mese = "Aprile";
        break;
        
    case 4:
        mese = "Maggio";
        break;
 
    case 5:
        mese = "Giugno";
        break;
        
    case 6:
        mese = "Luglio";
        break;
        
    case 7:
        mese = "Agosto";
        break;
        
    case 8:
        mese = "Settembre";
        break;
 
    case 9:
        mese = "Ottobre";
        break;
        
    case 10:
        mese = "Novembre";
        break;
        
    case 11:
        mese = "Dicembre";
        break;
    
	}
  
  return mese;

}

function trovGiorno(giorno) {

	switch(giorno) {
 
    case 0:
        giorno = "Domenica";
        break;
 
    case 2:
        giorno = "Martedi";
        break;
        
    case 3:
        giorno = "Mercoledi";
        break;
        
    case 4:
        giorno = "Giovedi";
        break;
        
    case 5:
        giorno = "Venerdi";
        break;
 
    case 6:
        giorno = "Sabato";
        break;
        
    case 1:
        giorno = "Lunedi";
        break;
    
	}
  
  return giorno;

}	
