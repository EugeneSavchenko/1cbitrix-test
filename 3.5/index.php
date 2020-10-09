<?php require 'degree_between_clock_hands.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>degree_between_clock_hands</title>
</head>
<body>

	<form action="">
		<input type="text" name="clock"   placeholder="Часы" 	value="<?=@$_GET['clock']?>">
		<input type="text" name="minutes" placeholder="Минуты" 	value="<?=@$_GET['minutes']?>">
		<br>
		<button type="submit" name="submit" value="submit">Рассчитать градус между стрелками часов</button>
	</form>
	<?php printAngleBetweenArrows(); ?>

</body>
</html>