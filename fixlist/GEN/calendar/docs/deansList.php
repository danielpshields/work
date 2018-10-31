<?php
  $path = "../";
  $page = "docs";
  require_once("{$path}include/header.php");
?>

  <h2>Dean's List</h2>

  <ol>
    <li>get previous semester's data</li>
    <?php
      $role = "tim";
      $frequency = "2";
      include("{$path}include/table.php");
    ?>
    <li><a class="metric" href="#">Metric</a> staffing is sufficient to handle the influx of students &#124; <a class="role">Trina</a></li>
    <div class="metricContainer">
      <p><i>x + y = z</i></p>
    </div><!-- metric -->
    <?php
      $role = "katrina";
      $frequency = "2";
      include("{$path}include/table.php");
    ?>
    <li>deploy</li>
    <ul>
      <li><a class="date">September</a> (<i>spring &amp; summer</i>)</li>
      <li><a class="date">January</a> (<i>fall</i>)</li>
    </ul>
    <?php
      $role = "dan";
      $frequency = "2";
      include("{$path}include/table.php");
    ?>
  </ol>

<?php include_once("{$path}include/footer.php"); ?>
