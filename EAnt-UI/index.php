<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EnergizedAnt - UI prototype</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/eant-icon.png" type="image/png" />
        <link href="css/eant-style.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>        
        <script type="text/javascript" src="js/jquery.flot.min.js"></script>                
        <script type="text/javascript" src="js/jquery.flot.pie.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <h1>EnergizedAnt</h1>

                <div id="menu">

                    <a href="#">My dashboard</a>
                    <a href="#">Regional comparison</a>
                    <a href="#">ROI calculator</a>

                </div>
                <div class="clear"></div>                
            </header>

            <div id="content">
                <div id="uinput" style="margin: 0 auto;">
                    <form action="index.php?do=calc" method="POST">
                        <img class="home" 
                             src="images/home_32x32.png"/>
                        <img class="battery" 
                             src="images/battery_32x32.png" />
                        <p>Enter your address</p>

                        <input type="text" name="i_address" value="" 
                               style="width: 80%; font-size: 20px; padding: 5px 5px 5px 40px; "/>
                        <p>Enter your annual power consumption in kWh</p>
                        <input type="text" name="i_consumption" value="" 
                               style="width: 200px; font-size: 20px; padding: 5px 5px 5px 40px; " />
                        <input type="submit" value="Calculate" 
                               style="width: 200px; margin: 5px; padding: 5px; font-size: 20px;" />
                    </form>

                </div>
                <div class="left">
                    <p style="margin-top: 50px;">Your estimated annual Energy income compared to a generic 
                        modern refridgerator</p>
                    <div id="chartl" class="chart"></div>
                </div>
                <div class="right">
                    <p style="margin-top: 50px;">Your estimated personal energy mix</p>
                    <div id="chartr" class="chart"></div>
                </div>

                <div class="clear"></div>
                <div id="data">                                        
                    <p>
                        Various text information will be displayed here. As soon 
                        the user realise the potential of RE thanks to charts 
                        presentet above he will be interesetet to get more information 
                        about RE and about features available on this site.
                    </p>

                    <h2>My Dashboard</h2> 
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                    <h2>Regional comparison</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                    <h2>ROI calculator</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>


                </div>

            </div>
            <footer>
                <span>2013 spaceappschallenge (Adam & Jesus)</span>
            </footer>
        </div>

        <script type="text/javascript" src="js/eant-code.js"></script>  

    </body>
</html>
