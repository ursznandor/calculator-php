<?php
	if(isset($_GET['submit'])){
		$numbers1=$_GET['number1'];
		$numbers2=$_GET['number2'];
		$operators=$_GET['operator'];

		switch($operators){
			case "none": echo "Please choose a valid operator!"; break;
			case "add": echo $numbers1 + $numbers2; break;
			case "subtrack": echo $numbers1 - $numbers2; break;
			case "multiply": echo $numbers1 * $numbers2; break;
			case "divide": echo $numbers1 / $numbers2; break;
		}
	}
?>