<?php
$page = "second";
$id = "3";
$company = "Alex & Matt";
$linkText = "secondPage";
?>
<?php $title = "first"; $stylesheet = $title; include("../include/header.php"); ?>


<a href="<?php echo $page; ?>.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $linkText; ?></a>


<?php include("../include/footer.php"); ?>
