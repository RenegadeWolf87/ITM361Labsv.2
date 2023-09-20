<?php

$firstName =
$lastName =
$phone =
$email =
$hidden =
$comments
$gender
$available
$age

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lab Form Proessing Script</title>
		<style>
		.box {
				border: 1px solid #444;
				background-color: #ccc;
				margin: 20px 20px;
				padding: 5px 20px;
		}
	</style>
</head>
<body>
	<div style="text-align:center;">
		<h2>Lab Form Processing Script</h2>
		<p>This page will display the results of the form that was submitted to it.</p>
	</div>
	<<hr><br>
	<h1>Thank you for your Lab form submission, <?php echo htmlentities($firstName) ?>!</h1>
	<div class="box">
	<h2>This section contains the information provided in the my info section:</h2>
		<p><strong>First Name:</strong> <?php echo htmlentities($firstName) ?></p>
		<p><strong>Last Name:</strong> <?php echo htmlentities($lastName) ?></p>
		<p><strong>Phone Number:</strong> <?php echo htmlentities($phone) ?></p>
		<p><strong>Email Address:</strong> <?php echo htmlentities($email) ?></p>
		<p><strong>Gender:</strong> <?php echo htmlentities($gender) ?></p>
		<p><strong>Age:</strong> <?php echo htmlentities($age) ?></p>
	</div>
	<div class="box">
	<h2>This section contains the information provided in the availibility section:</h2>
	<h3>Days Selected as Available:</h3>
	<?php
		if (is_array($available)){
			foreach ($available as $ckvalue) {
				echo ('<p>' . htmlentities($ckvalue) . '</p>');
			}
		} else {
			echo ('<p>' . htmlentities($available) . '</p>');
		}
	?>
	<h3>Comments:</h3>
	<p></php echo n12br(htmlentities($comments)) ?></p>
	</div>
	<div class="box">
	<h2>This section contains the hidden information:</h2>
		<p><strong>HTML Form created by:</strong> <?php echo htmlentities($hidden) ?></p>
	</div>
</body>
</html>