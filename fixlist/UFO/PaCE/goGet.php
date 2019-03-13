

<!-- <script type="text/javascript">
    function addText() {
      window.open('https://helpdesk.ad.ufl.edu/');
      var input = document.getElementById('userID');
      input.value = input.value +' across the street';
    }

    addText();
</script> -->

<script>
function nWin() {
  var w = window.open();
  var html = $("#userID").html();

    $(w.document.body).html(html);
}

$(function() {
    $("a#print").click(nWin);
});​
</script>

<div id="toNewWindow">
    <p>Your content here</p>
</div>

<a href="javascript:;" id="print">Open</a>​


<?php


// https://helpdesk.ad.ufl.edu/

  ?>
