<?php ?>
<!DOCTYPE HTML>
<html>

<?php include("includes/head.php"); ?>

<body>
	<?php include("includes/header.php"); ?>

	<section>
		Course:<select>
			<option></option>
			<option>Breakfast</option>
			<option>Lunch</option>
			<option>Dinner</option>
			<option>Dish</option>
			<option>Holiday Side Dish</option>
			<option>Side Dish</option>
		</select>

		Cuisine:<select>
			<option></option>
			<option>Chinese</option>
			<option>Indian</option>
			<option>Mexician</option>
			<option>Italian</option>
			<option>Japanese</option>
			<option>Whole30</option>
			<option>Paleo</option>
			<option>Spanish</option>
			<option>European</option>
			<option>American</option>
		</select>

		Cook Time:<select>
			<option></option>
			<option></option>
			<option></option>
		</select>

		Nurtrition:
			Calory<input type="checkbox" name="calory">
				<select>
					<option></option>
					<option></option>
					<option></option>
				</select>

			Fat<input type="checkbox" name="fat">
				<select>
					<option></option>
					<option></option>
					<option></option>
				</select>

			Sugar<input type="checkbox" name="sugar">
				<select>
					<option></option>
					<option></option>
					<option></option>
				</select>
	</section>

	<div>
		<input type="submit"/>
		<a href="showFridge.php"><button>Back to Fridge</button></a>
	</div>

	<footer></footer>
</body>