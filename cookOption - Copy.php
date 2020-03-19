<?php ?>
<!DOCTYPE HTML>
<html>

<?php include("includes/head.php"); ?>

<body>
	<?php include("includes/header-login.php"); ?>

	<section>
		Select 1 Meat from Fridge:
		<select>
			<option></option>
			<option>Chicken</option>
			<option>Beef</option>
			<option>Pork</option>
			<option>Salmon</option>
			<option>Tuna Fish</option>
			<option>Snapper</option>
		</select>

		Select 1 Vegetable from Fridge:
		<select>
			<option></option>
			<option>Tomato</option>
			<option>Bell Pepper</option>
			<option>Bok Choy</option>
			<option>Sun Dried Tomato</option>
			<option>Carrot</option>
			<option>Cauliflower</option>
			<option>Brocolli</option>
			<option>Lettuce</option>
			<option>Spanich</option>
			<option>Patato</option>
		</select>
		<br>

		Course:
		<select>
			<option></option>
			<option>Breakfast</option>
			<option>Lunch</option>
			<option>Dinner</option>
			<option>Dish</option>
			<option>Holiday Side Dish</option>
			<option>Side Dish</option>
		</select>

		Cuisine:
		<select>
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

		Cook Time:
		<select>
			<option></option>
			<option></option>
			<option></option>
		</select>

		Nurtrition:
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

	<?php include("includes/footer.php"); ?>
</body>