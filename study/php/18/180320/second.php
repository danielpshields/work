<?php $title = "second"; $stylesheet = $title; include("../include/header.php"); ?>
<pre><?php print_r($_GET); ?></pre>

<?php echo $company = $_GET['company']; ?>

<p><a href="first.php">first</a></p>


<?php include("../include/footer.php"); ?>
