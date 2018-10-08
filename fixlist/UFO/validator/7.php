<?php

  //ensure the page was reached via the previous page
  require("include/functions.php");

  // if (!isset($_POST['submit'])) {
  //   redirectTo("index.php");
  // }

 	$thisPage = "0";
  $submitted = 1;
  $page = "thankyou";
	require_once("include/header.php");

?>


    <section>

      <p id="greenBorder"><i>Thank you for submitting the form!</i></p>

      <h2>Contact:<br><a href="https://www.advising.ufl.edu/uf-online/contact/" target="_blank">CLAS UF Online Advising Staff</a></p>

      <!-- <p><a href="index.php">home</a></p> -->
    </section>

</body>
</html>
