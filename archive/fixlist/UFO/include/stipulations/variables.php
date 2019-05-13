<?php while ($row = mysqli_fetch_assoc($spitResults)) {
    $paceMajor   = $row['paceMajor'];
    $stipulation = $row['stipulation'];
    $course      = $row['course'];
    $grade       = $row['grade'];
    $course2     = $row['course2'];
    $grade2      = $row['grade2'];
    $course3     = $row['course3'];
    $grade3      = $row['grade3'];
    $course4     = $row['course4'];
    $grade4      = $row['grade4'];
    $gpaMajor    = $row['gpaMajor'];
    $gpaUF       = $row['gpaUF'];
    $semester    = $row['semester'];
    $phone       = $row['phone'];
    $studentName = $row['name'];
    $student_ID   = $row['studentID'];

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

    //  set the value="" version to a human readable string
    foreach ($allMajors as $key => $value) {
      if ($paceMajor == $key) {
        $paceMajor = $value;
      }
    }

    $gradeValues = array(
      "A"      => "A",
      "Aminus" => "A-",
      "Bplus"  => "B+",
      "B"      => "B",
      "Bminus" => "B-",
      "Cplus"  => "C+",
      "C"      => "C"
    );

    foreach ($gradeValues as $key => $value) {
      if ($grade == $key) {
        $grade = $value;
      }
      if ($grade2 == $key) {
        $grade2 = $value;
      }
      if ($grade3 == $key) {
        $grade3 = $value;
      }
      if ($grade4 == $key) {
        $grade4 = $value;
      }
    }

}

    $allConditions = array(
      $stipulation,
      $course,
      $grade,
      $course2,
      $grade2,
      $course3,
      $grade3,
      $course4,
      $grade4,
      $gpaMajor,
      $gpaUF
    );


    //basically here just to address the select > option being null versus left empty. It was left empty which sets it to "input"
    foreach($allConditions as $key) {
      if (!empty($key) && $key != "input") {
        $aConditionExists = true;
      }
    }

    $courseGrade = array(
       $course => $grade,
      $course2 => $grade2,
      $course3 => $grade3,
      $course4 => $grade4
     );

     foreach ($courseGrade as $key => $value) {
       if (!empty($key)) {
         $courseExists = true;
       }
     }

     $gpas = array(
       $gpaMajor,
       $gpaUF
     );

     foreach ($gpas as $key) {
       if (!empty($key)) {
         $gpasExist = true;
       }
     }

 ?>
