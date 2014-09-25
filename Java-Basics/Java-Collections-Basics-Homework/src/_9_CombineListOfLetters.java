import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class _9_CombineListOfLetters {

	public static void main(String[] args) throws IOException {

		Scanner sc = new Scanner(System.in);
		String line1 = sc.nextLine();
		String line2 = sc.nextLine();

		List<Character> list1 = new ArrayList<>();
		List<Character> list2 = new ArrayList<>();

		line1.chars().forEach(c -> {
			if (c != ' ')
				list1.add((char) c);
		});
		line2.chars().forEach(c -> {
			if (c != ' ')
				list2.add((char) c);
		});

		for (Character ch : list2) {
			if (!list1.contains(ch) && ch != ' ') {
				list1.add(ch);
			}
		}
		for (Character ch : list1) {
			System.out.printf("%c ", ch);
		}

	}
}
