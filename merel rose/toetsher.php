<?php
    if (! empty($_POST) && is_numeric($_POST['ver']) && is_numeric($_POST['acc']) && is_numeric($_POST['man']))

{
	$out = 'De sales afdeling heeft ';
	$out .=$_POST['ver'] + $_POST['acc'];
    $out .= ' Werknemers en ';
    $out .=$_POST['acc'];
    $out .= ' accountants.';

        $out2 = ' De afdeling Sales geeft per jaar ';
        $out2 .=$_POST['ver'] * 3000 + $_POST['acc'] * 3000;
        $out2 .= ' uit aan salarissen.';

            $out3 = ' De afdeling Management geeft per jaar ';
            $out3 .=$_POST['man'] * 4500;
            $out3 .= ' uit aan salarissen.';
}

else {
	$out = "<p>vul form in</p>";
}


?>

<html>
    <body>
        <form method="post" action="">
            <h1>Bedrijfsvoering</h1>
            <p>Afdeling - Functie</p>
            <p>Sales - verkopers:</p>
                <input type="number" name="ver">
            <p>Sales - accountants:</p>
                <input type="number" name="acc">
            <p>management - team manager:</p>
                <input type="number" name="man">
        <br>
                <input name="submit" type="submit" value="Bereken">
        </form>
        <hr>
            <?php 
                echo $out;
                echo '<br>';
                echo $out2; 
                echo '<br>';
                echo $out3;
            ?>

        <form method="post" action="">
            <h2>Bedrijfsvoering B</h2>
            <p>Afdeling - Functie</p>
                <input type="text" name="afdeling">
        </form>
        <hr>
    </body>
</html>
