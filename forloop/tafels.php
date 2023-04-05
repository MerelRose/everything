<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body> 
<form action="" method="post">
</body>

<?php

 $render = "";
 $render .= "tafels<br>";

 $tafel = 1;

   if ( isset ( $_POST ['tafel'] ) )
   {
         $tafel = $_POST['tafel'];
   }

   for ( $i = 1 ; $i <= $_POST ['teller'] ; $i++ )
   {
      $render .= $i . " x " . $tafel . " = ";
      $render .= $i * $tafel;
      $render .= "<br>";
   }

 echo $render;

 ?>

 <form methode="post">
    <input type="number" name="tafel" value=""> <br>
    <input type="number" name="teller" placeholder="? x vul in">
    <input type="submit">
</form>