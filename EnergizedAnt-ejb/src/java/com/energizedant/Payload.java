package com.energizedant;

/**
 *
 * @author KOWALEWSKI, Adam
 */
public class Payload {

    private int anSolar;
    private int anWind;
    private int anGeo;
    private String log;

    public int getAnSolar() {
        return anSolar;
    }

    public void setAnSolar(int anSolar) {
        this.anSolar = anSolar;
    }

    public int getAnWind() {
        return anWind;
    }

    public void setAnWind(int anWind) {
        this.anWind = anWind;
    }

    public int getAnGeo() {
        return anGeo;
    }

    public void setAnGeo(int anGeo) {
        this.anGeo = anGeo;
    }

    public String getLog() {
        return log;
    }

    public void setLog(String log) {
        this.log = log;
    }
}
