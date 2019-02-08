<div class="container">

  <?php require("functions.php"); ?>

  <h1>PHPB ReStart Application</h1>
  <p><i>Submitted: <?php echo date('M j.'); ?></i></p>
  <h2>Applicant: <i><?php echo ucwords($name); ?>
  <?php justvalue($suffix_name); ?></i></h2>
  <?php paragraph("UF ID", $UF_ID); ?>


  <table>
    <thead>
      <tr>
        <th colspan="2">Personal Info</th>
      </tr>
    </thead>
    <?php aRow("nick names", $other_names); ?>
    <?php aRow("birth date", $date_of_birth); ?>
    <?php aRow("birth city", $city_of_birth); ?>
    <?php aRow("birth state", $state_of_birth); ?>
    <?php aRow("birth country", $country_of_birth); ?>
    <?php aRow("citizenship", $citizenship); ?>
    <?php aRow("street", $street_permanent); ?>
    <?php aRow("city", $city_permanent); ?>
    <?php aRow("state", $state_permanent); ?>
    <?php aRow("country", $country_permanent); ?>
    <?php aRow("zip code", $zip_permanent); ?>
    <?php aRow("email", $email); ?>
    <?php aRow("phone home", $phone_home); ?>
    <?php aRow("phone work", $phone_work); ?>
    <?php aRow("phone mobile", $phone_mobile); ?>
  </table>




  <table>
    <thead>
      <tr>
        <th>Contact Info</th>
      </tr>
    </thead>
    <?php aRow("street mailing", $street_address); ?>
    <?php aRow("city mailing", $city_mailing); ?>
    <?php aRow("state mailing", $state_mailing); ?>
    <?php aRow("country mailing", $country_mailing); ?>
    <?php aRow("zip", $zip_mailing); ?>
  </table>

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

    <?php
      table("Other Areas of Study", $studied_other);
      paragraph("Year of Entry", $year_of_entry);
    ?>

</div><!-- container -->
