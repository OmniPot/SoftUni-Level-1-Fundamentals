import java.util.Scanner;

public class _5_DecimalToHexadeciamal {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		int number = sc.nextInt();
		System.out.println(Integer.toHexString(number).toUpperCase());
	}

}
