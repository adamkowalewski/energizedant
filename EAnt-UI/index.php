<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EnergizedAnt - UI prototype</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/images/eant-icon.png" type="image/png" />
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
                <div id="uinput">
                    <form action="index.php?do=calc" method="POST">
                        <p>Enter your address</p>
                        <input type="text" name="i_address" value="" name="test mal" />
                        <p>Enter your annual power consumption</p>
                        <input type="text" name="i_consumption" value="" />
                        <input type="submit" value="Calculate" />
                    </form>

                </div>

                <div id="chartl" class="chart left"></div>

                <div id="chartr" class="chart right"></div>

                <div class="clear"></div>
                <div id="data">
                    <p>text information here</p>
                </div>

            </div>
            <footer>
                <span>2013 Adam Kowalewski</span>
            </footer>
        </div>

        <script type="text/javascript" src="js/eant-code.js"></script>  

    </body>
</html>
