import java.util.Scanner;

public class _6_FormattingNumbers {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		int a = sc.nextInt();
		double b = sc.nextDouble();
		double c = sc.nextDouble();

		String hex = Integer.toHexString(a).toUpperCase();
		String bin = String.format("%10s", Integer.toBinaryString(a)).replace(
				' ', '0');

		System.out.printf("|%-10s|%s|%10.2f|%-10.3f|", hex, bin, b, c);
	}

}
