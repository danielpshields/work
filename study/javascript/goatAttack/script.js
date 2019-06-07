// Alex Catalano
const height   = 6000;
let position   = 0;
let health     = 100;
let food       = 50;
let goat       = 0;
let nap        = 0;
let sleepCycle = 0;
let distance   = height;
let m1  = "You're at the base of a mountain that is " + height + " feet high. Your goal is to climb it. Watch out for mountain goats.";
let m2  = "A large mountain goat with gigantic horns blocks your path.";
let m3  = "Oh, no! A mountain goat has knocked you down!";
let m4  = "Oh, snap! You are too exhausted to continue.";
let m5  = "Congratulations! You've reached the summit!";
let m6  = "You must select an option before you click Go.";
let m7  = "You are climbing the mountain!";
let m8  = "You are out of food. This hurts your stomach and lowers your health.";
let m9  = "You have too much energy to rest!";
let m10 = "You are already full!";
let m11 = "Zzzz...";
let m12 = "You're awoken by a disturbance. Some of your food is missing.";
let m13 = "Chewing... Chewing...";
let message = m1;

if (sleepCycle > 1) {
  goatAttack();
} else {
  writeResults();
}




const GOBUTTON = document.querySelector('#go');
GOBUTTON.addEventListener('click', climberResult);

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
    message = m6;
  }
  distance = height - position;
  writeResults();
}

function climbAction() {
  position += 100;
  health -= 10;
  message = m7;
  climb.checked = false; /* keep */
}

function eatAction() {
  if (food === 0) {
    health -= 10;
    message = m8;
  } else if (health > 90) {
    message = m10;
  } else {
      food -= 10;
      health += 10;
      message = m13;
  }
  eat.checked = false; /* keep */
}

function restAction() {
  // return sleepCycle = Math.round(nap / 4);
  if (health <= 90) {
    health += 10;
    nap++;
    if (nap === 4) {
      message = m12; // awoken, something stole your food
      food   -= 10;
      nap     = 0;
      ++sleepCycle;
    } else {
        message = m11 + sleepCycle; //  zzz.zzzz...
    }
  } else {
    message = m9;
  }
  rest.checked = false; /* keep */
}

function goatAttack() {
  console.log("its on amigo!");
}

function writeResults() {
  document.querySelector("#position").textContent  = position;
  document.querySelector("#health").textContent    = health;
  document.querySelector("#food").textContent      = food;
  document.querySelector("#distance").textContent  = distance;
  document.querySelector("#narration").textContent = message;
}


// October 2018
