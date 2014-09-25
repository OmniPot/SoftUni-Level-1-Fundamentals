import java.util.Scanner;

public class _5_CountAllWords {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		String[] input = sc.nextLine().split("\\w+");

		int counter = 0;

		for (String word : input) {
			counter++;
		}

		System.out.println(counter - 1);
	}

}
