import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class _4_LongestIncreasingSequence {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		String input = sc.nextLine();

		String[] strNumbers = input.split(" ");
		List<Integer> numbers = new ArrayList<>();
		List<List<Integer>> lists = new ArrayList<>();

		for (String strNum : strNumbers) {
			numbers.add(Integer.parseInt(strNum));
		}

		int len = 1;
		int bestLen = 1;

		for (int i = 0; i < numbers.size() - 1; i++) {
			List<Integer> subSeq = new ArrayList<>();
			subSeq.add(numbers.get(i));
			for (int j = i + 1; j < numbers.size(); j++) {
				if (numbers.get(j) > numbers.get(j - 1)) {
					subSeq.add(numbers.get(j));
					len++;
					i = j;
					if (i == numbers.size() - 1) {
						lists.add(subSeq);
					}
				} else {
					lists.add(subSeq);
					len = 1;
					break;
				}
				if (bestLen < len) {
					bestLen = len;
				}
			}
		}

		for (List<Integer> list : lists) {
			for (Integer i : list) {
				System.out.printf("%d ", i);
			}
			System.out.println();
		}
		for (List<Integer> list : lists) {
			if (list.size() == bestLen) {
				System.out.print("Longest: ");
				for (Integer i : list) {
					System.out.printf("%d ", i);
				}
				break;
			}
		}

	}
}
