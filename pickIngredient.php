<?php ?>
<!DOCTYPE HTML>
<html>

<?php include("includes/head.php"); ?>

<body>
	<?php include("includes/header.php"); ?>
	
	<section>
		Meat:<select>
			<option></option>
			<option>Chicken</option>
			<option>Beef</option>
			<option>Pork</option>
		</select>

		Fish:<select>
			<option></option>
			<option>Salmon</option>
			<option>Tuna Fish</option>
			<option>Snapper</option>
		</select>

		Vegetable:<select>
			<option></option>
			<option></option>
			<option></option>
		</select>

		Miscellaneous:<select>
			<option></option>
			<option></option>
			<option></option>
		</select>
	</section>

	<div>
		<a href="cookOption.php"><button>Cook</button></a>
		<a href="showFridge.php"><button>Back to Fridge</button></a>
	</div>

	<footer></footer>
</body>

</html>