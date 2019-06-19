<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

  $departments = array (
    "Anthropology"                          => "Peter Collings",
    "Astronomy"                             => "Elizabeth Lada",
    "Biology"                               => "Marta Wayne",
    "Chemistry"                             => "Lisa McElwee-White",
    "Classics"                              => "Mary Ann Eaverly",
    "Economics"                             => "Thomas Knight",
    "English"                               => "Sid Dobrin",
    "Geography"                             => "Jane Southworth",
    "Geological Sciences"                   => "David Foster",
    "History"                               => "Elizabeth Dale",
    "Languages, Literatures &amp; Cultures" => "Akintunde Akinyemi",
    "Linguistics"                           => "Eric Potsdam",
    "Mathematics"                           => "Kevin Knudson",
    "Philosophy"                            => "John Palmer",
    "Physics"                               => "Kevin Ingersent",
    "Political Science"                     => "Dan Smith",
    "Psychology"                            => "Julie Graber",
    "Religion"                              => "Terje Ostebo",
    "Sociology and Criminology &amp; Law"   => "Barbara Zsembik",
    "Spanish &amp; Portuguese Studies"      => "Gillian Lord",
    "Statistics"                            => "Mike Daniels"
);

  $emails_departments = array(
    "Peter Collings"     => "pcollings@ufl.edu",
    "Elizabeth Lada"     => "elada@astro.ufl.edu",
    "Marta Wayne"        => "chair@biology.ufl.edu",
    "Lisa McElwee-White" => "chair@chem.ufl.edu",
    "Mary Ann Eaverly"   => "eaverly@ufl.edu",
    "Thomas Knight"      => "thomas.knight@ufl.edu",
    "Sid Dobrin"         => "sdobrin@ufl.edu",
    "Jane Southworth"    => "jsouthwo@ufl.edu",
    "David Foster"       => "dafoster@ufl.edu",
    "Elizabeth Dale"     => "edale@ufl.edu",
    "Akintunde Akinyemi" => "akinyemi@ufl.edu",
    "Eric Potsdam"       => "potsdam@ufl.edu",
    "Kevin Knudson"      => "kknudson@ufl.edu",
    "John Palmer"        => "palmerj@ufl.edu",
    "Kevin Ingersent"    => "ingersent@ufl.edu",
    "Dan Smith"          => "dasmith@ufl.edu",
    "Julie Graber"       => "jagraber@ufl.edu",
    "Terje Ostebo"       => "ostebo@ufl.edu",
    "Barbara Zsembik"    => "zsembik@ufl.edu",
    "Gillian Lord"       => "glord@ufl.edu",
    "Mike Daniels"       => "daniels@ufl.edu"
);
?>

<h2>Department Chairs</h2>
<table>
  <?php
    foreach ($departments as $key => $value) {
      echo "<tr>";
      foreach ($emails_departments as $chair => $email) {
        if ($value === $chair) {
          echo "<td>" . $key. "</td><td>" .  $chair . "</td><td>" . $email . "</td>";
        }
      }
      echo "</tr>";
    }
  ?>
</table>

<?php
  $centers = array(
    "Academic Advising"                          => "Joe Spillane",
    "African American Studies"                   => "Sharon Austin",
    "African Studies"                            => "Brenda Chalfin",
    "Bureau of Economic &amp; Business Research" => "Christopher McCarty",
    "Dial Ctr Written &amp; Oral Comm"           => "Kellie Roberts",
    "European Studies"                           => "Amie Kreppel",
    "France-florida Research INST"               => "Alioune Sow",
    "Graham Center Public Service"               => "Matthew Jacobs",
    "Greek Studies"                              => "Kostas Kapparis",
    "Hindu Traditions"                           => "Vasudha Narayanan",
    "Humanities and the Public Sphere"           => "Barbara Mennel",
    "International Studies"                      => "Matthew Jacobs",
    "Jewish Studies"                             => "Jack Kugelmass",
    "Land Use And Env. Change Institute"         => "Mark Brenner",
    "Samuel Proctor Oral History"                => "Paul Ortiz",
    "Teaching Center"                            => "Robert Bailey",
    "University Writing Program"                 => "Creed Greer",
    "Women’s Studies"                            => "Bonnie Moradi"
  );


  $emails_centers = array(
    "Joe Spillane"        => "spillane@ufl.edu",
    "Sharon Austin"       => "polssdw@polisci.ufl.edu",
    "Brenda Chalfin"      => "bchalfin@ufl.edu",
    "Christopher McCarty" => "chrism@bebr.ufl.edu",
    "Kellie Roberts"      => "robertsk@ufl.edu",
    "Amie Kreppel"        => "kreppel@ufl.edu",
    "Alioune Sow"         => "sow@ufl.edu",
    "Matthew Jacobs"      => "mjacobs@ufic.ufl.edu",
    "Kostas Kapparis"     => "kapparis@ufl.edu",
    "Vasudha Narayanan"   => "vasu@ufl.edu",
    "Barbara Mennel"      => "mennel@ufl.edu",
    "Matthew Jacobs"      => "mjacobs@ufic.ufl.edu",
    "Jack Kugelmass"      => "jkugelma@ufl.edu",
    "Mark Brenner"        => "brenner@ufl.edu",
    "Paul Ortiz"          => "portiz@ufl.edu",
    "Robert Bailey"       => "rbailey3@ufl.edu",
    "Creed Greer"         => "cgreer@ufl.edu",
    "Bonnie Moradi"       => "moradib@ufl.edu"
);

?>
  <h2>Center Chairs</h2>
  <table>
    <?php
      foreach ($centers as $key => $value) {
        echo "<tr>";
        foreach ($emails_centers as $chair => $email) {
          if ($value === $chair) {
            echo "<td>" . $key. "</td><td>" .  $chair . "</td><td>" . $email . "</td>";
          }
        }
        echo "</tr>";
      }
    ?>
  </table>




  <h3>Shell</h3>

  <?php
    foreach ($centers as $key => $value) {

      foreach ($emails_centers as $chair => $email) {
        if ($value === $chair) {
          echo "<h4>" . $key. "</h4>";
          echo "<p><b>" . $chair . "</b>&nbsp;&nbsp;<span class=\"email_chair\">" . $email ."</span></p>";
        }
      }
    }
  ?>
























</body>
</html>
