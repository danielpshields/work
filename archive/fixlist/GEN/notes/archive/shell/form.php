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


      <select required name="major">
        <option disabled selected value="">Please select a major</option>
        <option value="anthropology">anthropology</option>
        <option value="biology">biology</option>
        <option value="computerScience">computer science</option>
        <option value="criminology">criminology</option>
        <option value="geography">geography</option>
        <option value="geology">geology</option>
        <option value="psychology">psychology</option>
        <option value="sociology">sociology</option>
      </select>

      <br>
      <br>

      <input type='submit' name='Submit' value='submit this information' tabindex="10">

    </form><!-- form -->

</body>
</html>
