import java.util.ArrayList;

public class _3_FullHouse {

	public static void main(String[] args) {

		String[] faces = { "2", "3", "4", "5", "6", "7", "8", "9", "10", "J",
				"Q", "K", "A" };
		String[] suits = { "♣", "♦", "♥", "♠", };

		ArrayList<String> cards = new ArrayList<String>();
		for (int i = 0; i < faces.length; i++) {
			for (int j = 0; j < suits.length; j++) {
				cards.add(faces[i] + suits[j]);
			}
		}
		int counter = 0;
		for (int i = 0; i < cards.size(); i++) {

			char first = cards.get(i).charAt(0);

			for (int j = i + 1; j < cards.size(); j++) {

				char second = cards.get(j).charAt(0);

				for (int k = j + 1; k < cards.size(); k++) {

					char third = cards.get(k).charAt(0);

					if ((first == second) && first == third) {

						for (int l = 0; l < cards.size() - 1; l++) {

							char fourth = cards.get(l).charAt(0);

							if (fourth != first) {

								for (int m = l + 1; m < cards.size(); m++) {
									if (fourth != first) {

										char fifth = cards.get(m).charAt(0);

										if (fourth == fifth) {
											counter++;
											System.out.println(cards.get(i)
													+ " " + cards.get(j) + " "
													+ cards.get(k) + " "
													+ cards.get(l) + " "
													+ cards.get(m) + " ");
										}
									}
								}
							}
						}
					}
				}
			}
		}
		System.out.println(counter);
	}
}
