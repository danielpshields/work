<?php while ($row = mysqli_fetch_assoc($spitResults)) {

   $stipulation = $row['stipulation'];

   $course   = $row['course'];
   $grade    = $row['grade'];

   $course2  = $row['course2'];
   $grade2   = $row['grade2'];

   $course3  = $row['course3'];
   $grade3   = $row['grade3'];

   $course4  = $row['course4'];
   $grade4   = $row['grade4'];

   $gpaMajor = $row['gpaMajor'];
   $gpaUF    = $row['gpaUF'];


   $categories = array(
      $course , $grade,
      $course2, $grade2,
      $course3, $grade3,
      $course4, $grade4
    );


 } ?>
