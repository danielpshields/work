<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>toggleClass demo</title>
  <style>
  .blue {
    color: blue;
  }
  .highlight {
    background: yellow;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<p id="hope" class="blue">Click to toggle</p>
<p class="blue highlight">highlight</p>
<p class="blue">on these</p>
<p id="randy" class="blue">paragraphs</p>

<script>
$( "#hope" ).click(function() {
  $( "#randy" ).toggleClass( "highlight" );
});
</script>

</body>
</html>
