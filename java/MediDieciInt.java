import java.util.Scanner;

public class MediDieciInt {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner inputInt = new Scanner(System.in);
		
		int[] arrInt = new int[10];
		int tempInt;
		int media;
		int count = 0;
		
		System.out.println("Iserisci 10 valori: ");
		
		for (int i = 0; i < arrInt.length; i++) {
			
			System.out.println("Valore " + (i+1) + ": ");
			tempInt = inputInt.nextInt();
			arrInt[i] = tempInt;
			count = count + arrInt[i];
			
		 }
		
		media = count/arrInt.length;
		
		System.out.println("La media e': " + media);
		
	}

}
