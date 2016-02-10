import java.util.Scanner;

public class CalPerim {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner inputInt = new Scanner(System.in);
		
		int lato;
		int altezza;
		int tempInt;
		
		System.out.println("Iserisci il lato del rettangolo: ");
		
		tempInt = inputInt.nextInt();
		lato = tempInt;
		
		System.out.println("Inserisci l'alteza: ");
		
		tempInt = inputInt.nextInt();
		altezza = tempInt;
		
		System.out.println("Il perimetro del rettangolo è " + (lato*2+altezza*2));
		
	}

}
