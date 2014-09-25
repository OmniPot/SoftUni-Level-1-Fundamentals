import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

public class _8_SumNumbersFromTextFile {

	public static void main(String[] args) {

		int sum = 0;
		BufferedReader br;
		try {
			br = new BufferedReader(new FileReader(
					"input.txt"));
			String line = "";
			int num = 0;
			while ((line = br.readLine()) != null) {
				num = Integer.parseInt(line);
				sum += num;

			}
			System.out.println(sum);
			br.close();
		} catch (IOException ioe) {
			ioe.printStackTrace();
		}
	}
}
