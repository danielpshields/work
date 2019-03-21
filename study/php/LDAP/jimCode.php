<?php

$username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
$password = "KjTExb96E2";
$server   = "dir.ufl.edu";

echo "LDAP query test<br>";
echo "Connecting ...";
$ds=ldap_connect($server);  // must be a valid LDAP servere
echo "connect result is " . $ds . "<br>";


if ($ds) {
    echo "Binding ...<br>";
    $r=ldap_bind($ds, $username, $password);     // this is an "anonymous" bind, typically
                           // read-only access
    echo "Bind result is " . $r . "<br>";

    // Search surname entry
    $sr=ldap_search($ds, "dc=ufl,dc=edu", "uid=acatalano2");
    echo "Search result is " . $sr . "<br>";

    echo "Number of entries returned is " . ldap_count_entries($ds, $sr) . "<br>";

    echo "Getting entries ...<br>";
    $info = ldap_get_entries($ds, $sr);
    echo "Data for " . $info["count"] . " items returned:<p>";

    for ($i=0; $i<$info["count"]; $i++) {
        echo "dn is: " . $info[$i]["dn"] . "<br>";
        echo "first cn entry is: " . $info[$i]["cn"][0] . "<br>";
        echo "first email entry is: " . $info[$i]["mail"][0] . "<br>";
    }

    echo "Closing connection";
    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}
?>
