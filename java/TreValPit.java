import java.util.Scanner;

public class TreValPit {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner inputInt = new Scanner(System.in);
		
		int[] arrInt = new int[3];
		int tempInt;
		int maggiore;
		
		System.out.println("Iserisci tre valori: ");
		
		for (int i = 0; i < arrInt.length; i++) {
			
			System.out.println("Valore " + (i+1) + ": ");
			tempInt = inputInt.nextInt();
			arrInt[i] = tempInt;
			
		}
			
		if (arrInt[0]*arrInt[0]+arrInt[1]*arrInt[1] == arrInt[2]*arrInt[2]) {
			
			System.out.println("Questa è una terna pitagorica");
			
		}
		
		else {
			
			System.out.println("Questa non è una terna pittagorica");
			
		}	
		
	}

}
