import java.util.Arrays;
import java.util.Scanner;

public class _1_SortArrayOfNumbers {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		int n = sc.nextInt();
		int[]numbers = new int[n];
		
		for (int j = 0; j < n; j++) {
			numbers[j] = sc.nextInt();
		}
		
		Arrays.sort(numbers);
		
		for (int i : numbers) {
			System.out.printf("%d ",i);
		}
	}

}
