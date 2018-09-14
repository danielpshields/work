$(document).ready(function(){

  $("#home").click(function(){
      $("#homeInfo").toggle();
      $("#homeInfo").siblings().hide();
  });

  $("#about").click(function(){
      $("#aboutInfo").toggle();
      $("#aboutInfo").siblings().hide();
  });

  $("#contact").click(function(){
      $("#contactInfo").toggle();
      $("#contactInfo").siblings().hide();
  });

  $("#blog").click(function(){
      $("#blogInfo").toggle();
      $("#blogInfo").siblings().hide();
  });


});
