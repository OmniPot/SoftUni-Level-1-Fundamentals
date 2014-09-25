import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class _11_MostFrequentWord {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		String input = sc.nextLine().toLowerCase();
		List<String> words = new ArrayList<>(Arrays.asList(input.split("\\W+")));
		int bestCount = getBestCount(words);

		Map<String, Integer> map = new TreeMap<>();

		for (String word : words) {
			int count = 1;
			for (String w : map.keySet()) {
				if (w.equals(word)) {
					count = map.get(w);
					count++;
				}
			}
			map.put(word, count);
			count = 1;
		}
		
		for (String word : map.keySet()) {
			if (map.get(word) == bestCount) {
				System.out.println(word + " -> " + bestCount);
			}
		}
	}

	private static int getBestCount(List<String> words) {
		int bestCount = 1;
		for (int i = 0; i < words.size(); i++) {
			int count = 1;
			for (int j = i + 1; j < words.size(); j++) {
				if (words.get(i).equals(words.get(j))) {
					count++;
				}
			}
			if (count > bestCount) {
				bestCount = count;
			}
		}
		return bestCount;
	}
}
