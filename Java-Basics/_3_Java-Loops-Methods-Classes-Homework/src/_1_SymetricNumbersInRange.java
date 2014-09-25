import java.util.Scanner;

public class _1_SymetricNumbersInRange {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		int start = sc.nextInt();
		int end = sc.nextInt();

		for (int i = start; i <= end; i++) {
			
			String number = Integer.toString(i);
			boolean print = false;
			
			for (int j = 0; j < number.length(); j++) {
				
				if (number.charAt(j) == number.charAt(number.length() - j - 1)) {
					print = true;
				}
				
			}
			
			if (print) {
				System.out.print(number + " ");
			}
			
		}
	}
}
