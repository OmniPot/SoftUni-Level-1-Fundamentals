import java.util.Scanner;

public class _7_OneBitsCounter {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		int n = sc.nextInt();
		System.out.println(Integer.bitCount(n));
	}

}
