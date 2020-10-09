<?php

$months = include 'months.php';

function printDayAndMounth()
{
	global $months;
	if(!isset($_GET['submit'])) {
		return;
	}

	$number_Day = @$_GET['day'];
	$month_Letters = @$_GET['mounth'];

	if (empty($number_Day) || empty($month_Letters)) {
		?><div>Заполните все поля</div><?
		return;
	}

	if (!is_numeric($number_Day) || !is_numeric($month_Letters)) {
		?><div>Все поля должны быть числами</div><?
		return;
	}

	?>
	<div>Вы набрали: <?=$number_Day?> <?=$months[$month_Letters]?></div>
	<?
}