import java.util.Scanner;

public class _7_CountSubstringOccurance {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		String input = sc.nextLine();
		String wantedSubStr = sc.nextLine();

		int counter = 0;

		for (int i = 0; i <= input.length() - wantedSubStr.length(); i++) {
			if (input.substring(i, i + wantedSubStr.length()).toLowerCase()
					.equals(wantedSubStr.toLowerCase())) {
				counter++;
			}
		}
		System.out.println(counter);
	}

}
