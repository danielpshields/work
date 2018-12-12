$(document).ready(function(){

  $("#tickets").click(function(){
      $("#show_tickets").toggle();
      $("#show_tickets").siblings().hide();
  });

  $("#records").click(function(){
      $("#show_records").toggle();
      $("#show_records").siblings().hide();
  });

});
