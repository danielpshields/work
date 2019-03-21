<?php
  require("../include/functions.php");
  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  $searchFor = $_POST['searchFor'];

  if (is_numeric($searchFor)) {
    $id = $searchFor;
    // echo "it's a number" . $id;
    $searchForID = true;
  } else {
    $name = cleanEmail($searchFor);
    // echo "it's a string" . $name;
    $searchForName = true;
  }



  echo "<br><br><br>";

$username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
$password = "KjTExb96E2";
$server   = "dir.ufl.edu";


// $username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
// $password = "KjTExb96E2";
// $server   = "ldaps://ldap.ad.ufl.edu";

$ds=ldap_connect($server);  // must be a valid LDAP servere

if ($ds) {

    $r=ldap_bind($ds, $username, $password); //bind
    if ($searchForName) {
      $sr=ldap_search($ds, "dc=ufl,dc=edu", "uid={$name}");
    }
    if ($searchForID) {
      $sr=ldap_search($ds, "dc=ufl,dc=edu", "uidnumber={$id}");
    }

    $info = ldap_get_entries($ds, $sr);

    for ($i=0; $i<$info["count"]; $i++) {
        // echo $info[$i]["dn"] . "<br>";
        echo $info[$i]["givenname"][0] . "<br>";
        echo $info[$i]["uid"][0] . "<br>";
        echo $info[$i]["cn"][0] . "<br>";
        echo $info[$i]["displayname"][0] . "<br>";
        echo $info[$i]["mail"][0] . "<br>";
        echo $info[$i]["uidnumber"][0] . "<br>";
        echo $info[$i]["employeenumber"][0] . "<br>";
        echo $info[$i]["number"][0] . "<br>";
        echo $info[$i]["telephonenumber"][0] . "<br>";

    }

    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}
?>
