#!/bin/bash

if [ $# -ne 1  ];
	then
		echo -e "Non hai inserito nessun paramentro o ne hai inseriti troppi. \n";
		exit;
fi;

if [ -d "$1"  ];
	then
		echo -e "Procedura di backup iniziata \n";
	
		destScriv=$HOME/Scrivania/
		istant=$(date +"%y-%m-%d-%T");
		nameFile="backup.$istant";

		zip -r $nameFile $1;

		mv $nameFile $destScriv;

	else
		echo -e "directory inesistente \n";
		exit;
fi;



