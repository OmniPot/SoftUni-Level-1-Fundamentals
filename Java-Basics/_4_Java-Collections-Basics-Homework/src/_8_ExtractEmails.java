import java.util.Scanner;

public class _8_ExtractEmails {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		String text = sc.nextLine();
		String[] emails = text.split("\\s+");

		for (int i = 0; i < emails.length; i++) {
			if (emails[i]
					.matches("([a-zA-Z0-9]*[\\W]*[a-zA-Z0-9]+[@][a-z]+[.a-z]+[a-z]*)")) {
				System.out.println(emails[i].replaceAll("\\.$", ""));
			}
		}
	}
}
