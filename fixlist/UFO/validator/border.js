$(document).ready(function(){
    //grab the container whose border you want to change
    var container = $(".oneBox");

    //when this function is called, change the border
    function changeBorderOne() {
        container.css({'border' : '2px solid #32CD32'});
    }
    //watch for the click event and call your function
    $("#green").on("click", changeBorderOne);

    var containerTwo = $(".twoBox");
    //when this function is called, change the border
    function changeBorderTwo() {
        containerTwo.css({'border' : '2px solid #32CD32'});
    }
    //watch for the click event and call your function
    $("#greenTwo").on("click", changeBorderTwo);


    var containerThree = $(".threeBox");
    //when this function is called, change the border
    function changeBorderThree() {
        containerThree.css({'border' : '2px solid #32CD32'});
    }
    //watch for the click event and call your function
    $("#greenThree").on("click", changeBorderThree);

    var containerFour = $(".fourBox");
    //when this function is called, change the border
    function changeBorderFour() {
        containerFour.css({'border' : '2px solid #32CD32'});
    }
    //watch for the click event and call your function
    $("#greenFour").on("click", changeBorderFour);

});
