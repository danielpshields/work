<?php $title = "time"; include("../include/header.php"); ?>



<?php echo floor(62300 / 60 ); ?>

<?php include("../include/footer.php"); ?>

<?
$seconds = "150";
$minutes = floor($seconds/60);
$secondsleft = $seconds%60;
if($minutes<10)
	$minutes = "0" . $minutes;
if($secondsleft<10)
	$secondsleft = "0" . $secondsleft;
echo "$minutes:$secondsleft minutes";
?>
