import java.util.Scanner;

public class _5_DegreesRadiansConverter {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		int lines = sc.nextInt();

		for (int i = 0; i < lines; i++) {

			double value = sc.nextDouble();

			String type = sc.next("\\w+");

			if (type.equals("rad")) {
				System.out.printf("%6f deg\n", value * 57.2957795);
			} else {
				System.out.printf("%6f rad\n", value / 57.2957795);
			}
		}
	}

}
