package com.energizedant.ws;

import com.energizedant.Payload;
import com.energizedant.ejb.EAntBeanLocal;
import javax.ejb.EJB;
import javax.jws.WebService;
import javax.ejb.Stateless;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author KOWALEWSKI, Adam
 */
@WebService(serviceName = "EnergizedAntWS")
@Stateless()
public class EnergizedAntWS {

    @EJB
    private EAntBeanLocal ejbRef;// Add business logic below. (Right-click in editor and choose
    // "Insert Code > Add Web Service Operation")

    @WebMethod(operationName = "getVersion")
    public String getVersion() {
        return ejbRef.getVersion();
    }

    @WebMethod(operationName = "getStatus")
    public String getStatus() {
        return ejbRef.getStatus();
    }

    @WebMethod(operationName = "allByString")
    public Payload allByString(@WebParam(name = "adrOrCoord") String adrOrCoord) {
        return ejbRef.allByString(adrOrCoord);
    }

    @WebMethod(operationName = "allByAddress")
    public Payload allByAddress(@WebParam(name = "address") String address) {
        return ejbRef.allByAddress(address);
    }

    @WebMethod(operationName = "allByCoordinates")
    public Payload allByCoordinates(@WebParam(name = "lat") String lat, @WebParam(name = "lon") String lon) {
        return ejbRef.allByCoordinates(lat, lon);
    }
}
