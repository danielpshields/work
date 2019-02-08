<?php

  function justValue($var) {
    if (!empty($var)) {
      echo $var;
    }
  }

  function paragraph($title, $var) {
    if (!empty($var)) {
      echo "<p><b>" . $title . "</b>: ";
      echo $var;
      echo "</p>";
    }
  }


  function table($title, $var) {
    if (!empty($var)) {
      echo "<table>";
      echo "  <thead>";
      echo "    <tr>";
      echo "      <th>" . $title . "</th>";
      echo "    </tr>";
      echo "  </thead>";
      echo "  <tbody>";
      echo "    <tr>";
      echo "      <td>" . $var . "</td>";
      echo "    </tr>";
      echo "  </tbody>";
      echo "</table>";
    }
  }


  // if (!empty($other_names)) {
  //   <tr>
  //     <td>Other names</td>
  //     <td><?php echo $other_names; </td>
  //   </tr>
  //  }

  function aRow($title, $var) {

    if (!empty($var)) {
      echo "<tr>";
      echo "  <td>" . $title . "</td>";
      echo "  <td>" . $var .   "</td>";
      echo "</tr>";
    }

  }

  $personalInfo = array(
    $other_names,
    $date_of_birth,
    $city_of_birth,
    $state_of_birth,
    $country_of_birth,
    $citizenship,
    $email,
    $phone_home,
    $phone_work,
    $phone_mobile
  );

  foreach ($personalInfo as $key) {
    if (empty($key)) {
      $zeroPersonalInfo = true;
    }
  }


?>
