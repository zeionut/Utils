#!/bin/bash

echo -e "Benvenuto nella tua Rubrica \n"

cicle=0;

while [ "$cicle" == "0" ] 
	do
	
		echo -e "Quale operazione vuoi fare: \n";
		echo -e " I)Inserisci nuovo contatto \n";
		echo -e " V)Visualizza rubrica \n";
		echo -e " C)Cerca contatto nella rubrica \n";
		echo -e " D)Resetta la rubrica \n";
		read -p "-->" inputString;

		case "$inputString" in
	
			[Ii])
				echo -e "Inserisci i dati del nuovo contatto: \n";
				read -p "inserisci il nome:" name;
				read -p "inserisci il Cognome:" surname;
				read -p "inserisci il indirizzo:" address;
				echo "$name -- $surname -- $address" >> contatti;				
				;;
			[Vv])
				if [ -a contatti ]; 
					then
						echo -e "\n";
						more contatti;
						echo -e "\n";
				else
					echo -e "Il file non esiste \n";
				fi;
				;;
			[Cc])
				if [ -a contatti ]; 
					then				
						read -p "Cosa vuoi cercare:" serch;
						echo -e "\n";
						grep $serch contatti;
				else
					echo -e "Il file non esiste \n";
				fi;
				;;
			[Dd])
				rm contatti;
				;;
			*)
				exit;
				;;
		esac;

done;
