import java.util.Scanner;

public class _2_Generate3LetterWords {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		String prototype = sc.next("\\w+");
		char[] letters = prototype.toCharArray();
		String outPut = "";

		for (int i = 0; i < letters.length; i++) {
			for (int j = 0; j < letters.length; j++) {
				for (int k = 0; k < letters.length; k++) {
					String word = Character.toString(letters[i])
							+ Character.toString(letters[j])
							+ Character.toString(letters[k]);
					if (outPut.contains("word")) {
						continue;
					} else {
						outPut += word + " ";
					}
				}
			}
		}
		System.out.println(outPut);
	}
}
