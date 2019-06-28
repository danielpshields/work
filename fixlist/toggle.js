//Toggle submenus

g = document.querySelectorAll(".dropdown-toggle");
let testVariable = document.querySelectorAll(".menu-item-has-children a");

for (k = 0; k < g.length; k++){
  console.log(g[k]);
  // testVariable[k].className += ' foobar';


  var para = document.createElement("span");
  var node = document.createTextNode("This is new.");
  var bar = para.appendChild(node);
  var reference = document.querySelector('.sub-menu');

  // var element = document.getElementById("menu-item-5617");
  testVariable[k].insertBefore(reference,bar);
  // g[k].remove();
  //testVariable.classList.add('oasdf');
} 
