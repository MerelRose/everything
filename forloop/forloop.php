<!DOCTYPE html>
<html>
<body>
<table  border='1'; cellpadding="3"; cellspacing="0";>

<?php
for($i=1;$i<=1;$i++)
{
    
    for ($j=1;$j<=100;$j++)
    {
        echo "<tr>";
        echo "<td>$i x $j =".$i*$j."</td>";
        echo "</tr>";
    }
}
?>
</table>

<table border='1'; cellpadding="3"; cellspacing="0";>
<?php
for($i=2;$i<=2;$i++)
{
    
    for ($j=1;$j<=100;$j++)
    {
        echo "<tr>";
        echo "<td>$i x $j =".$i*$j."</td>";
        echo "</tr>";
    }
}
?>
</table>
</body>
</html>