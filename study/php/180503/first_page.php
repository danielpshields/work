<?php $title = "first"; $stylesheet = $title; include("../include/header.php");

  $link_name = "Second Page";
  $id = 2;

  $clearlink = "<click & and #$^** learn more";

?>

  <ul>
    <li><a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a></li>
  </ul>


  <p><a href="#"><?php echo htmlspecialchars($clearlink); ?></a></p>


<?php include("../include/footer.php"); ?>
