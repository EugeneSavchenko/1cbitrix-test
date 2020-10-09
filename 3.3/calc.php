<?php

function calculate()
{
	if(isset($_GET['submit'])) {
		$resultNum1 = $_GET['Number1'];
		$operator = $_GET['operator'];
		$resultNum2 = $_GET['Number2'];
		switch ($operator) {
			default:
				echo "You need to select a method";
				break;

			case "Add":
				echo $resultNum1 + $resultNum2;
				break;
			
			case "Subtract":
				echo $resultNum1 - $resultNum2;
				break;

			case "Divide":
				echo $resultNum1 / $resultNum2;
				break;

			case "Multiply":
				echo $resultNum1 * $resultNum2;
				break;
		}
	}
}
?>
