  <input type="hidden" name="studentName" value="<?php echo $studentName; ?>">
  <input type="hidden" name="studentID" value="<?php echo $student_ID; ?>">

  <input type="hidden" name="phone" value="<?php echo $phone; ?>">
  <input type="hidden" name="email" value="<?php echo $studentEmail_get; ?>">
  <input type="hidden" name="paceMajor" value="<?php echo $paceMajor; ?>">
  <input type="hidden" name="semester" value="<?php echo $semester; ?>">
  <?php
  // dont print if there's no conditions set -- PaCE Major ABOVE
  if ($aConditionExists) {  //close bottom bracket
  ?>

    <?php if (!empty($stipulation)) { ?>
      <input type="hidden" name="condition_general" value="<?php echo $stipulation; ?>">
    <?php } ?>

    <?php if ($courseExists) { ?>

        <?php if (!empty($course)) { ?>
          <input type="hidden" name="course" value="<?php echo $course; ?>">
          <input type="hidden" name="grade" value="<?php echo $grade; ?>">

        <?php
        } //course grade 1
        if (!empty($course2)) { ?>
          <input type="hidden" name="course_two" value="<?php echo $course2; ?>">
          <input type="hidden" name="grade_two" value="<?php echo $grade2; ?>">

        <?php
        } // course grade 2
        if (!empty($course3)) { ?>
          <input type="hidden" name="course_three" value="<?php echo $course3; ?>">
          <input type="hidden" name="grade_three" value="<?php echo $grade3; ?>">

        <?php
        } // course grade 3
        if (!empty($course4)) { ?>
          <input type="hidden" name="course_four" value="<?php echo $course4; ?>">
          <input type="hidden" name="grade_four" value="<?php echo $grade4; ?>">
        <?php } // course grade 4 ?>
        <?php
        } // if course grade exists

        if ($gpasExist) {
        ?>

        <?php if (!empty($gpaMajor)) { ?>

          <input type="hidden" name="gpa_Major" value="<?php echo $gpaMajor; ?>">

        <?php
        }
        if (!empty($gpaUF)) { ?>

          <input type="hidden" name="gpa_UF" value="<?php echo $gpaUF; ?>">

        <?php } ?>

    <?php } ?>

  <?php } ?>
