<?php
  $username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
  $password = "KjTExb96E2";
  $server   = "dir.ufl.edu";
  $ds=ldap_connect($server);  // must be a valid LDAP servere

if ($ds) {

    $r=ldap_bind($ds, $username, $password); //bind
    if ($searchedTerm_Name) {
      $sr=ldap_search($ds, "dc=ufl,dc=edu", "uid={$verbal_ID}");
    }
    if ($searchedTerm_ID) {
      $sr=ldap_search($ds, "dc=ufl,dc=edu", "uidnumber={$numeric_ID}");
    }

    $info = ldap_get_entries($ds, $sr);

    for ($i=0; $i<$info["count"]; $i++) {
        // echo $info[$i]["dn"] . "<br>";
        // $info[$i]["uid"][0] . "<br>";
        // $info[$i]["cn"][0] . "<br>";
        // $info[$i]["displayname"][0] . "<br>";
        // $info[$i]["employeenumber"][0] . "<br>";
        // $info[$i]["number"][0] . "<br>";
        // $info[$i]["telephonenumber"][0] . "<br>";

        $ldap_email = $info[$i]["mail"][0];
        $ldap_name  = $info[$i]["givenname"][0];
        $ldap_ID    = $info[$i]["uidnumber"][0];
    }

    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}
?>
