<html>
	<head>
		<link rel='stylesheet' type='text/css' href='style.css' />
	</head>
	<body>
		<div class="second">
			<img src="ongc-logo.png" width="150" height="150" align="left">
			<h1>Employee List</h1>
		</div>
		<div class="first">
			<?php include 'excel1.php';?>
			<br><br>
			<br><br>
		</div>
		<div class="third">
			<form name="myForm" action="getrecord.php"  method="post">
				Enter CPF No: <input id="text-field" type="number_format" placeholder="CPF No"
				name="fname" required><br><br>
				<input class="submit-button" type="submit" value="Submit">
			</form> 
		</div>
	</body>
</html>
