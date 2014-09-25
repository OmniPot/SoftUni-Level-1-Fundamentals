import java.util.Scanner;

public class _9_PointsInsideTheHouse {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		System.out.print("Ax: ");
		double ax = sc.nextDouble();
		System.out.print("Ay: ");
		double ay = sc.nextDouble();

		if ((isInSquare(ax, ay) || isInTriangle(ax, ay) || isInRec(ax, ay)) == true) {
			System.out.print("Inside");
		} else {
			System.out.println("Outside");
		}
	}

	public static boolean isInSquare(double ax, double ay) {
		boolean result = false;

		if (ax >= 12.5 && ax <= 17.5) {
			if (ay >= 8.5 && ay <= 13.5) {
				result = true;
			}
		}
		return result;
	}

	public static boolean isInTriangle(double ax, double ay) {

		double x1 = 12.5;
		double y1 = 8.5;
		double x2 = 17.5;
		double y2 = 3.5;
		double x3 = 22.5;
		double y3 = 8.5;

		double a = Math.abs(x1 * (y2 - y3) + x2 * (y3 - y1) + x3 * (y1 - y2));
		double b = Math.abs(x1 * (y2 - ay) + x2 * (ay - y1) + ax * (y1 - y2));
		double c = Math.abs(x1 * (ay - y3) + ax * (y3 - y1) + x3 * (y1 - ay));
		double d = Math.abs(ax * (y2 - y3) + x2 * (y3 - ay) + x3 * (ay - y2));
		boolean isInTriangle = Math.round(a + b + c) == d;

		if (isInTriangle == true) {
			return true;
		} else {
			return false;
		}
	}

	public static boolean isInRec(double ax, double ay) {
		boolean result = false;

		if (ax >= 20 && ax <= 22.5) {
			if (ay >= 8.5 && ay <= 13.5) {
				result = true;
			}
		}
		return result;
	}
}