<?php
  $page = "ticket";
  require("include/header.php");
?>

  <h2>Ticket</h2>
  <p>Hello, <?php echo $firstName; ?></p>

<pre>
  <?php print_r($_POST); ?>
</pre>

<?php require("include/footer.php") ;?>
