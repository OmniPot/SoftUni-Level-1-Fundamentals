import java.io.BufferedWriter;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.OutputStreamWriter;

public class HTMLDocument {
	private String location;
	private String encoding;
	private String basicContent;

	public HTMLDocument(String location, String encoding, String content)
			throws IOException {
		this.location = location;
		this.encoding = encoding;
		this.basicContent = "<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n</body>\n</html>";
		addContent(content);
		BufferedWriter writer = null;
		writer = new BufferedWriter(new OutputStreamWriter(
				new FileOutputStream(location), encoding));
		writer.write(basicContent);
		writer.close();
	}

	public void addContent(String content) throws IOException {

		basicContent = basicContent.substring(0,
				basicContent.indexOf("</body>"))
				+ content
				+ basicContent.substring(basicContent.indexOf("</body>"));
	}
}
