
  <div id="sortNav">
    <dl class="">
      <dt>
        Show Majors
      </dt>
      <dd>
        <table id="majorsTableNav">
          <tr>
            <td colspan="2"><a href="<?php echo $root; ?>records/majors.php"><b>All Majors</b></a></td>
          </tr>
          <?php
          $allMajors = array(
              "africanAmericanStudies" => "African American Studies",
              "anthropology"           => "Anthropology",
              "computerScience"        => "Computer Science",
              "english"                => "English",
              "geography"              => "Geography",
              "geology"                => "Geology",
              "history"                => "History",
              "linguistics"            => "Linguistics",
              "mathematics"            => "Mathematics",
              "philosophy"             => "Philosophy",
              "religion"               => "Religion",
              "sociology"              => "Sociology",
              "spanish"                => "Spanish",
              "statistics"             => "Statistics",
              "sustainabilityStudies"  => "Sustainability Studies",
              "womensStudies"          => "Women's Studies"
            );

          foreach ($allMajors as $key => $value) {
            $query  = "SELECT * FROM pace_transition WHERE paceMajor = '{$key}'";
            $spitIt = mysqli_query($connection, $query);
            $i = 0;
             while ($row = mysqli_fetch_assoc($spitIt)) {
               $i++;
             }
           ?>
           <tr>
             <td><?php echo $i; ?></td>
             <td style="text-align: left;"><a href="<?php echo $root; ?>records/majors.php?major=<?php echo $key . "&id=" . $i; ?>"><?php echo $value; ?></td>
           </tr>
         <?php } ?>
       </table>
     </dd>
    </dl>

    <!-- <form id="searchStudent" action="<?php // echo $root; ?>records/ldap.php" method="post"> -->
    <form id="searchStudent" action="<?php echo $root; ?>records/record.php" method="post">
      <input id="searchEmail" type="text" name="searchFor" value="" placeholder="email or student ID" required>
      <input id="searchSubmit" type="submit">
    </form>

    <ul id="recordsView_desktop">
      <li style="border: 1.5px solid #555; margin-bottom: 3px;"><a href="<?php echo $root; ?>records/transition.php">all records</a></li>
      <li style="border: 1.5px solid #891b1b; margin-bottom: 3px;"><a href="<?php echo $root; ?>records/sort/pending.php">pending</a></li>
      <li style="border: 1.5px solid #258224; margin-bottom: 3px;"><a href="<?php echo $root; ?>records/sort/submitted.php">student submitted</a></li>
      <li style="border: 1.5px solid #508ded;"><a href="<?php echo $root; ?>records/sort/approved.php">advisor approved</a></li>

      <!-- <li style="color: #990000;">Case / PDF</li> -->
    </ul>

    <?php

      $sentTotal  = "SELECT * FROM pace_transition";
      $printTotal = mysqli_query($connection, $sentTotal);

      $pendingCount = "SELECT * FROM pace_transition WHERE submitted = 0";
      $printPending = mysqli_query($connection, $pendingCount);

      $submittedTotal = "SELECT * FROM pace_transition WHERE submitted = 1 OR submitted = 3";
      $printResponded = mysqli_query($connection, $submittedTotal);

      $approvedTotal = "SELECT * FROM pace_transition WHERE submitted = 2";
      $approvedTickets = mysqli_query($connection, $approvedTotal);

      $sent      = 0;
      $peding    = 0;
      $responded = 0;
      $approved  = 0;

      while ($row = mysqli_fetch_assoc($printTotal)) {
        $sent++;
      }

      while ($row = mysqli_fetch_assoc($printPending)) {
        $pending++;
      }

      while ($row = mysqli_fetch_assoc($printResponded)) {
        $responded++;
      }

      while ($row = mysqli_fetch_assoc($approvedTickets)) {
        $approved++;
      }


      include("{$root}records/data/all.php");

    ?>

</div><!-- sort nav -->
