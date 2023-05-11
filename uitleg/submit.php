<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        
    

    <form>
        naam: <input type="text" name="achternaam"/>
        wachtwoord: <input type="password" name="ww"/>
        getal: <input type="number" name="leeftijd"/>

        <input type="submit">
    
    </form>

    <?php
        echo "<br>";
        echo $_POST['achternaam'];
        echo "<br>";
        echo $_POST['ww'];
        echo "<br>";
        echo $_POST['leeftijd'];

        $age = $_POST['leeftijd'];
        if ();

    ?>

    </body>
</html>