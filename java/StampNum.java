public class StampNum {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		int[] arrInt = new int[9];
		int tempInt;
		int count = 21;
		
		for (int i = 0; i < arrInt.length; i++) {
			
			arrInt[i] = count + i;
			
		}
			
		for (int i = 0; i < arrInt.length; i++) {

			System.out.println(arrInt[i]);
			
		}

	}

}
