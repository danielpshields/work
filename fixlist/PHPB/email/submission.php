<div class="container">


  <h1>ReStart Application Submission</h1>
  <p>Submitted: <?php echo $date = "Feb. 6"; ?></p>


  <div id="flexy">


  <!-- name -->
  <table>
    <thead>
      <tr>
        <th>Applicant Name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo ucfirst($name); ?></td>
      </tr>
    </tbody>
  </table>


  <?php
    if (!empty($studied_preVeterinary) || !empty($studied_preMedical) || !empty($studied_preDental)) { ?>
    <table>
      <thead>
        <tr>
          <th>Previous Area(s) of Study</th>
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
