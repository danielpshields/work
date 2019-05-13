<?php
  $stipulation   = $row['stipulation'];
  $course        = $row['course'];
  $grade         = $row['grade'];
  $course2       = $row['course2'];
  $grade2        = $row['grade2'];
  $course3       = $row['course3'];
  $grade3        = $row['grade3'];
  $course4       = $row['course4'];
  $grade4        = $row['grade4'];
  $gpaUF         = $row['gpaUF'];
  $gpaMajor      = $row['gpaMajor'];
  $campusMajor   = $row['paceMajor'];
  $semester      = $row['semester'];
  $student_email = $row['email'];
  $studentID     = $row['studentID'];
  $phone         = $row['phone'];
  $ufoMajor      = $row['ufoMajor'];
  $submitted     = $row['submitted'];
  $formCreated   = $row['formCreated'];
  $formSubmitted = $row['formSubmitted'];

  //humanize Major Titles
  $allPaceMajors = array(
    "africanAmericanStudies" => "African American Studies",
    "anthropology"           => "Anthropology",
    "biology"                => "Biology",
    "computerScience"        => "Computer Science",
    "criminology"            => "Criminology",
    "english"                => "English",
    "geography"              => "Geography",
    "geology"                => "Geology",
    "history"                => "History",
    "linguistics"            => "Linguistics",
    "mathematics"            => "Mathematics",
    "philosophy"             => "Philosophy",
    "psychology"             => "Psychology",
    "religion"               => "Religion",
    "sociology"              => "Sociology",
    "spanish"                => "Spanish",
    "statistics"             => "Statistics",
    "sustainabilityStudies"  => "Sustainability Studies",
    "womensStudies"          => "Women's Studies"
  );

  //  set the value="" version to a human readable string
  foreach ($allPaceMajors as $key => $value) {
    if ($campusMajor == $key) {
      $campusMajor = $value;
    }
    if ($ufoMajor == $key) {
      $ufoMajor = $value;
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

  $semesterValues = array (
    "spring19" => "Spring 2019",
    "summer19" => "Summer A/C 2019",
    "fall19"   => "Fall 2019"
  );

  foreach ($semesterValues as $key => $value) {
    if ($semester == $key) {
      $semester = $value;
    }
  }


  $gpas = array($gpaUF,$gpaMajor);

  foreach($gpas as $key) {
    if(!empty($key)) {
      $gpasExist = true;
    }
  }


// trying to display if no stipulations set
//   $masterList = array(
//     $stipulation,
//     $course,
//     $grade,
//     $course2,
//     $grade2,
//     $course3,
//     $grade3,
//     $course4,
//     $grade4,
//     $gpaUF,
//     $gpaMajor,
//     $campusMajor,
//     $semester,
//     $student_email,
//     $phone,
//     $ufoMajor,
//     $submitted
// );


?>
