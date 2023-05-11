<DOCTYPE html>
<head>
    <style>
        #boom{
            text-align:center
        }
    </style> 
</html>

<?php

echo "<div id='boom'>";

for ($i=0 ; $i <25; $i++) {
    for ($j=0; $j < $i ; $j++){
        echo "*";
    }
    echo "<br>";
}

echo "</div>";

?>