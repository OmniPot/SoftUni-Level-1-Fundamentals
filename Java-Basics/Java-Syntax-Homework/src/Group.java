public class Group {

	private String fill;
	private String font;
	private String fontSize;
	private String stroke;
	private String strokeWidth;
	private String opacity;
	private String groupTag;

	public Group(String fill, String font, String fontSize, String stroke,
			String strokeWidth, String opacity) {
		this.fill = fill;
		this.font = font;
		this.fontSize = fontSize;
		this.stroke = stroke;
		this.strokeWidth = strokeWidth;
		this.opacity = opacity;
		this.groupTag = String
				.format("\n<g style=\"fill:%s;font:%s;font-size:%s;stroke:%s;stroke-width:%s;opacity:%s;\">\n</g>\n",
						fill, font, fontSize, stroke, strokeWidth, opacity);
	}

	public String getGroupTag() {
		return groupTag;
	}

	public void addElement(String elementTag) {
		groupTag = groupTag.substring(0, groupTag.indexOf("</g>")) + elementTag
				+ groupTag.substring(groupTag.indexOf("</g>"));
	}
}
