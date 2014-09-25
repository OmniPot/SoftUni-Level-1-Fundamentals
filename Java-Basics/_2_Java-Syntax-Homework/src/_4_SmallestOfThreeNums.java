import java.util.Scanner;

public class _4_SmallestOfThreeNums {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);

		double a = sc.nextDouble();
		double b = sc.nextDouble();
		double c = sc.nextDouble();

		if (a <= b && a <= c) {
			System.out.println(a);
		} else if (b <= a && b <= c) {
			System.out.println(b);
		} else if (c <= a && c <= b) {
			System.out.println(c);
		}
	}
}
