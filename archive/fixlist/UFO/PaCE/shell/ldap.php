<?php

$username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
$password = "KjTExb96E2";
$server   = "dir.ufl.edu";

// $username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
// $password = "KjTExb96E2";
// $server   = "ldaps://ldap.ad.ufl.edu";


$ds=ldap_connect($server);  // must be a valid LDAP servere



if ($ds) {

    $r=ldap_bind($ds, $username, $password);     // this is an "anonymous" bind, typically
    // $sr=ldap_search($ds, "dc=ufl,dc=edu", "uid=acatalano2");
    // $sr=ldap_search($ds, "dc=ad,dc=ufl,dc=edu", "cn=jfh");
     $sr=ldap_search($ds, "dc=ufl,dc=edu", "uid=nraymond");

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
        echo "<pre>";
        print_r($info[$i]);
        echo "</pre>";
    }

    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}
?>
