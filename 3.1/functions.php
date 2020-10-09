<?php

function printDeposit()
{
	if (!isset($_GET['submit'])) {
		return;
	}

	$deposit 	= $_GET['deposit_amount'];
	$monthCount = $_GET['month_count'];
	$percentage = $_GET['annual_percentage'];

	if (empty($deposit) || empty($monthCount) || empty($percentage)) {
		?><div>Заполните все поля!!!</div><?
		return;
	}

	if (!is_numeric($deposit) || !is_numeric($monthCount) || !is_numeric($percentage)) {
		?><div>Все поля должны быть числами!!!</div><?
		return;
	}

	$sumIncome = calcDeposit($deposit, $monthCount, $percentage);
	$finalDeposit = $sumIncome + $deposit;

	?>
	<div>Доход: <?=$sumIncome?></div>
	<div>Общая сумма вклада по окончанию срока: <?=$finalDeposit?></div>
	<?
}

function calcDeposit($deposit, $monthCount, $percentage)
{
	return (($percentage / 12) / 100) * $deposit * $monthCount;
}