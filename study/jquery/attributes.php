<script>

$(document).ready(function(){

  $("#home").click(function(){
      $("#homeInfo").show();
      $("#homeInfo").siblings().hide();
      $("#home").attr('class', 'newID');
  });

  $("#home").click(function() {
    $("#homeInfo").removeAttr("#home");
    $("#homeInfo").hide();
  });

  $("#about").click(function(){
      $("#aboutInfo").show();
      $("#aboutInfo").siblings().hide();
  });

  $("#contact").click(function(){
      $("#contactInfo").show();
      $("#contactInfo").siblings().hide();
  });

  $("#blog").click(function(){
      $("#blogInfo").show();
      $("#blogInfo").siblings().hide();
  });


});
</script>
