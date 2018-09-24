<?php include("../include/subheader.php"); ?>


    <h2>Get Data</h2>
    <p>Three ways to get data:</p>
    <ul>
      <li>URLs/Links ($_GET)</li>
      <li>Forms      ($_POST)</li>
      <li>cookies    ($_COOKIE)</li>
      <li>Sessions   ($_SESSION)</li>
      <ul>
        <li>edit: PHPSESSID (in php.ini)</li>
      </ul>
      <ul>
        <li>more storage</li>
        <li>smaller request size</li>
        <li>conceals data values</li>
        <li>slower to access</li>
        <li>expire on browser close</li>
        <li>session files accumulate</li>
      </ul>
    </ul>


<h2>Links</h2>
<ul>
  <li><a href="http://www.readmyviews.com/include-vs-include-once/" target="_blank">Include vs Include Once</a></li>
  <li><a href="http://www.readmyviews.com/import-csv-data-mysql-using-php/" target="_blank">Import CSV data into MYSQL using PHP</a></li>
</ul>


<h2>Encoding</h2>
<p>URLs can be built with .=</p>
<p>rawurlencode: on path: goes to left of query</p>
<p>urlencode: on query string: goes to the right of the query</p>
<p>htmlspecialchars: so the code wont break via main html character interferance</p>
<p>htmlentities: so it looks nice. more for superfacial stuff</p>
<p>Then, htmlspecialchars and htmlentities can be applied to the echoing</p>
<p>A <b>safe url</b>:<br><i>rawurlencode(https://alexcatalano.com/photos/index.php) . ?param1= . urlencode(kitten photos) . <?php echo htmlentities("&param2=" ); ?> . urlencode(puppy photos)</i></p>
<h2>User Submitted Information</h2>
<p>information should be cleaned any time is it submitted from a user. </p>
link = rawurlenode.php?urlencode
echo htmlspecialchars(link)

<h2>Validations</h2>

  <h2>Turnary Operators</h2>

<?php include("../include/footer.php"); ?>
