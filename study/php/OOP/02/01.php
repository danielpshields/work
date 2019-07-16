<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    class Student {

    }

    $classes = get_declared_classes();
    echo "classes: " . implode(', ', $classes) . "<br>";

    $class_names = ['Product', 'Student', 'student'];

    foreach ($class_names as $class_name) {
      if (class_exists($class_name)) {
        echo "{$class_name} is a declared class";
      } else {
        echo "{$class_name} is not a declared class";
      }
    }



    ?>
  </body>
</html>
