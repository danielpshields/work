<?php

	$connection = mysqli_connect("localhost","root","supratt", "fixlist");

	if (mysqli_connect_errno()) {
		die("connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" );
	}
?>

<?php
	$query = "SELECT * ";
	$query .= "FROM work ";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("database query failed");
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="css/master.css">
	</head>
	<body>
		<h1>Databases</h1>
		<?php
		while ($row = mysqli_fetch_row($result)) {
			var_dump($row);
			echo "<hr>";
		}
		?>
	</body>
</html>

<?php	mysqli_free_result($result); mysqli_close($connection); ?>
