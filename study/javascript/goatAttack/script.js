// Alex Catalano

// global variables May Add
const height = 6000;
let position = 0;
let health   = 100;
let food     = 50;
let goat     = 0;
let distance = height;

// blue box messages
let m1 = "You're at the base of a mountain that is " + height + " feet high. Your goal is to climb it. Watch out for mountain goats.";
let m2 = "A large mountain goat with gigantic horns blocks your path.";
let m3 = "Oh, no! A mountain goat has knocked you down!";
let m4 = "Oh, snap! You are too exhausted to continue.";
let m5 = "Congratulations! You've reached the summit!";
let m6 = "You must select an option before you click Go.";
let m7 = "You are climbing the mountain!";
//can add new messages

// the value of message will be changed depending on player actions
// m1 is the starting message value
let message = m1;

// this function executes immediately when the page loads
writeResults();

// two lines of code make the Go button work:
// first we identify the button and assign it to a variable
const goButton = document.querySelector('#go');
// then we "listen" for any click on it; when a click happens,
// the function climberResult() will run.
// Note, no parentheses after the function name in this case
goButton.addEventListener('click', climberResult);

// the main function - runs each time the Go button is clicked
// it calls the other functions
function climberResult() {
  if (health <= 0) {
    message = m4;
    climb.checked = false;
    eat.checked   = false;
    rest.checked  = false;
  } else if (climb.checked) {
    climbAction();
  } else if (eat.checked) {
    eatAction();
  } else if (rest.checked) {
    restAction();
  } else {
    // if nothing is checked
    message = m6;
  }
  // calculate the remaining distance
  distance = height - position;

  // write out the new values for all the vars
  writeResults();
}

// more functions

function climbAction() {
  position += 100;
  health   -= 10;
  message   = m7;
  climb.checked = false; /* keep */
}

function eatAction() {
  position += 0;
  health   += 10;
  food     -= 10;
  message   = m7;
  eat.checked = false; /* keep */
}

function restAction() {
  position += 0;
  health   += 20;
  food     -= 0;
  rest.checked = false; /* keep */
}

function goatAttack() {}

// at end of climberResult() function, this runs
// it updates everything on the HTML page
function writeResults() {
  document.querySelector("#position").textContent  = position;
  document.querySelector("#health").textContent    = health;
  document.querySelector("#food").textContent      = food;
  document.querySelector("#distance").textContent  = distance;
  document.querySelector("#narration").textContent = message;
}


// October 2018
