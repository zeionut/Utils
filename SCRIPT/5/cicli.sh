#!/bin/bash

x=1;

while [ $x -le 5 ] 
	do
	
		read -p "Qante ciambelle vuoi? " a;
		
		echo -e "ne vuoi $a\nInterazione $x\n";
		x=$(( x+1 ));

	done
