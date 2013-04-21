package com.energizedant.ejb;

import com.energizedant.Helper;
import com.energizedant.Payload;
import javax.ejb.Stateless;

/**
 *
 * @author KOWALEWSKI, Adam
 */
@Stateless
public class EAntBean implements EAntBeanLocal {

    @Override
    public String getVersion() {
        return "EnergizedAnt v0.1";
    }

    @Override
    public String getStatus() {
        return "dummy data";
    }

    @Override
    public Payload allByString(String adrOrCoord) {
        Payload res = new Payload();
        return Helper.generate(res);
    }

    @Override
    public Payload allByAddress(String address) {
        Payload res = new Payload();
        return Helper.generate(res);
    }

    @Override
    public Payload allByCoordinates(String lat, String lon) {
        Payload res = new Payload();
        return Helper.generate(res);
    }
}
