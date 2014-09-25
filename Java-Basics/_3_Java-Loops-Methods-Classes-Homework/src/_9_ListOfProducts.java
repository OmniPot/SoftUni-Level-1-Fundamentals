import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.IOException;
import java.io.OutputStreamWriter;
import java.io.UnsupportedEncodingException;
import java.io.Writer;
import java.util.Map;
import java.util.SortedMap;
import java.util.TreeMap;

public class _9_ListOfProducts {

	public static void main(String[] args) {
		Map<Double, String> prod;

		try {
			prod = readAndSort();
			writeToFile(prod);
		} catch (IOException ioe) {
			ioe.printStackTrace();
		}
	}

	public static void writeToFile(Map<Double, String> prod)
			throws UnsupportedEncodingException, FileNotFoundException,
			IOException {
		Writer writer = new BufferedWriter(new OutputStreamWriter(
				new FileOutputStream("output.txt"),
				"utf-8"));

		for (Double key : prod.keySet()) {
			writer.write(String.format("%.2f %s\n", key, prod.get(key)));
		}
		writer.close();
	}

	public static Map<Double, String> readAndSort()
			throws FileNotFoundException, IOException {
		BufferedReader br;
		SortedMap<Double, String> prod;
		prod = new TreeMap<>();
		br = new BufferedReader(new FileReader(
				"input.txt"));
		String line = br.readLine();
		while (line != null) {
			prod.put(Double.parseDouble(line.substring(line.indexOf(' '))),
					line.substring(0, line.indexOf(' ')));
			line = br.readLine();
		}
		br.close();
		return prod;
	}
}
