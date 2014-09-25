import java.util.Scanner;

public class _2_TriangleArea {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);

		int Ax = sc.nextInt();
		int Ay = sc.nextInt();
		int Bx = sc.nextInt();
		int By = sc.nextInt();
		int Cx = sc.nextInt();
		int Cy = sc.nextInt();

		double p = Math.abs(Ax * (By - Cy) + Bx * (Cy - Ay) + Cx * (Ay - By));
		System.out.println(p/2);
	}

}
