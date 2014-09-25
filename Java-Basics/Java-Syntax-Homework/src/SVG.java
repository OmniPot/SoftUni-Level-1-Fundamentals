public class SVG {
	private int height;
	private int width;
	private String svgTag;

	public SVG(int height, int width) {
		this.height = height;
		this.width = width;
		this.svgTag = String.format(
				"\n<svg width=\"%d\" height=\"%d\"></svg>\n", this.width,
				this.height);
	}

	public String getSVGContent() {
		return svgTag;
	}

	public void addGroup(String groupTag) {
		svgTag = svgTag.substring(0, svgTag.indexOf("</svg>")) + groupTag
				+ svgTag.substring(svgTag.indexOf("</svg>"));
	}
}
