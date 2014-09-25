public class Rect {
	private int x;
	private int y;
	private int width;
	private int height;
	private String rectTag;

	public Rect(int x, int y, int width, int height) {
		this.x = x;
		this.y = y;
		this.width = width;
		this.height = height;
		this.rectTag = String
				.format("\n<rect x=\"%d\" y=\"%d\" width=\"%d\" height=\"%d\"></rect>\n",
						x, y, width, height);
	}

	public String getRectTag() {
		return rectTag;
	}
}
