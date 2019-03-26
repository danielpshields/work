<?php

// $server   = "ldaps://ldap.ad.ufl.edu";
// $server   = "ldaps://UFDC-SSRB02.ad.ufl.edu";

$username = "" /* real credentials usually go here */;
$password = "" /* real credentials usually go here */;

$server   = "dir.ufl.edu";

$ds=ldap_connect($server);

if ($ds) {

    $r=ldap_bind($ds, $username, $password);

    $sr=ldap_search($ds, "ou=People, dc=ufl, dc=edu", "uid=acatalano2");

    $info = ldap_get_entries($ds, $sr);

    for ($i=0; $i<$info["count"]; $i++) {
        echo "<pre>";
        print_r($info[$i]);
        echo "</pre>";
    }

    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}
?>
