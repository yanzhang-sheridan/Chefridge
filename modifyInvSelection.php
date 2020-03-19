<?php session_start();

	$userId=$_SESSION['userId'];
 
?>


<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="keywords" content="fridge, cooking, nutrition, time" />
	<meta name="description" content="chefrige, cook from your fridge" />
	<meta name="copyright" content="Hungry Bird">

	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5BBAD5">
    <meta name="msapplication-TileColor" content="#DA532C">
    <meta name="theme-color" content="#FFFFFF">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<style>
		@import url("css/mobile.css") screen and (max-width: 576px) and (min-width: 350px);
	</style>
	
</head>

	<body>
		
	   <section >
			
			<b>	<h1>Admin log in suceessfully</h1></b></h1>
		

			<p>	<a href="logout.php?userId=<?php echo("$userId")?>" class="texts" align=center>
				<u><b>log out </b></u></a>
			</p>


			
			<table border="1">

			<td>
			<table border ="2">
			
				<a href="addCategory.php?>">Add Category</a>
				<td>categoryId</td>
		      	<td>categoryName</td>
		     	<td><a href = "editCategory.php?userId=<?php echo($row["userId"]); ?>">Edit</a></td>
		     	<td><a href = "deleteCategory.php?userId=<?php echo($row["userId"]); ?>">Delete</a></td>		     	
			</table>
		    </td>

			<td>
			<table border ="2">			
				<a href="addCourse.php?>">Add Course</a>
				<td>courseId</td>
		      	<td>courseName</td>
		     	<td><a href = "editCourse.php?userId=<?php echo($row["userId"]); ?>">Edit</a></td>
		     	<td><a href = "deleteCourse.php?userId=<?php echo($row["userId"]); ?>">Delete</a></td>		     	
			</table>
		    </td>

		    <td>		    
		    <table border ="2">
				<a href="addCuisine.php?>">Add Cuisine</a>
				<td>cuisineId</td>
		      	<td>cuisineName</td>
		     	<td><a href = "editCuisine.php?userId=<?php echo($row["userId"]); ?>">Edit</a></td>
		     	<td><a href = "deleteCuisine.php?userId=<?php echo($row["userId"]); ?>">Delete</a></td>		     	
			</table>
		    </td>

		    <td>		    
		    <table border ="2">
				<a href="addCuisine.php?>">Add Nutrition</a>
				<td>nutritionId</td>
		      	<td>nutritionName</td>
		    	<td>unit</td>
		     	<td><a href = "editNutrition.php?userId=<?php echo($row["userId"]); ?>">Edit</a></td>
		     	<td><a href = "deleteNutrition.php?userId=<?php echo($row["userId"]); ?>">Delete</a></td></td>
			</table>
		    </td>

			</table>


			
	  </section>
