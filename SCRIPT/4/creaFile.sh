#!/bin/bash

echo -e "\n";
echo -e "*********************************************\n";
echo -e "Inizio procedure di creazione file:\n";
echo -e "Inserisci il nome del file:\n";
echo -e "----------------------------------------------\n";

read input;

touch "$input.sh";

chmod u+x "$input.sh";

echo -e "\nCreazione terminata correttamente.\n";
