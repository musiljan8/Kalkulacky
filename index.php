<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Ukladani formulare do souboru</title>
    </head>
    <body>
        <h1>Objektova kalkulacka</h1>

        <form method="GET">
            1.cislo <br/>
            <input name="prvniCislo" type="text" size="15" /><br/>
            2.cislo <br/>
            <input name="druheCislo" type="text" size="15" /><br/>
            <input type="submit" value="vypocitej" /><br/>
        </form>

        <?php
        require_once ('classes/Kalkulacka.php');
        if (isset($_GET)) {
            $kalkulacka = new Kalkulacka();
            $kalkulacka->prvniCislo = $_GET['prvniCislo'];
            $kalkulacka->druheCislo = $_GET['druheCislo'];
            
            echo "<h2>Vysledky</h2>";
            echo "soucet: " . $kalkulacka->soucet() . "<br/>";
            echo "rozdil:" . $kalkulacka->rozdil() . "<br/>";
            echo "soucet:" . $kalkulacka->soucin() . "<br/>";
            echo "podil:" . $kalkulacka->podil() . "<br/>";
        }
        ?>
    </body>
</html>