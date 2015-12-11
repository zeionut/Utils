#!/bin/bash	

	summ() {

		echo -e "la somma $(( $op1+$op2 ))";
		
	}

	summPar() {

		echo -e "la somma $(( $1+$2 ))";
		
	}	

	read -p "Operatore 1: " op1;
	read -p "Operatore 2: " op2;

	summ $op1 $op2;
	summPar $op1 $op2;

