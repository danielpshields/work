

<?php
    // if (is_numeric($searchedTerm)) {
    //   $numeric_ID      = $searchedTerm;
    //   $searchedTerm_ID = true;
    // } else {
    //   $verbal_ID = $searchedTerm;
    //   // $givenName = cleanEmail($searchedTerm);
    //   $givenName = $searchedTerm;
    //   $searchedTerm_Name = true;
    // }



//
//
//   $username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
//   $password = "KjTExb96E2";
//   $server   = "dir.ufl.edu";
//
//   $ds=ldap_connect($server);  // must be a valid LDAP servere
//
// if ($ds) {
//
//     $r=ldap_bind($ds, $username, $password); //bind
//     if ($searchedTerm_Name) {
//       $sr=ldap_search($ds, "dc=ufl,dc=edu", "uid={$verbal_ID}");
//     }
//     if ($searchedTerm_ID) {
//       $sr=ldap_search($ds, "dc=ufl,dc=edu", "uidnumber={$numeric_ID}");
//     }
//
//     $info = ldap_get_entries($ds, $sr);
//
//     for ($i=0; $i<$info["count"]; $i++) {
//         echo $ldap_email = $info[$i]["mail"][0];
//         echo $ldap_name  = $info[$i]["givenname"][0];
//         echo $ldap_ID    = $info[$i]["uidnumber"][0];
//     }
//
//     ldap_close($ds);
//
// } else {
//     echo "<h4>Unable to connect to LDAP server</h4>";
// }
?>
