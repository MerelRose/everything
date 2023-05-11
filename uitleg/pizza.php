<?php

	if (! empty($_POST) && is_numeric($_POST['magarita']) && is_numeric($_POST['salami']) && is_numeric($_POST['hawaii']))
    {
        $out = $_POST['magarita']. ' magarita(s)';
        $out .= '<br>';
        $out .= $_POST['salami']. ' salami(s)';
        $out .= '<br>';
        $out .= $_POST['hawaii']. ' hawaii(s)';
        $out .= '<br>';
        $out .= 'Uw totaal is: €'. ($_POST['hawaii'] * 8.99) + ($_POST['salami'] * 8.99) + ($_POST['magarita'] * 8.99);
        $out .= '<br>';
    }
    else {
        $out ='zet tenminste een nummer in elk vak (0 is ook geldig)';
        $out2 .= '<br>';
    }

    if (empty($_POST['bezorging'])) {
        $out2 = 'U kunt uw bestelling ophalen bij MyPizzaPlace, pizzastraat 22 Heerenveen.';
        $out2 .= '<br>';
        $out2 .= 'PS. als u niet binnen 40 min. uw bestelling ophaalt wordt hij weg gegooid.';
      } else {
        $out2 = 'uw bestelling wordt zo snel mogelijk bezorgt op '. $_POST['adress'];
        $out2 .= '<br>';
        $out2 .= 'PS. het adress word gecheckt voordat u bestelling wordt gemaakt.';
        $out2 .= '<br>';
        $out2 .= 'Dit betekent dat we kijken of het een echt address is.';
      }

?>

<html>
<head>
    <titel>Alle pizza's zijn 8,99 per stuk.</titel>
</head>
<body>
    <form method="post" action="">
        <p>Aantal Magarita's:</p>
            <input type="number" name="magarita">
        <p>Aantal Salami's:</p>
            <input type="number" name="salami">
        <p>Aantal Hawaii's:</p>
            <input type="number" name="hawaii">
        <p>Bezorging: 3,-</p>
            <input type="checkbox" name="bezorging">  
        <p>Adress:</p>
            <input type="text" name="adress">
            <input type="submit" value="order">
    </form>
    <?php   echo $out;
            echo $out2; ?>
</body>
</html>
