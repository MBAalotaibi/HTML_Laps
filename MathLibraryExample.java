public class MathLibraryExample {
    public static void main(String[] args) {
        System.out.print("Input : ");
        for (int i = -4; i <= 4; i = i + 4) {
            double d = Math.sqrt(i);
            double e = 4 / d;
            double f = Math.round(e);
            System.out.println("sqrt(" + i + ") = " + d);
            System.out.println("4/" + d + " = " + e);
            System.out.println("round(" + e + ") = " + f);
            System.out.println(e + " > 0 : " + (e > 0));
            System.out.println(e + " <= 0 : " + (e <= 0));
            for (double g = 0.4; g < 0.7; g = g + 0.1) {
                double r = i + g * Math.signum(i);
                System.out.println("round(" + r + ") = " + Math.round(r));
            }
        }
    }
}