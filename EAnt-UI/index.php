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
                        <p>Enter your address</p>
                        <input type="text" name="i_address" value="" 
                               style="width: 80%; font-size: 20px; padding: 5px 5px 5px 40px; "/>
                        <p>Enter your annual power consumption</p>
                        <input type="text" name="i_consumption" value="" />
                        <input type="submit" value="Calculate" />
                    </form>

                </div>

                <div id="chartl" class="chart left"></div>

                <div id="chartr" class="chart right"></div>

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
                <span>2013 Adam Kowalewski</span>
            </footer>
        </div>

        <script type="text/javascript" src="js/eant-code.js"></script>  

    </body>
</html>
