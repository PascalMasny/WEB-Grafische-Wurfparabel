<!DOCTYPE html>
<html lang="de">

<!--head-->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link class="stylesheet" type="text/css" href="../Website/style.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   
    
 <!--tile und icon-->

<title>Wurfparabel Rechner</title>
<link rel="icon" type="image/png" href="img/icon2.png">

<!--tile und icon-->

</head>

<body>

<div class="container-fluid bg-dark text-white"s>
    
    <!--Name-->
    
    <h1>Wurfparabelrechner</h1>
    <p>Berechnen Sie einfach eine Wurfparebel mit Grafischer Darstellung</p>

    <!--Name-->

    <br>
    <br>
    
    <!--Info-->
    
    <h3>Was ist die Wurfparabel?</h3>
    <p>Die Wurfparabel ist die Flugbahn, die ein Körper beim Wurf in einem homogenen Schwerefeld beschreibt, wenn man den Einfluss des Luftwiderstands vernachlässigt. Der schiefe Wurf stellt dabei den Regelfall dar – senkrechter und waagerechter Wurf sind Ausnahmefälle. Die Wurfparabel ist stets nach unten geöffnet; der höchste Punkt der Flugbahn ist der Scheitelpunkt der Parabel.</p>
    <a href="https://de.wikipedia.org/wiki/Wurfparabel">Wikipedia</a>
    
    <!--Info-->
    
    <br>
    <br>
    <br>
    
    <!--Bsp mit Slider-->
    
    
    
    
    <br> 

    
    
    <div class="row">
        
        <!--Inputs-->

        <div class="col-md-2">

            <h5>Input:</h5>
            
            <form action="input.php" method="get">

                Winkel Beta in Grad:
		<p>Bsp: 55</p>
		<input type="text" name="1">
		<br><br>
                Wurfgeschwindigkeit V in m/s:
		<p>Bsp: 40</p>
		<input type="text" name="2">
		<br><br>
                Starthöhe Y in m:
		<p>Bsp: 10</p>
		<input type="text" name="3">
		<br><br>
                Zeitspanne T in s:
		<p>Bsp: 10</p>
		<input type="text" name="4">
		<br><br>
                Schritweite in s:
		<p>Bsp: 0.1</p>
		<input type="text" name="5">
		<br><br>
                <br>
        
            <button type="submit" class="btn btn-primary active">Rechnen</button>
                
        </div>
            
        <!--Inputs-->
            
        <!--Zahlen-->
                
        <div class="col-md-2">
            
            <h5>Werte:</h5>
            
            Winkel Beta: <?php echo $_GET["1"]; ?> Grad
            <br>
            Wurfgeschwindigkeit V: <?php echo $_GET["2"]; ?> m/s
            <br>
            Starthöhe Y: <?php echo $_GET["3"]; ?> m
            <br>
            Zeitspanne T: <?php echo $_GET["4"]; ?> s
            <br>
            Schritweite: <?php echo $_GET["5"]; ?> s
            <br>
            
            <!--php Write-->
            
            <?php

                //B

                $myfile = fopen("B.txt", "w") or die(" Err0r: Unable to open file!");

                $txt = $_GET["1"];
                fwrite($myfile, $txt);
                $txt = "\n";
                fwrite($myfile, $txt);
                fclose($myfile);

                //B

                //V

                $myfile = fopen("V.txt", "w") or die(" Err0r: Unable to open file!");

                $txt = $_GET["2"];
                fwrite($myfile, $txt);
                $txt = "\n";
                fwrite($myfile, $txt);
                fclose($myfile);

                //V

                //Y bzw z

                $myfile = fopen("z.txt", "w") or die(" Err0r: Unable to open file!");

                $txt = $_GET["3"];
                fwrite($myfile, $txt);
                $txt = "\n";
                fwrite($myfile, $txt);
                fclose($myfile);

                //Y bzw z

                //t2

                $myfile = fopen("t2.txt", "w") or die(" Err0r: Unable to open file!");

                $txt = $_GET["4"];
                fwrite($myfile, $txt);
                $txt = "\n";
                fwrite($myfile, $txt);
                fclose($myfile);

                //t2

                //s

                $myfile = fopen("s.txt", "w") or die(" Err0r: Unable to open file!");

                $txt = $_GET["5"];
                fwrite($myfile, $txt);
                $txt = "\n";
                fwrite($myfile, $txt);
                fclose($myfile);

                //s


            ?> 
            
            <!--php Write-->
            
            <!--php execute-->
            
            
            <?php

                //Python 
                shell_exec("python Wurfphp.py");

                //gnuplot
                shell_exec("gnuplot wurf.plt");
            ?>
            
            
            <!--php execute-->
    
        </div>
        
        <!--Zahlen-->
            
        <div class="col-ms-2">
            
        <h5>Output:</h5>
            
        <img src="wurf.png" class="mx-auto d-block" width="600" height="600">
            
        </div> 
            
        <!--Zahlen-->
            
        <!--data-->
            
        <div class="col-md-2">
            
        <h5>Data:</h5>
     
        <?php
	       echo readfile("data.dat");
        ?>     
            
        </div>    
            
        <!--data-->



    </div>

   
    
<hr>
    
<!--Imprssum-->
    
    <div class="row">
            
        <div class="col-sm-1">
            
        <a href="http://10.28.8.170/masnyp/index.html">Zur Website</a></p>
        
            
        </div>
  
        
    </div>
    
    
<!--Impreeum-->
    
</div>   
    
    
</body>

</htmL>