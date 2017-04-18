<!DOCTYPE html>
    <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>ukladani formulare do souboru</title>
        <link rel="stylesheet" type="text/css" href="styly/styly.css"
        </head>
        <body>
        <h1>Objektova kalkulacka</h1>

        <form method="GET">
            1.cislo </br>
        <input name="prvniCislo" type="text" size="15" /><br/>
            2.cislo </br>
        <input name="druheCislo" type="text" size="15" /><br/>
        <input type="submit" value="vypocitej" /></br>
        </form>
    
<?php
        require_once ('classes/Kalkulacka.php');
        if ($_GET)
        {
           $kalkulacka = new Kalkulacka();
           $kalkulacka->prvniCislo = $_GET ['prvniCislo'];
           $kalkulacka->druheCislo = $_GET ['druheCislo'];
        echo ("<h2>vysledky</h2>");
        echo('soucet:');
        echo($kalkulacka->soucet()).'</br>';
        echo('rozdil:');
        echo($kalkulacka->rozdil()).'</br>';
        echo('soucet:');
        echo($kalkulacka->soucin()).'</br>';
        echo('podil:');
        echo($kalkulacka->podil()).'</br>';
        }
?>
        </body>
    </html>