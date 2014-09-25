import java.util.Scanner;

public class _3_PointsInsideAFigure {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);

		double x = sc.nextDouble();
		double y = sc.nextDouble();

		if ((x <= 22.5 && x >= 12.5) && (y >= 6 && y <= 13.5)) {
			if (y > 8.5 && (x > 17.5 && x < 20)) {
				System.out.println("Outside");
			} else {
				System.out.println("Inside");
			}
		}
	}
}
