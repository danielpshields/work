<?php include("../include/header.php"); ?>
<h2>Index</h2>
<?php
$linkName = "second page";
$id = 5;
$company = "johnson & johnson";
?>

<!-- <a href="process.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $linkName; ?></a> -->
<!-- <a href="process.php?id=<?php echo $id; ?>&company=<?php echo rawurlencode($company); ?>"><?php echo $linkName; ?></a> -->

 <?php

 $page = "al cat";
 $quote = "growth through accessibility";
 $link = "/bout/" . rawurlencode($page) . "?quote=" . urlencode($quote);

 echo $link;

 ?>


<?php include("../include/footer.php"); ?>
