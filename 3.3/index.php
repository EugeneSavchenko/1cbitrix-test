<?php require 'calc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calc</title>
</head>
<body>

	<form action="">
		<input type="text" name="Number1" placeholder="Num1">
		<select name="operator" id="">
			<option value="">None</option>
			<option value="Add">Add</option>
			<option value="Subtract">Subtract</option>
			<option value="Divide">Divide</option>
			<option value="Multiply">Multiply</option>
		</select>
		<input type="text"	name="Number2" placeholder="Num2">
		<br>
		<button type="submit" name="submit" value="submit">Calculate</button>
	</form>
	<?php calculate(); ?>

</body>
</html>