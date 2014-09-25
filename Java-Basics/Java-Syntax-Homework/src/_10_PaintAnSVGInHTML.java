import java.io.IOException;

public class _10_PaintAnSVGInHTML {

	public static void main(String[] args) {

		// Creating elements

		Path path = new Path(
				"2,2",
				"blue",
				"M100 100 520 100 M100 175 520 175 M100 250 520 250 M100 325 520 325 M100 400 520 400 M100 475 520 475 M120 80 l0 425 M195 80 l0 425 M270 80 l0 425 M345 80 l0 425 M420 80 l0 425 M495 80 l0 425");
		Text t1 = new Text("3.5", 100, 100, -30, 5);
		Text t2 = new Text("6", 100, 175, -30, 5);
		Text t3 = new Text("8.5", 100, 250, -30, 5);
		Text t4 = new Text("11", 100, 325, -30, 5);
		Text t5 = new Text("13.5", 100, 400, -40, 5);
		Text t6 = new Text("16", 100, 475, -30, 5);
		Text t7 = new Text("10", 100, 100, 5, -30);
		Text t8 = new Text("12.5", 175, 100, 0, -30);
		Text t9 = new Text("15", 250, 100, 10, -30);
		Text t10 = new Text("17.5", 325, 100, 5, -30);
		Text t11 = new Text("20", 400, 100, 10, -30);
		Text t12 = new Text("22.5", 475, 100, 5, -30);
		Rect rect1 = new Rect(195, 250, 150, 150);
		Rect rect2 = new Rect(420, 250, 75, 150);
		Polygon polyg = new Polygon("195,250 495,250 345,100");
		Point po1 = new Point(10, 9.7);
		Point po2 = new Point(11.6, 7);
		Point po3 = new Point(12.5, 6);
		Point po4 = new Point(12.5, 14.5);
		Point po5 = new Point(13.5, 6.9);
		Point po6 = new Point(15.02, 4.83);
		Point po7 = new Point(16.33, 14.03);
		Point po8 = new Point(17.5, 3);
		Point po9 = new Point(17.72, 9.12);
		Point po10 = new Point(18.6, 3.9);
		Point po11 = new Point(19.693, 13.4);
		Point po12 = new Point(21.3, 5.5);
		Point po13 = new Point(22, 14);
		Point po14 = new Point(23, 7.5);
		Point po15 = new Point(23.001, 11.01);

		Point pi1 = new Point(13.13, 9.15);
		Point pi2 = new Point(15, 6);
		Point pi3 = new Point(15.11, 7.01);
		Point pi4 = new Point(16.4, 5.4);
		Point pi5 = new Point(17.51, 4.01);
		Point pi6 = new Point(17.5, 13.5);
		Point pi7 = new Point(17.60, 8.50);
		Point pi8 = new Point(18.6, 6);
		Point pi9 = new Point(20, 6);
		Point pi10 = new Point(21, 7.5);
		Point pi11 = new Point(21, 13.5);
		Point pi12 = new Point(21.45, 9.7);
		Point pi13 = new Point(22.5, 8.5);

		// Creating groups

		Group lines = new Group("none", "", "", "", "", "");
		lines.addElement(path.getPathTag());

		Group texts = new Group("", "sans-serif", "20", "none", "", "");
		texts.addElement(t1.getTextTag() + t2.getTextTag() + t3.getTextTag()
				+ t4.getTextTag() + t5.getTextTag() + t6.getTextTag()
				+ t7.getTextTag() + t8.getTextTag() + t9.getTextTag()
				+ t10.getTextTag() + t11.getTextTag() + t12.getTextTag());

		Group house = new Group("rgb(192,192,192)", "", "", "blue", "2", "0.5");
		house.addElement(rect1.getRectTag() + rect2.getRectTag()
				+ polyg.getPolygonTag());

		Group pointsOut = new Group("grey", "", "", "grey", "2", "");
		Group pointsIn = new Group("black", "", "", "black", "2", "");
		pointsOut.addElement(po1.getPointTag() + po2.getPointTag()
				+ po3.getPointTag() + po4.getPointTag() + po5.getPointTag()
				+ po6.getPointTag() + po7.getPointTag() + po8.getPointTag()
				+ po9.getPointTag() + po10.getPointTag() + po11.getPointTag()
				+ po12.getPointTag() + po13.getPointTag() + po14.getPointTag()
				+ po15.getPointTag());

		pointsIn.addElement(pi1.getPointTag() + pi2.getPointTag()
				+ pi3.getPointTag() + pi4.getPointTag() + pi5.getPointTag()
				+ pi6.getPointTag() + pi7.getPointTag() + pi8.getPointTag()
				+ pi9.getPointTag() + pi10.getPointTag() + pi11.getPointTag()
				+ pi12.getPointTag() + pi13.getPointTag());

		// Creating the SVG

		SVG svg = new SVG(600, 600);
		svg.addGroup(lines.getGroupTag() + texts.getGroupTag()
				+ house.getGroupTag() + pointsOut.getGroupTag()
				+ pointsIn.getGroupTag());

		// Creating the HTML DOCUMENT

		try {
			HTMLDocument doc = new HTMLDocument(
					"house.html", "utf-8",
					svg.getSVGContent());
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
}