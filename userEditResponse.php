<?php

 $errmsg=$_GET['responsemsg'];
 
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
		


		<section style="font-size:20px; font-weight: bold">
				<p><center><b><?php echo("$errmsg");?></b></center></p>
		         <p><a href="loginVipResponse.php" >Back to admin log in&gt;&gt;</a> &nbsp;&nbsp;&nbsp;&nbsp;</p>
		          <p><a href="userManage.php" >Back to manage user page&gt;&gt;</a> &nbsp;&nbsp;&nbsp;&nbsp;</p>
		</section>

		


	</div>

</body>



</html>