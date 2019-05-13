<?php
  $path = "../";
  $page = "docs";
  require_once("{$path}include/header.php");
?>

  <h2>Dean's Medal</h2>

  <table>
    <tr>
      <td>Site</td>
      <td>https:// (clas)</td>
    </tr>
    <tr>
      <td>Form</td>
      <td>https:// (aac)</td>
    </tr>
  </table>

  <h3>Fall</h3>
  <ul>
    <li>Plan Proposal</li>
  </ul>

  <?php
    $role = "joe";
    $frequency = "1";
    include("{$path}/include/table.php");
  ?>

  <ul>
    <li><a class="role" href="">AAC staff reviewer</a></li>
    <li><a class="role" href="">advisors</a></li>
  </ul>

  <ul>
    <li>sendDeansMedal();</li>
  </ul>

<?php include_once("{$path}include/footer.php"); ?>
