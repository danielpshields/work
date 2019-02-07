<div class="container">

  <?php require("functions.php"); ?>

  <h1>PHPB ReStart Application</h1>
  <h2>Applicant: <i><?php echo ucfirst($name); ?>
  <?php just($suffix_name); ?></i></h2>
  <?php paragraph("UF ID", $UF_ID); ?>
  <p>Submitted: <?php echo $date = "Feb. 7"; ?></p>

  <?php
    if (!empty($studied_preVeterinary) || !empty($studied_preMedical) || !empty($studied_preDental)) { ?>
    <table>
      <thead>
        <tr>
          <th>Previously Studied</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $areaOfStudy = array(
            $studied_preDental,
            $studied_preMedical,
            $studied_preVeterinary
          );
          foreach($areaOfStudy as $key) {
            if(!empty($key)) { ?>
        <tr>
          <td><?php echo $key; ?></td>
        </tr>
        <?php }
       } ?>
      </tbody>
    </table>
    <?php } ?>

    <?php table("Other Areas of Study", $studied_other); ?>

    <?php
    if (!empty($year_of_entry)) {
      echo "<p><b>Year of Entry</b>: " . $year_of_entry . " </p>";
    }
    ?>


  <!--
  <table>
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
      </tr>
    </tbody>
  </table>
-->

</div><!-- flexy -->

</div><!-- container -->
