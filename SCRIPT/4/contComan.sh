#!/bin/bash

echo -e "\n";
echo -e "*********************************************\n";
echo -e "Inserisci il nome del comando:\n";
echo -e "----------------------------------------------\n";

read input;

VARIABILE=$( more /home/svilupposw/.bash_history | grep $input | wc -l);
echo -e "  il comando $input è stato usato $VARIABILE volte\n";


#echo -e "\nCreazione terminata correttamente.\n";
