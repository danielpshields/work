function findBiggestFraction (a,b) {
  let result;
  a>b ? result = ["firstFraction: ", a] : result = ["secondFraction: ", b];
  return result;
}

let one = 4;
let two = 1;

let fractionResult = findBiggestFraction(one, two);

console.log(fractionResult);

document.write("<h1>" + fractionResult.length + "</h1>");
