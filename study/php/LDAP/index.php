<?php
// $ldaphost =  "ldap://UFDC-SSRB02.ad.ufl.edu";
// $ldapconn = ldap_connect($ldaphost)
//           or die("Could not connect to {$ldaphost}");

// using ldap bind
$ldaprdn  = 'TSS-AAC-SE-LDAP@ad.ufl.edu'; // ldap rdn or dn
$ldappass = 'KjTExb96E2';                 // associated password




// connect to ldap server
$ldapconn = ldap_connect("ldap://UFDC-SSRB02.ad.ufl.edu")
    or die("Could not connect to LDAP server.");




if ($ldapconn) {

    // binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // verify binding
    if ($ldapbind) {
        echo "LDAP bind successful...";
    } else {
        echo "LDAP bind failed...";
    }
}
?>
