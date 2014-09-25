import java.util.ArrayList;
import java.util.Arrays;
import java.util.Comparator;
import java.util.List;
import java.util.Scanner;
import java.util.Set;
import java.util.TreeSet;

public class _10_ExtractUniqueWords {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		String input = sc.nextLine().toLowerCase();

		List<String> allWords = new ArrayList<>(Arrays.asList(input
				.split("\\W+")));

		allWords.sort(new Comparator<String>() {
			public int compare(String l1, String l2) {
				return l1.substring(0, 1).compareTo(l2.substring(0, 1));
			}
		});

		Set<String> uniqueWords = new TreeSet<String>();
		
		allWords.stream().forEach(x -> uniqueWords.add(x));
		
		uniqueWords.stream().forEach(x -> System.out.printf("%s ",x));
	}
}
