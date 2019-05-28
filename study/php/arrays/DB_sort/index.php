from Jim:

https://www.php.net/manual/en/function.usort.php

The "traditional" way to sort a collection of things is to
pass the collection to a sort function along with a comparison
function. The comparison function returns -1 (less than), 0 (equal),
or 1 (greater than). The comparison function is generally like
so:

  func($a, $b) {
    if ($a == $b) {
       return 0;
    }

    if ($a < $b) {
       return -1;
    }

    if ($a > $b) {
       return 1;
    }
  }

$a and $b represent elements of the array.
However, $a and $b can be anything, even arrays themselves.

So if you want to sort on the first item of the array:

  func($a, $b) {
    if ($a[0] == $b[0]) {
       return 0;
    }

    if ($a[0] < $b[0]) {
       return -1;
    }

    if ($a[0] > $b[0]) {
       return 1;
    }
  }

So you could run the first query and save the results in the empty
list, do what you want with that, then use "usort" and a comparison
function "order_by_id" and get a new sorted list without running
another mysql query.

Make sense?
