// NO jQuery

// get elements from DOM, make variables
var clicker = document.querySelector('#clickTicket');
var myText = document.querySelector('#stipulation');

// hide the stipulation
myText.style.display = 'none';

// make clickticket work
clicker.addEventListener('click', showAndHide);

function showAndHide() {
  if (myText.classList.contains('showing')) {
    // hide it
    myText.style.display = 'none';
    // remove class
    myText.classList.remove('showing');
  } else {
    // show it
    myText.style.display = '';
    // add class
    myText.classList.add('showing');
    clicker.style.display = 'none';
  }
}


// NO jQuery Scipt pt. ii

// get elements from DOM, make variables
var clickTicketTwo = document.querySelector('#clickTicketTwo');
var myTextTwo = document.querySelector('#stipulationTwo');

// hide the stipulation
myTextTwo.style.display = 'none';

// make clickticket work
clickTicketTwo.addEventListener('click', showAndHideTwo);

function showAndHideTwo() {
  if (myTextTwo.classList.contains('showingTwo')) {
    // hide it
    myTextTwo.style.display = 'none';
    // remove class
    myTextTwo.classList.remove('showingTwo');
  } else {
    // show it
    myTextTwo.style.display = '';
    // add class
    myTextTwo.classList.add('showingTwo');
    clickTicketTwo.style.display = 'none';

  }
}


// NO jQuery Scipt pt. iii

// get elements from DOM, make variables
var clickTicketThree = document.querySelector('#clickTicketThree');
var myTextThree = document.querySelector('#stipulationThree');

// hide the stipulation
myTextThree.style.display = 'none';

// make clickticket work
clickTicketThree.addEventListener('click', showAndHideThree);

function showAndHideThree() {
  if (myTextThree.classList.contains('showingThree')) {
    // hide it
    myTextThree.style.display = 'none';
    // remove class
    myTextThree.classList.remove('showingThree');
  } else {
    // show it
    myTextThree.style.display = '';
    // add class
    myTextThree.classList.add('showingThree');
    clickTicketThree.style.display = 'none';
  }
}


// NO jQuery Scipt pt. iv

// get elements from DOM, make variables
var clickTicketFour = document.querySelector('#clickTicketFour');
var myTextFour = document.querySelector('#stipulationFour');

// hide the stipulation
myTextFour.style.display = 'none';

// make clickticket work
clickTicketFour.addEventListener('click', showAndHideFour);

function showAndHideFour() {
  if (myTextFour.classList.contains('showingFour')) {
    // hide it
    myTextFour.style.display = 'none';
    // remove class
    myTextFour.classList.remove('showingFour');
  } else {
    // show it
    myTextFour.style.display = '';
    // add class
    myTextFour.classList.add('showingFour');
    clickTicketFour.style.display = 'none';
  }
}
