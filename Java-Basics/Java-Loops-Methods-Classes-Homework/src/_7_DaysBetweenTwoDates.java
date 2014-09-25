import java.time.LocalDate;
import java.time.Period;
import java.time.format.DateTimeFormatter;
import java.util.Scanner;

public class _7_DaysBetweenTwoDates {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		
		DateTimeFormatter formatter = DateTimeFormatter.ofPattern("d-MM-yyyy");

		LocalDate start = LocalDate.parse(sc.nextLine(), formatter);
		LocalDate end = LocalDate.parse(sc.nextLine(), formatter);

		Period p = start.until(end);
		System.out.println(p.getDays());

	}
}
