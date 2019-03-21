<?php

$username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
$password = "KjTExb96E2";
//
// $username = "acatalano2@ufl.edu";
// $password = "A(TnRW5g~#4')zc";
//
// $username = "";
// $password = "";

$server   = "dir.ufl.edu";
// $server   = "ldaps://ldap.ufl.edu";
// $server   = "ldaps://UFDC-SSRB02.ad.ufl.edu";


$ds=ldap_connect($server);  // must be a valid LDAP servere



if ($ds) {

    $r=ldap_bind($ds, $username, $password);     // this is an "anonymous" bind, typically

     $sr=ldap_search($ds, "ou=People, dc=ufl, dc=edu", "uid=acatalano2");

    $info = ldap_get_entries($ds, $sr);

    for ($i=0; $i<$info["count"]; $i++) {
        // echo $info[$i]["dn"] . "<br>";
        // echo $info[$i]["givenname"][0] . "<br>";
        // echo $info[$i]["uid"][0] . "<br>";
        // echo $info[$i]["cn"][0] . "<br>";
        // echo $info[$i]["displayname"][0] . "<br>";
        // echo $info[$i]["mail"][0] . "<br>";
        // echo $info[$i]["uidnumber"][0] . "<br>";
        // echo $info[$i]["employeenumber"][0] . "<br>";
        // echo $info[$i]["number"][0] . "<br>";
        // echo $info[$i]["telephonenumber"][0] . "<br>";
        // echo "<pre>";
        // print_r($info[$i]);
        // echo "</pre>";
    }

    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";

    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}
?>
