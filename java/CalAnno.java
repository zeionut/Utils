import java.util.Scanner;

public class CalAnno {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner inputInt = new Scanner(System.in);
		
		int annoNascita;
		int annoOra;
		int tempInt;
		
		
		System.out.println("Inserisci l'anno di nascita:");
		
		tempInt = inputInt.nextInt();
		annoNascita = tempInt;
		
		System.out.println("Inserisci l'anno attuale");
		
		tempInt = inputInt.nextInt();
		annoOra = tempInt;
		
		System.out.println("La tua eta' e' circa " + (annoOra-annoNascita) + " anni");
		
	}

}
