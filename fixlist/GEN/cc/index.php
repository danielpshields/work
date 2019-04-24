<?php
  $root = "";
  $page = "index";
  include("{$root}include/header.php");
?>

  <ul>
    <li><a href="<?php echo $root; ?>minutes/index.php">minutes</a></li>
    <li><a href="<?php echo $root; ?>people/index.php">people</a></li>
  </ul>


  <div id="actionSection">

    <h3>Action Items</h3>
    <table>
      <tr>
        <th>action</th>
        <th><a href="<?php echo $root; ?>people/index.php">people</a></th>
        <th>status</th>
      </tr>
      <tr>
        <td>Survey Responses</td>
        <td>Shannon &amp; Dan</td>
        <td>pending</td>
      </tr>
      <tr>
        <td>Can It Go Into Preview?</td>
        <td>Shannon &amp; Dylan</td>
        <td>pending</td>
      </tr>
      <tr>
        <td>Cheat Sheet for Major Codes</td>
        <td>Shannon &amp; Dylan</td>
        <td>pending</td>
      </tr>
      <tr>
        <td>Inter-office communications</td>
        <td>Liason</td>
        <td class="complete">&#10004;</td>
      </tr>
    </table>
  </div><!-- action section -->



<?php include("{$root}include/footer.php"); ?>
