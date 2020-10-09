<?php

function printAngleBetweenArrows ()
{
	if (!isset($_GET['submit'])) {
	return;
	}

	$clock = trim($_GET['clock']);
	$minutes = trim($_GET['minutes']);

	if ($clock == '' || $minutes == '') {
		?><div>Заполните все поля</div><?
		return;
	}

	if (!is_numeric($clock) || !is_numeric($minutes)) {
		?><div>Все поля должны быть числами</div><?
		return;
	}

	$sumAngle = calcAngle($clock, $minutes);

	?>
	<div>Угол между стрелками равен:<?=$sumAngle?></div>
	<?
}

function calcAngle($clock, $minutes)
{
	return ($clock + ($minutes / 60)) * 30 - $minutes * 6;
}

