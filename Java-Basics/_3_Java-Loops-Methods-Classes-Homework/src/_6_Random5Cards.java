import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.util.Random;
import java.util.Scanner;

public class _6_Random5Cards {

	public static void main(String[] args) {

		String[] faces = { "2", "3", "4", "5", "6", "7", "8", "9", "10", "J",
				"Q", "K", "A" };
		String[] suits = { "♣", "♦", "♥", "♠", };

		List<String> cards = new ArrayList<>();
		for (int i = 0; i < faces.length; i++) {
			for (int j = 0; j < suits.length; j++) {
				cards.add(faces[i] + suits[j]);
			}
		}

		Scanner sc = new Scanner(System.in);
		int n = sc.nextInt();
		long seed = System.nanoTime();

		for (int i = 0; i < n; i++) {
			for (int j = 0; j < 5; j++) {
				Collections.shuffle(cards);
				System.out.print(cards.get(j) + " ");
			}
			System.out.print("\n");
		}
	}
}
