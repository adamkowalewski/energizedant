package com.energizedant.ejb;

import com.energizedant.Payload;
import javax.ejb.Local;

/**
 *
 * @author KOWALEWSKI, Adam
 */
@Local
public interface EAntBeanLocal {

    public String getVersion();

    public String getStatus();

    public Payload allByString(String adrOrCoord);

    public Payload allByAddress(String address);

    public Payload allByCoordinates(String lat, String lon);
}
