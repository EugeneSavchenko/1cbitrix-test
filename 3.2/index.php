<?php require 'dayMounth.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Day_Mounth</title>
</head>
<body>

	<form action="">
		<input type="text" name="day" 	 placeholder="День"  value="<?=@$_GET['day']?>">
		<input type="text" name="mounth" placeholder="Месяц" value="<?=@$_GET['mounth']?>">
		<br>
		<button type="submit" name="submit" value="submit">Сформировать дату</button>
	</form>
	<?php printDayAndMounth(); ?>

</body>
</html>