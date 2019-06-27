const CATELEMENT = document.querySelector(".cta a");


  if (CATELEMENT.hasAttribute("target")) {
    console.log(CATELEMENT.getAttribute("target"));
  } else {
    CATELEMENT.setAttribute("target", "_blank");
  }


// console.log(CATELEMENT.attributes);

console.log(CATELEMENT.getAttribute("a"));


// console.log(CATELEMENT.attributes);
