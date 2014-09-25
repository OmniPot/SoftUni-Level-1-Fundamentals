import java.util.Scanner;

public class _2_SequenceOfEqualStrings {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		String input = sc.nextLine();
		String[] elements = input.split(" ");

		for (int i = 0; i < elements.length - 1; i++) {
			if (elements[i + 1].equals(elements[i])) {
				System.out.printf("%s ", elements[i + 1]);
			} else {
				System.out.println(elements[i]);
			}
		}
		if (elements[elements.length - 1].equals(elements[elements.length - 2])) {
			System.out.printf("%s", elements[elements.length - 1]);
			return;
		}
		System.out.printf("%s", elements[elements.length - 1]);
	}

}
