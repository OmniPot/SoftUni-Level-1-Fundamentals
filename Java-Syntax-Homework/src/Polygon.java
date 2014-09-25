public class Polygon {
	private String points;
	private String polygonTag;

	public Polygon(String points) {
		this.points = points;
		this.polygonTag = String.format(
				"\n<polygon points=\"%s\"></polygon>\n", points);
	}

	public String getPolygonTag() {
		return polygonTag;
	}
}
