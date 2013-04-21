package com.energizedant;

/**
 * Helper class provide static helper methods
 *
 * @project EnergizedAnt
 * @author KOWALEWSKI, Adam
 */
public class Helper {

    /**
     * Convert mph to kmh
     *
     * @param mph speed in mph
     * @return double speed in kmh
     */
    public static double mphToKmh(int mph) {
        double fkt = 1.609344;
        return roundTwoDecimals(mph * fkt);
    }

    /**
     * Convert kmh to mph
     *
     * @param kmh
     * @return
     */
    public static double kmhToMph(int kmh) {
        return 0;
    }

    /**
     * Simple round a double up to 2 decimals
     *
     * @param d double 123.123
     * @return double rounded 123.12
     */
    public static double roundTwoDecimals(double d) {
        return Math.round(d * 100) / 100.0;
    }

    /**
     * Generate dummy values for Payload
     *
     * @param p Payload object
     * @return Payload with dummy values
     */
    public static Payload generate(Payload p) {
        p.setAnWind(80);
        p.setAnGeo(60);
        p.setAnSolar(50);
        p.setLog("Data generated with Helper.generate().");
        return p;
    }
    
    public static void main(String[] args) {
        
        double a = 1239.32901234;
        System.out.println("Wynik " + roundTwoDecimals(a));
    }
}
