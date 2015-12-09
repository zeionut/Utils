#!/bin/bash

while true :
	do
		
		read -p "Padrone devo continuare? [Y/N] " a;

		if [ "$a" =="N" ] || [ "$a" == "n" ]
			then

				break;

		fi;

	done;

echo -e "Ti ringtrazio di aver fermato questo strazio\n";
