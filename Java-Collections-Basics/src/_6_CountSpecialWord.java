import java.util.Scanner;

public class _6_CountSpecialWord {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		String[] input = sc.nextLine().split("\\W+");
		String wantedWord = sc.nextLine();
		
		int counter = 0;

		for (int i = 0; i < input.length; i++) {
			if (input[i].toLowerCase().equals(wantedWord.toLowerCase())) {
				counter++;
			}
		}
		System.out.println(counter);
	}

}
