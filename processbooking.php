<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Booking Confirmation</title>
		<meta charset="utf-8"/>
		<meta name="description" content="Booking confirmation for Rohirrim Dude Ranch Tour"/>
		<meta name="keywords" content="Book, tour, rohirrim"/>
		<meta name="author" content="Sammy"/>

		<link rel="stylesheet" href="style/style.css"/>
	</head>

	<body>

		<header><h1>Rohirrim Dude Ranch</h1></header>
		<nav>
			<ul>
				<li><a href="construction.html">Home</a></li>
				<li><a href="construction.html">Accommodation</a></li>
				<li><a href="construction.html">Horse Riding</a></li>
				<li><a href="construction.html">Sight Seeing</a></li>
				<li><a href="register.html">Book</a></li>
			</ul>
		</nav>




		<article>
			<h1>Booking Confirmation</h1>
		<?php
			if (isset($_POST['firstname']))
				echo "<p>First name: {$_POST['firstname']}</p>";

			if (isset($_POST['lastname']))
				echo "<p>Last name: {$_POST['lastname']}</p>";

			if (isset($_POST['age']))
				echo "<p>Age: {$_POST['age']}</p>";

			if (isset($_POST['species']))
				echo "<p>Species: {$_POST['species']}</p>";

			if (isset($_POST['bookday']))
				echo "<p>Date: {$_POST['bookday']}</p>";

			if (isset($_POST['partysize']))
				echo "<p>Number of travellers: {$_POST['partysize']}</p>";

			if (isset($_POST['food']))
				echo "<p>Menu preference: {$_POST['food']}</p>";

			if (isset($_POST['accom']))
				echo "<p>Accommodation booked</p>";

			if (isset($_POST['4day']))
				echo "<p>4 Day Tour booked</p>";

			if (isset($_POST['10day']))
				echo "<p>10 Day Tour booked</p>";
		?>
		</article>

<footer>
	<div>
		<h1 class="fineprint">Conditions Apply</h1>
		<p class="fineprint">  Rohirrim Dude Ranch management takes no responsiblity for any injury, beheadings, spells (sleeping or otherwise) , spider-bites suffered by guests, or for anything whatsoever.	</p> 
	</div>
		<p id="contact" >Any enquiries please email the <a href="mailto:something@something.com">manager</a></p>
	</footer>

	</body>
</html>
