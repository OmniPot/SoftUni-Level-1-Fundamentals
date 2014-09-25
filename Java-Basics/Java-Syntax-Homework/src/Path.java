public class Path {
	private String strokeDasharray;
	private String stroke;
	private String d;
	private String pathTag;

	public Path(String strokeDasharray, String stroke, String d) {
		this.strokeDasharray = strokeDasharray;
		this.stroke = stroke;
		this.d = d;
		this.pathTag = String.format(
				"\n<path stroke-dasharray=\"%s\" stroke=\"%s\" d=\"%s\"></path>\n",
				strokeDasharray, stroke, d);
	}

	public String getPathTag() {
		return pathTag;
	}
}
