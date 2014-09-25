import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.io.PrintWriter;
import java.math.BigDecimal;
import java.util.HashMap;
import java.util.Map;

public class _10_OrderOfProducts {

	@SuppressWarnings("resource")
	public static void main(String[] args) {
		Map<String, BigDecimal> prod = new HashMap<String, BigDecimal>();
		BufferedReader reader;
		try {
			// READ INPUT;
			
			reader = new BufferedReader(new FileReader(
					"input.txt"));
			String line = reader.readLine();
			while (line != null) {
				prod.put(line.substring(0, line.indexOf(' ')), new BigDecimal(
						line.substring(line.indexOf(' ') + 1)));
				line = reader.readLine();
			}
			// READ ORDER AND CALC TOTAL SUM
			
			reader = new BufferedReader(new FileReader(
					"order.txt"));
			BigDecimal totalSum = BigDecimal.ZERO;
			line = reader.readLine();
			while (line != null) {
				BigDecimal times = new BigDecimal(line.substring(0,
						line.indexOf(' ')));
				String product = line.substring(line.indexOf(' ') + 1);
				for (String key : prod.keySet()) {
					if (key.equals(product)) {
						totalSum = totalSum.add(times.multiply(prod.get(key)));
					}
				}
				line = reader.readLine();
			}

			PrintWriter writer = new PrintWriter(
					"output.txt", "UTF-8");
			writer.write(String.format("%.1f", totalSum));
			
			writer.close();
			reader.close();
		} catch (IOException ioe) {
			ioe.printStackTrace();
		}

	}
}