<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body {width: 800px;margin: auto; padding-top: 50px;}
    </style>
  </head>
  <body>

    <form action="shell.php" method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

      <!-- <input type="text" name="color" value="blue"> -->
      <select required name="color">
        <option disabled selected value="">Please select a color</option>
        <option value="blue">blue</option>
        <option value="red">red</option>
        <option value="gray">gray</option>
        <option value="green">green</option>
      </select>

      <br>
      <br>

      <input type="text" name="name" tabindex="2">
      <p>name</p>

      <br>
      <br>

      <input type='submit' name='Submit' value='submit this information' tabindex="10">

    </form><!-- form -->

</body>
</html>
