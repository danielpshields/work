<?php
  $username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
  $password = "KjTExb96E2";
  $server   = "dir.ufl.edu";
  $ds=ldap_connect($server);  // must be a valid LDAP servere

if ($ds) {

    $r=ldap_bind($ds, $username, $password); //bind
    if ($searchForName) {
      $sr=ldap_search($ds, "dc=ufl,dc=edu", "uid={$givenName}");
    }
    if ($searchForID) {
      $sr=ldap_search($ds, "dc=ufl,dc=edu", "uidnumber={$UID}");
    }

    $info = ldap_get_entries($ds, $sr);

    for ($i=0; $i<$info["count"]; $i++) {
        // echo $info[$i]["dn"] . "<br>";
        $ldap_givenName = $info[$i]["givenname"][0];
        $info[$i]["uid"][0] . "<br>";
        $info[$i]["cn"][0] . "<br>";
        $info[$i]["displayname"][0] . "<br>";
        $ldap_email = $info[$i]["mail"][0] . "<br>";
        $ldap_UID = $info[$i]["uidnumber"][0];
        $info[$i]["employeenumber"][0] . "<br>";
        $info[$i]["number"][0] . "<br>";
        $info[$i]["telephonenumber"][0] . "<br>";

    }

    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}
?>
