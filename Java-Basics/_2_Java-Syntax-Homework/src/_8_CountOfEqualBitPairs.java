import java.util.Scanner;
import java.lang.*;

public class _8_CountOfEqualBitPairs {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		int num = sc.nextInt();
		String strNum = Integer.toString(num, 2);

		int equalBitPairs = 0;
		for (int i = 0; i < strNum.length() - 1; i++) {
			char curr = strNum.charAt(i);
			char next = strNum.charAt(i + 1);
			if (curr == next) {
				equalBitPairs++;
			}
		}
		System.out.println(equalBitPairs);
	}
}
