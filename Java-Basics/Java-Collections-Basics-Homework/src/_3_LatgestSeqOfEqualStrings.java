import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class _3_LatgestSeqOfEqualStrings {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		String input = sc.nextLine();
		String[] elements = input.split(" ");

		int len = 1;
		int bestLen = 1;
		int bestIndex = 0;

		for (int i = 0; i < elements.length - 1; i++) {
			if (elements[i + 1].equals(elements[i])) {
				len++;
				if (bestLen < len) {
					bestLen = len;
					bestIndex = i;
				}
			} else {
				len = 1;
			}
		}
		for (int i = 0; i < bestLen; i++) {
			System.out.printf(String.format("%s ", elements[bestIndex]));
		}
	}
}
