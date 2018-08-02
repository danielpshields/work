<?php


	require("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/login.cgi");

	$specificquery = mysql_query("SELECT name, email FROM ufo_disclaimerscreen;");

	require("include/header.php");

	$i = 0;

	if (mysql_affected_rows()!=0){
		echo "
		<table>
		  <tr>
				<th>Name</th>
				<th>Email</th>
			</tr>
		";
		while(list($name,$email) = mysql_fetch_row($specificquery)) {
		echo "
		  <tr>
			  <td>" . $name . "</td>
				<td>" . $email . "</td>
			</tr>";
			$i++;
		}
	}
	?>

</div>
	<!-- <input class="submit" type="submit" name="submit" value="submit"> -->

	</body>
</html>



<?php


	require("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/login.cgi");

  $sql = "INSERT INTO ufo_disclaimerscreen (name, email) VALUES ('Peter', 'Parker')";

  $insertnewname = mysql_query($sql);

	$specificquery = mysql_query("SELECT name, email FROM ufo_disclaimerscreen;");

	require("include/header.php");

	$i = 0;

	if (mysql_affected_rows()!=0){
		echo "
		<table>
		  <tr>
				<th>Name</th>
				<th>Email</th>
			</tr>
		";
		while(list($name,$email) = mysql_fetch_row($specificquery)) {
		echo "
		  <tr>
			  <td>" . $name . "</td>
				<td>" . $email . "</td>
			</tr>";
			$i++;
		}
	}
	?>

</div>
	<!-- <input class="submit" type="submit" name="submit" value="submit"> -->

	</body>
</html>
