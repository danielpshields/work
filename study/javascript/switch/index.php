<!DOCTYPE html>
<html>
<body>


    <pre>
      <script type="text/javascript">

      switch (variable) {
        case "some value":
      		//statement;
      		//statement;
       		//statement;
    		break;
        case "another value":
      		//statement
      		//statement
      		//statement
    		break;
        default:
        	//statement
        	//statement
        	//statement
      	break;
      }
      </script>
    </pre>

  <h2>Example One:</h2>

<p id="demo"></p>

<script>
let day;
switch (new Date().getDay()) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case  6:
    day = "Saturday";
}
document.getElementById("demo").innerHTML = "Today is " + day;
</script>


<h2>Example Two:</h2>
<script type="text/javascript">

let expr = 'Papayas';
switch (expr) {
  case 'Oranges':
    document.write('Oranges are $0.59 a pound.');
    break;
  case 'Mangoes':
  case 'Papayas':
    document.write('Mangoes and papayas are $2.79 a pound.');
    // expected output: "Mangoes and papayas are $2.79 a pound."
    break;
  default:
    document.write('Sorry, we are out of ' + expr + '.');
}


</script>

</body>
</html>
