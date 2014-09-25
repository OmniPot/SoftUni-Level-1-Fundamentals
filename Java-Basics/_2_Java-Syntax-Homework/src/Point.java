public class Point {
	private double cx;
	private double cy;
	private int r = 3;
	private String pointTag;

	public Point(double cx, double cy) {
		this.cx = 120 + ((cx - 10) * 30);
		this.cy = 100 + ((cy - 3.5) * 30);
		this.pointTag = String.format(
				"\n<circle cx=\"%f\" cy=\"%f\" r=\"%d\"></circle>\n", this.cx,
				this.cy, r);
	}

	public String getPointTag() {
		return pointTag;
	}
}
