<?php
include("auto.php");
include("overzicht.php");

$ao = new AutoOverzicht();
$ao->add(new Auto("bmw", "3181", "blauw", 45677));
$ao->add(new Auto("audi", "A8", "champagne", 34566));
$ao->add(new Auto("BMW", "316", "rood", 27500));
$ao->add(new Auto("Audi", "A8", "blauw", 37000));
$ao->add(new Auto("Mercedes", "C200", "grijs", 41000));
$ao->add(new Auto("Ford", "Mondeo", "zwart", 18700));
$ao->add(new Auto("Ford", "Focus", "paars", 14300));
$ao->add(new Auto("Volkswagen", "Tiguan", "groen", 22500));

//print_r($ao->auto);

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MrWheely</title>
</head>
<body>
    <form action="index.php" methode="post">
        <select name="merk">
            <?php foreach($ao->getMerken() as $merk) { ?>
            <option><?= $merk ?></option>
            <?php } ?>
        </select>
    </form>
</body>

</html>