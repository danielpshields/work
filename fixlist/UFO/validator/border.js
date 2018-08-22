$(document).ready(function(){
    //grab the container whose border you want to change
    var container = $(".oneBox");

    //when this function is called, change the border
    function changeBorderOne() {
        container.css({'border' : '2px solid #32CD32'});
    }
    //watch for the click event and call your function
    $("#green").on("click", changeBorderOne);


});
