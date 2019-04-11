<?php

function cleanEmail($email) {
 $length   = strlen($email) . "<br>";
 $position = strpos($email, "@") . "<br>";
 $truncate = $length - $position . "<br>";
 return substr($email, 0, -$truncate);
}


  if (isset($_POST['searchFor'])) {

    $ldap_search = $_POST['searchFor'];

    if (is_numeric($ldap_search)) {
      $id_integer      = $ldap_search;
      $search_integer  = true;
    } else {

      $id_string = $ldap_search;
      $givenName = cleanEmail($id_string);
      $search_string   = true;
    }
  }

  // $username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
  // $password = "KjTExb96E2";
  // $server   = "dir.ufl.edu";

  // $username = "CN=TSS-AAC-SE-LDAP,OU=_Accounts-Service,OU=AAC,OU=Customers,OU=TSS,OU=Units,OU=UFIT,OU=Departments,OU=UF,DC=ad,DC=ufl,DC=edu";
  // $password = "KjTExb96E2";
  // $server   = "ldaps://ldap.ad.ufl.edu";

  // $username = "CN=TSS-AAC-SE-LDAP,OU=_Accounts-Service,OU=AAC,OU=Customers,OU=TSS,OU=Units,OU=UFIT,OU=Departments,OU=UF,DC=ad,DC=ufl,DC=edu";
  // $username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
  // $password = "KjTExb96E2";
  // $server   = "ldaps://ldap.ad.ufl.edu";

  $server   = "dir.ufl.edu";

  $ds=ldap_connect($server);  // must be a valid LDAP servere

  ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

if ($ds) {


    $r=ldap_bind($ds, $username, $password); //bind
    if ($search_string) {
      $sr=ldap_search($ds, "dc=ufl,dc=edu", "uid={$givenName}");
    }
    if ($search_integer) {
      $sr=ldap_search($ds, "dc=ufl,dc=edu", "uidnumber={$id_integer}");
    }

    $info = ldap_get_entries($ds, $sr);

    for ($i=0; $i<$info["count"]; $i++) {
      echo  $ldap_email = $info[$i]["mail"][0];
      echo  $ldap_name  = $info[$i]["givenname"][0];
      echo  $ldap_ID    = $info[$i]["uidnumber"][0];
      echo "<pre>";
        print_r($info[$i]);
      echo "</pre>";
    }

    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}
?>
