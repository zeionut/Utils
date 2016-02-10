import java.util.Scanner;

public class StampNumInput {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner inputInt = new Scanner(System.in);
		
		int num1;
		int num2;
		int tempInt;
		int numStamp;
		
		System.out.println("Iserisci due valore dove il primo è più piccolo del secondo");
		
		System.out.println("Iserisci il primo valore:");
		
		tempInt = inputInt.nextInt();
		num1 = tempInt;
		
		System.out.println("Iserisci il secondo valore:");
		
		tempInt = inputInt.nextInt();
		num2 = tempInt;
		
		while (num1 > num2) {
			
			System.out.println("Il secondo valore inserito è più piccolo del primo inserici una valore maggiore di: " + num1);
			
			tempInt = inputInt.nextInt();
			num2 = tempInt;
			
		}
		
		for (int i = num1; i < num2-1; i++) {
			
			numStamp = i+1;
			
			System.out.println(numStamp);
			
		}		

	}

}
