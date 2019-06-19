// global variables
const height = 6000;
let position = 0;
let health = 100;
let food = 50;
let goat = 0;
let distance = height;
let nap = 0;

// messages
let m1  = "You're at the base of a mountain that is " + height + " feet high. Your goal is to climb it. Watch out for mountain goats.";
let m2  = "A large mountain goat with gigantic horns blocks your path.";
let m3  = "Oh, no! A mountain goat has knocked you down!";
let m4  = "Oh, snap! You are too exhausted to continue.";
let m5  = "Congratulations! You've reached the summit!";
let m6  = "You must select an option before you click Go.";
let m7  = "You are climbing the mountain!";
let m8  = "You are eating!";
let m9  = "No need to eat, you're at 100% health!";
let m10 = "You are out of food. Please select another option";
let m11 = "Your health is too low. Please choose an option to increase your health.";
let m12 = "There is no need to rest. Please choose another option.";
let m13 = "Zzz...";
let m14 = "Zzz -- Something is stealing your food while your guard is down";
let m15 = "The thief appears. It's a goat. Now angered at your lack of food, confident in your weakness after seeing how much you nap. It attacks.";
let m16 = "";

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
    eat.checked = false;
    rest.checked = false;
  } else if (climb.checked) {
    climbAction();
  } else if (eat.checked) {
    eatAction();
  } else if (rest.checked) {
    restAction();
  } else {
    // if nothing is checked
    message = m6; // You must select an option before you click Go.
  }
  // calculate the remaining distance
  distance = height - position;

  // write out the new values for all the vars
  writeResults();
}

// more functions

function climbAction() {
  if (health <= 10) {
    message = m11; // Your health is too low. Please choose an option to increase your health.
  } else {
    position += 100;
    health -= 10;
    message = m7; // you are climbing the mountain
  }
  climb.checked = false; /* keep */
}

function eatAction() {
  if (food === 0) {
    message = m10; // You are out of food. Please select another option
  } else if (health < 100) {
    food   -= 10;
    health += 10;
    message = m8; // you are eating
  } else {
    message = m9; // no need to eat, you're at 100% health!
  }
  eat.checked = false; /* keep */
}

function restAction() {
  if (health < 100) {
    health += 10;
    message = m13; // Zzz...
    nap++;
    if (nap > 4 && food > 0) {
      food -= 10;
      message = m14; // Zzz -- Something is stealing your food while your guard is down!
    } else if (nap > 4 && food == 0) {
      goatAttack();
    }
  } else {
    message = m12; // There is no need to rest. Please choose another option.
  }
  rest.checked = false; /* keep */
}

function goatAttack() {
  let attack = Math.floor(Math.random() * 90);
  attack = Math.ceil(attack / 10) * 10;
  health -= attack;
  if (health >= 50) {
  //  message = m16; // The thief appears. It's a goat. Now angered at your lack of food, confident in your weakness after seeing how much you nap. It attacks
  message = m20; // 
  } else {
  //  message = m15; // The thief appears. It's a goat. Now angered at your lack of food, confident in your weakness after seeing how much you nap. It attacks
  message = m21;
  }

}

// at end of climberResult() function, this runs
// it updates everything on the HTML page
function writeResults() {
  document.querySelector("#position").textContent = position;
  document.querySelector("#health").textContent = health;
  document.querySelector("#food").textContent = food;
  document.querySelector("#distance").textContent = distance;
  document.querySelector("#narration").textContent = message;
}


// October 2018
