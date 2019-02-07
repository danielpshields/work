<?php

  function just($var) {
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


?>
