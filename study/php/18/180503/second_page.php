<?php $title = "second"; $stylesheet = $title; include("../include/header.php");
      $link_name = "First Page";
      $name = "";
?>
<ul>
  <li><a href="first_page.php"><?php echo $link_name; ?></a></li>
</ul>

  <pre>
    <?php print_r($_GET); ?>
  </pre>

  <?php $name = $_GET['id']; ?>

  <?php if ($name == 2) { ?>

    <p>HI!</p>

  <?php } else { ?>

    <p>Hello! Welcome, peasant guest <?php echo $_GET['last']; ?>!</p>

  <?php } ?>

<?php include("../include/footer.php"); ?>
