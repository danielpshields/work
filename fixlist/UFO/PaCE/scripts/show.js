$(document).ready(function(){

  $(".hideTheKids").children().hide();

  $("#addCourseTwo").hide();
  $("#addCourseThree").hide();

  $( "#addCourse" ).click(function() {
    $( "#newOptions" ).show();
    $("#addCourse").hide();
    $("#addCourseTwo").show();
  });

  $( "#addCourseTwo" ).click(function() {
    $("#newOptionsTwo").show();
    $("#addCourseTwo").hide();
    $("#addCourseThree").show();
  });

  $( "#addCourseThree" ).click(function() {
    $("#newOptionsThree").show();
    $("#addCourseThree").hide();
    $("#addCourseFour").show();
  });

  $( "#addCourseFour" ).click(function() {
    $("#newOptionsFour").show();
    $("#addCourseFour").hide();
    $("#addCourseFive").show();
  });

  $( "#addCourseFive" ).click(function() {
    $("#newOptionsFive").show();
    $("#addCourseFive").hide();
    $("#addCourseSix").show();
  });

  $( "#addCourseSix" ).click(function() {
    $("#newOptionsSix").show();
    $("#addCourseSix").hide();
  });

});
