<!DOCTYPE HTML>

<HTML>
<HEAD>
	<meta charset="utf-8">
	<title>Small Calculator in PHP</title>
</HEAD>
<BODY>
	<div class="calc">
		<p>Calculator</p>
	</div>
	<form>
		<input type="text" name="number1" placeholder="Number 1">
		<input type="text" name="number2" placeholder="Number 2">
		<select name="operator">
			<option>none</option>
			<option>add</option>
			<option>subtrack</option>
			<option>multiply</option>
			<option>divide</option>
		</select><br>
		<button type="submit" name="submit" value="submit">CALCULATE</button>
	</form>
<p>The result is: <?php include ("core.php"); ?></p>
</BODY>
</HTML>