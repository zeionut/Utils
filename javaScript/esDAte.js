var data1 = new Date();
var data2 = new Date(1985,04,25);

bisest(data1);
bisest(data2);

function bisest(dat) {
	
	if (dat.getFullYear()%4 == 0 || dat.getFullYear()%100 == 0 || dat.getFullYear()%400 == 0) {
		
		alert(dat.getFullYear() + " Questa data e' bisestile");
		
	}
	
	else {
		
		alert(dat.getFullYear() + " Questa data NON e' bisestile");
		
	}	
	
}

// "use strict" limita le regole
