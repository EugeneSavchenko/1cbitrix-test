<?php require 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Deposit_income</title>
</head>
<body>

	<form action="">
		<input type="text" name="deposit_amount" 	placeholder="Сумма вклада"    value="<?=isset($_GET['deposit_amount']) ? $_GET['deposit_amount'] : ''?>">
		<input type="text" name="month_count" 		placeholder="Срок в месяцах"  value="<?=@$_GET['month_count']?>">
		<input type="text" name="annual_percentage" placeholder="Годовой процент" value="<?=@$_GET['annual_percentage']?>">
		<br>
		<button type="submit" name="submit" value="submit">Рассчитать сумму вклада по окончанию срока</button>
	</form>
	<?php printDeposit(); ?>

</body>
</html>