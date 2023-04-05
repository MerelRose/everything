<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <h1>Rekenmachine</h1>
    <form action="" method="post">
        <input type="number" name="getal1" value=<?= $cfr1> <br>
        <input type="number" name="getal2" value=<?= $cfr2> <br>
        <input type="submit" value="=">
    </form><br>

<?php
$cfr1 = $_POST['getal1'];
$cfr2 = $_POST['getal2'];

if ( isset($_post['getal1']) )
{
  echo $cfr1 . ' + ' .$cfr2 . ' = ' . $cfr1 + $cfr2 . '<br>';

} 
else  

echo "Kunt u 2 waardes invullen en dan op = kilkken?"

    
?>

</body>
</html>