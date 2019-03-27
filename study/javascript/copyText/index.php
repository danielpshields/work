<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body {
        width: 400px;
        margin: auto;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>

    <!-- <input type="text" value="Hello World" id="myInput"> -->


    <p>Email me at <a class="js-emaillink" href="">alexgrerge</a></p>
    <p><button class="js-emailcopybtn">Copy Email</button></p>

<script type="text/javascript">
    var copyEmailBtn = document.querySelector('.js-emailcopybtn');
    copyEmailBtn.addEventListener('click', function(event) {
      // Select the email link anchor text
      var emailLink = document.querySelector('.js-emaillink');
      var range = document.createRange();
      range.selectNode(emailLink);
      window.getSelection().addRange(range);

      try {
        // Now that we've selected the anchor text, execute the copy command
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copy email command was ' + msg);
      } catch(err) {
        console.log('Oops, unable to copy');
      }

      // Remove the selections - NOTE: Should use
      // removeRange(range) when it is supported
      window.getSelection().removeAllRanges();
    });

  </script>
  <br>
  <input type="text" name="" value="">
  </body>
</html>
