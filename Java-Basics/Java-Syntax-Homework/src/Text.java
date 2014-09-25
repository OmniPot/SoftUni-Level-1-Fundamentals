public class Text {
	private String textContent;
	private int x;
	private int y;
	private int dx;
	private int dy;
	private String textTag;

	public Text(String textContent, int x, int y, int dx, int dy) {

		this.x = x;
		this.y = y;
		this.dx = dx;
		this.dy = dy;
		this.textContent = textContent;
		this.textTag = String.format(
				"\n<text x=\"%d\" y=\"%d\" dx=\"%d\" dy=\"%d\">%s</text>\n", x, y,
				dx, dy, textContent);
	}

	public String getTextTag() {
		return textTag;
	}
}
