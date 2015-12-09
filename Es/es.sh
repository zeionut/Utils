#!/bin/bash

echo -e " Dimmi la lunghezza della lista\n";

while true; do

	read input;

	if [ $input -gt 10 ] || [ $input -le 0 ]; then
	
		echo -e " Il numero inserito e troppo grosso o proppo piccolo \n";
	
	else

		break;

	fi;
		

done;

echo -e " Hai creato una lista do $input elementi\n";

echo -e " Inserisci un valore per la lunghezza della lista\n";

for i in $( seq 1 $input ); do
		
	read arryRead;
	arry[$i]=$arryRead;

done;

echo -e " Fatto\n";

echo -e " Ora stampo tutto:\n";

for i in $( seq 1 $input ); do
	
	stamp=${arry[$i]};	
	echo "$stamp ";

done;
