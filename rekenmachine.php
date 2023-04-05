<?php
//	print_r(value:$_POST) //
//	echo empty ($_POST['number1']); //
//	echo '<hr>'; //

	if (! empty($_POST) && is_numeric($_POST['number1']) && is_numeric($_POST['number2']))

//	if(isset($_POST['number1'])) && (isset($_POST['number2'])) //
{
	$out = $_POST['number1']. '-' . $_POST['number2'];
	$out .= '=';
	$out .= $_POST['number1'] - $_POST['number2'];
}
else {
	$out = "<p>vul form in</p>";
}
?>

<html>
	<body>
		<form method="post" action="">
			<input name="number1" type="text"><br>
			<input name="number2" type="text"><br>
			<input name="submit" type="submit" value="calc -">
		</form>
		<hr>
		<?php echo $out; ?>
	</body>
</html>

