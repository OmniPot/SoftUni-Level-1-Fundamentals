import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class _12_CardFrequencies {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		String input = sc.nextLine();
		List<String> cards = new ArrayList<>(Arrays.asList(input
				.split("[^a-zA-Z0-9]+")));

		int cardsLen = cards.size();

		Map<String, Integer> map = new TreeMap<>();

		for (int i = 0; i < cards.size(); i++) {

			int cardOccurance = 1;

			for (int j = cards.size() - 1; j >= i + 1; j--) {

				if (cards.get(i).equals(cards.get(j))) {
					cardOccurance += 1;
					cards.remove(j);
				}

			}
			map.put(cards.get(i), (cardOccurance * 100) / cardsLen);
			cardOccurance = 1;
		}

		for (int i = 0; i < cards.size(); i++) {
			for (String card : map.keySet()) {
				System.out.println(cards.get(i) + " -> "
						+ map.get(cards.get(i)) + "%");
				break;
			}
		}
	}
}
