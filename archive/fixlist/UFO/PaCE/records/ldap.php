<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$search_integer = false;
$search_string  = false;

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
      // $id_string = $ldap_search;
      // $givenName = cleanEmail($id_string);
      $search_string   = true;
    }
  }



  $username = "CN=TSS-AAC-SE-LDAP,OU=_Accounts-Service,OU=AAC,OU=Customers,OU=TSS,OU=Units,OU=UFIT,OU=Departments,OU=UF,DC=ad,DC=ufl,DC=edu";
  // $username = "TSS-AAC-SE-LDAP@ad.ufl.edu";
  // $username = "";

  $password = "KjTExb96E2";
  // $password = "";

  $server   = "ldaps://ldap.ad.ufl.edu";
  // $server   = "dir.ufl.edu";
  // $server   = "";


  $ds=ldap_connect($server);  // must be a valid LDAP server

if ($ds) {
  
  $r=ldap_bind($ds, $username, $password); //bind

    ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ds, LDAP_OPT_REFERRALS, false);



    if ($search_string) {
      $sr=ldap_search($ds, "dc=ad,dc=ufl,dc=edu", "cn=acatalano2");
      echo "found search string" . "<br>" . $sr;
      if (!isset($sr)) { print "Fuck string\n"; exit; }
    } else if ($search_integer) {
      $sr=ldap_search($ds, "dc=ad,dc=ufl,dc=edu", "uidnumber={$id_integer}");
      echo "found search int" . "<br>" . $sr;
      if (!isset($sr)) { print "Fuck int\n"; exit; }
    } else {
      echo "both are false, alex";
    }

    echo ldap_error($ds);
    ldap_error($ds);

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
