#!/bin/bash

echo -e "\n";
echo -e "*********************************************\n";
echo -e "Ciao\n inserisci un numero da 1 a 10 \ncorrispondente al numero di File che vuoi creare:\n";
echo -e "----------------------------------------------\n";

read n;

# maggiore di 10
if [ $n -gt 10 ]; then
	echo -e "Numero troppo grosso\n";
	exit;
fi;

# minore uguale a 0
if [ $n -le 0 ]; then
	echo -e "Numero troppo piccolo\n";
	exit;
fi;


for i in $( seq 1 $n ); do
		
	touch "file-$i";
	file "file-$i";

done;

echo -e "\nCreazione terminata correttamente.\n";
