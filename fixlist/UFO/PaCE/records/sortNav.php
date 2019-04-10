  <div id="sortNav">

    <?php if ($page == "ticket") { ?>

      <div id="navButton_records" class="navButton">
        <p><a href="<?php echo $root; ?>records/transition.php">Records</a></p>
        <div class="navButton_image">
            <img src="<?php echo $root; ?>image/database.png" alt="">
        </div><!-- ticket button image -->
      </div><!-- newTicket_sortNav -->

    <?php } else { ?>

    <div class="navButton">
      <p><a href="<?php echo $root; ?>ticket/transition.php">New Ticket</a></p>
      <div class="navButton_image">
          <img src="<?php echo $root; ?>image/edit.png" alt="">
      </div><!-- ticket button image -->
    </div><!-- newTicket_sortNav -->

    <?php } ?>

    <!-- <form id="searchStudent" action="<?php // echo $root; ?>records/ldap.php" method="post"> -->
    <form id="searchStudent" action="<?php echo $root; ?>records/record.php" method="post">
      <input id="searchEmail" type="text" name="searchFor" value="" placeholder="email or student ID" required>
      <input id="searchSubmit" type="submit" name="submitSearchFor" value="Submit">
    </form>


    <!-- <ul id="recordsView_desktop">
      <li style="border: 1.5px solid #555; margin-bottom: 3px;"><a href="<?php echo $root; ?>records/transition.php">all records</a></li>
      <li style="border: 1.5px solid #891b1b; margin-bottom: 3px;"><a href="<?php echo $root; ?>records/sort/pending.php">pending</a></li>
      <li style="border: 1.5px solid #258224; margin-bottom: 3px;"><a href="<?php echo $root; ?>records/sort/submitted.php">student submitted</a></li>
      <li style="border: 1.5px solid #fff71c; margin-bottom: 3px;"><a href="#">remain UFO</a></li>
      <li style="border: 1.5px solid #508ded;"><a href="<?php echo $root; ?>records/sort/approved.php">advisor approved</a></li>
    </ul> -->
    <!-- <li style="color: #990000;">Case / PDF</li> -->
    <ul id="recordsView_desktop">
      <li style="border: 1.5px solid #555; margin-bottom: 3px;"><a href="<?php echo $root; ?>records/transition.php">all records</a></li>
      <li style="border: 1.5px solid #EA4335; margin-bottom: 3px;"><a href="<?php echo $root; ?>records/sort/pending.php">pending</a></li>
      <li style="border: 1.5px solid #34A853; margin-bottom: 3px;"><a href="<?php echo $root; ?>records/sort/submitted.php">student submitted</a></li>
      <li style="border: 1.5px solid #FBBC05; margin-bottom: 3px;"><a href="<?php echo $root; ?>records/sort/ufonline.php">remain UFO</a></li>
      <li style="border: 1.5px solid #508ded;"><a href="<?php echo $root; ?>records/sort/approved.php">advisor approved</a></li>
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

      // 0 = pending
      // 1 = submitted
      // 2 = approved
      // 3 = ufonline


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

      $difference = $sent - ($responded + $approved);
      $percentage = (round($approved / $sent, 3)) * 100 . "%";

      ?>

    <script src="<?php echo $root; ?>scripts/highcharts.js"></script>
    <div id="container" style=" height: 200px; max-width: 200px; margin: 0 auto;"></div>
    <script type="text/javascript">

        var approved   = <?php echo json_encode($approved); ?>;
        var difference = <?php echo json_encode($difference); ?>;
        var submitted  = <?php echo json_encode($responded); ?>;

        var percentage = <?php echo json_encode($percentage); ?>;
        Highcharts.setOptions({
         colors: ['#7cb5ec', '#90ed7d', '#434348']
        });
        Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: percentage,
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },

        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: false,
                    distance: -50,
                    style: {
                        fontWeight: 'normal',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%'],
                size: '110%'
            }
        },
        series: [{
            type: 'pie',
            name: '',
            innerSize: '50%',
            data: [
                ['Approved', approved],
                ['Submitted', submitted],
                ['Pending', difference],
            ]
        }]
        });

    </script>

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


    <?php
    if (mysqli_num_rows($contactedQuery)) { ?>
        <div class="navButton" id="emailPending">
          <!-- id="emailPendingLink"> -->
          <p><a href="<?php echo $root; ?>records/pending.php">Email Pending</a></p>
          <div class="navButton_image">
            <img src="<?php echo $root; ?>image/envelope.png" alt="">
          </div>
        </div><!-- nav button -->
    <?php } ?>


    <?php include("{$root}include/header/admin_nav.php"); ?>

</div><!-- sort nav -->
