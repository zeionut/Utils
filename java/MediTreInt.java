import java.util.Scanner;

public class MediTreInt {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner inputInt = new Scanner(System.in);
		
		int[] arrInt = new int[3];
		int tempInt;
		int media;
		
		System.out.println("Iserisci tre valori: ");
		
		for (int i = 0; i < arrInt.length; i++) {
			
			System.out.println("Valore " + (i+1) + ": ");
			tempInt = inputInt.nextInt();
			arrInt[i] = tempInt;
			
		 }
		
		media = (arrInt[0]+arrInt[1]+arrInt[2])/arrInt.length;
		
		System.out.println("La media e': " + media);
		
	}

}
