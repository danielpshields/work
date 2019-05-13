<?php
function messageContent($file) {
    global $root;
    ob_start();
    $email        = $_POST['email'];
    $studentName  = $_POST['studentName'];
    $student_ID   = $_POST['studentID'];
    $phone        = $_POST['phone'];
    $major        = $_POST['paceMajor'];
    $semester     = $_POST['semester'];

    $semesterList = array(
      "spring19" => "Spring 2019",
      "summer19" => "Summer A/C 2019",
      "fall19"   => "Fall 2019"
    );

    foreach ($semesterList as $key => $value) {
        if ($semester == $key) {
          $semester = $value;
        }
    }

    $condition_general = $_POST['condition_general'];
    $course            = $_POST['course'];
    $grade             = $_POST['grade'];
    $course_two        = $_POST['course_two'];
    $grade_two         = $_POST['grade_two'];
    $course_three      = $_POST['course_three'];
    $grade_three       = $_POST['grade_three'];
    $course_four       = $_POST['course_four'];
    $grade_four        = $_POST['grade_four'];
    $gpa_Major         = $_POST['gpa_Major'];
    $gpa_UF            = $_POST['gpa_UF'];
    $phone             = $_POST['phone'];

    $conditionsList = array(
      $condition_general => "condition_general",
      $course            => "courseGrade",
      $grade             => "courseGrade",
      $course_two        => "courseGrade",
      $grade_two         => "courseGrade",
      $course_three      => "courseGrade",
      $grade_three       => "courseGrade",
      $course_four       => "courseGrade",
      $grade_four        => "courseGrade",
      $gpa_Major         => "gpa",
      $gpa_UF            => "gpa"
    );

    $conditionExists = false;

// is there at least one condition
    foreach ($conditionsList as $key => $value) {
      if (!empty($key)) {
        $conditionExists = true;
        if ($value == "condition_general") { $generalCondition = true; }
        if ($value == "courseGrade") {
           $courseGrade = true;
           if (!empty($course_two))   { $courseGrade_two   = true; }
           if (!empty($course_three)) { $courseGrade_three = true; }
           if (!empty($course_four))  { $courseGrade_four  = true; }
         }
        if ($value == "gpa") {
           $gpa = true;
           if (!empty($gpa_Major)) { $majorGPA = true; }
           if (!empty($gpa_UF))    { $ufGPA    = true; }
         }
      }
    } //whole dang foreach through conditions list
    $css = file_get_contents("{$root}email/approve/approve_stylesheet.css");
    require($file);
    return ob_get_clean();
}

include("approve_engine.php");
?>
