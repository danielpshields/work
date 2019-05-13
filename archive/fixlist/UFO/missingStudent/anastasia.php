<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <p>HTTP_UFSHIB_EPPN     agavrios@ufl.edu </p>
    <p>REDIRECT_UFShib_eppn agavrios@ufl.edu </p>
    <p>HTTP_UFSHIB_MAIL     agavrilos@ufl.edu</p>
    <p>HTTP_UFSHIB_MAIL     agavrilos@ufl.edu</p>
    <p>REDIRECT_UFShib_mail agavrilos@ufl.edu</p>

              contacted      agavrilos@ufl.edu

agavrios@ufl.edu
agavrilos@ufl.edu


<?php
                            $emails = array(
                              "$HTTP_UFSHIB_EPPN"     => "$HTTP_UFSHIB_MAIL",
                              "$REDIRECT_UFShib_mail" => "$REDIRECT_UFShib_eppn"
                            );

                            foreach ($emails as $key => $value) {
                              if ($email == $key || $email == $value) {
                                $email = $HTTP_UFSHIB_EPPN;
                              }
                            }




    $UFID                 = $_SERVER['HTTP_UFSHIB_UFID'];
    $email                = $_SERVER['HTTP_UFSHIB_MAIL'];
    $HTTP_UFSHIB_MAIL     = $_SERVER['HTTP_UFSHIB_MAIL'];
    $HTTP_UFSHIB_EPPN     = $_SERVER['HTTP_UFSHIB_EPPN'];
    $REDIRECT_UFShib_eppn = $_SERVER['REDIRECT_UFShib_eppn'];
    $REDIRECT_UFShib_mail = $_SERVER['REDIRECT_UFShib_mail'];


?>

    <p>REDIRECT_UFShib_businessName Gavrilos,Anastasia Yvonne </p>
    <p>HTTP_UFSHIB_UFID 59907069 </p>

    <p>HTTP_UFSHIB_CN Gavrilos,Anastasia Yvonne </p>
    <p>REDIRECT_UFShib_cn Gavrilos,Anastasia Yvonne </p>
    <p>REDIRECT_UFShib_middleName Yvonne </p>

    <p>HTTP_UFSHIB_L </p>
    <p>HTTP_UFSHIB_GLID agavrios </p>
    <p>HTTP_REMOTE_USER 59907069 </p>
    <p>HTTP_UFSHIB_GIVENNAME Anastasia </p>
    <p>HTTP_UFSHIB_SN Gavrilos </p>
    <p>REDIRECT_UFShib_glid agavrios </p>

    <p>HTTP_UFSHIB_BUSINESSNAME Gavrilos,Anastasia Yvonne </p>
    <p>REDIRECT_UFShib_givenName Anastasia </p>
    <p>HTTP_UFSHIB_MIDDLENAME Yvonne </p>


<p>HTTP_UFSHIB_ORGUNIT_DN </p>
<p>REDIRECT_UFShib_postalAddress $$$ </p>
<p>HTTP_UFSHIB_UFADGROUPSDN </p>
<p>SERVER_SIGNATURE </p>
<p>HTTP_UFSHIB_BUSINESSCATEGORY </p>
<p>HTTP_UFSHIB_MEMBEROF </p>
<p>HTTP_UFSHIB_SHIB_ASSERTION_COUNT </p>
<p>SSL_TLS_SNI www.advising.ufl.edu </p>
<p>REDIRECT_UFShib_Shib_Identity_Provider https://login.ufl.edu/idp/shibboleth </p>
<p>HTTP_UFSHIB_UFAD_STUDENTCOURSES </p>
<p>UNIQUE_ID XJ5s-goT8DkAABsXcSEAAAB- </p>
<p>HTTP_UFSHIB_SHIB_AUTHNCONTEXT_CLASS urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport </p>
<p>REDIRECT_UFShib_departmentNumber ST020000 </p>
<p>REDIRECT_UFShib_Shib_Handler https://www.advising.ufl.edu/Shibboleth.sso </p>
<p>HTTP_UFSHIB_FACSIMILETELEPHONENUMBER </p>
<p>HTTP_UFSHIB_EDUPERSONCOURSEMEMBER </p>
<p>HTTP_UFSHIB_ST </p>
<p>HTTP_USER_AGENT Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0.2 Safari/605.1.15 </p>
<p>REDIRECT_REMOTE_USER 59907069 </p>
<p>SERVER_PORT 443 </p>
<p>HTTP_ORIGIN https://login.ufl.edu </p>
<p>HTTP_HOST www.advising.ufl.edu </p>
<p>HTTP_UFSHIB_CARLICENSE </p>
<p>HTTP_UFSHIB_UF_AFFILIATIONS </p>
<p>HTTP_UFSHIB_SHIB_AUTHENTICATION_INSTANT 2019-03-29T19:07:42.007Z </p>
<p>HTTP_UFSHIB_TARGETED_ID </p>
<p>HTTP_UFSHIB_UNSCOPED_AFFILIATION </p>



<p>HTTP_UFSHIB_DEPARTMENTNUMBER ST020000 </p>
<p>REDIRECT_UFShib_Shib_AuthnContext_Class urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport </p>
<p>HTTP_UFSHIB_PRIMARY_ORGUNIT_DN </p>
<p>REDIRECT_HANDLER application/x-httpd-php </p>
<p>REDIRECT_UFShib_Shib_Session_Index _439eb1b075e6c15bc3302e90ccb2b73d </p>
<p>DOCUMENT_ROOT /h/cnswww-www.advising/www.advising.ufl.edu/htdocs </p>
<p>HTTP_UFSHIB_POSTOFFICEBOX </p>
<p>SCRIPT_FILENAME /h/cnswww-www.advising/www.advising.ufl.edu/htdocs/UFO/printenv.php </p>
<p>HTTPS on </p>
<p>REQUEST_URI /UFO/printenv.php </p>
<p>HTTP_UFSHIB_STREET </p>
<p>HTTP_UFSHIB_UFLOA </p>
<p>HTTP_UFSHIB_SHIB_AUTHNCONTEXT_DECL </p>
<p>HTTP_UFSHIB_SHIB_COOKIE_NAME </p>
<p>SCRIPT_NAME /UFO/printenv.php </p>
<p>HTTP_UFSHIB_PRIMARY_AFFILIATION </p>




<p>HTTP_UFSHIB_POSTALADDRESS $$$ </p>
<p>REDIRECT_UFShib_UFAD_PSRoles UF_EL_NONEMPLOYEE_SELF_SERVICE$UF_EMS_ALL_STUDENTS$UF_N_EM_IMAG_SELF_SERVICE$UF_N_OUR_IMAG_SELF_SERVICE$UF_N_SFA_IMAG_SELF_SERVICE$UF_N_UB_IMAG_SELF_SERVICE$UF_PA_AuthUsers$UF_PA_Student$UF_SF_STUDENT_SS$UF_SS_USER </p>
<p>HTTP_UFSHIB_TITLE </p>
<p>HTTP_UFSHIB_NICKNAME </p>
<p>HTTP_UFSHIB_EDUPERSONCOURSEOFFERING </p>
<p>HTTP_UFSHIB_INITIALS </p>
<p>HTTP_UFSHIB_ORG_DN </p>
<p>HTTP_CONNECTION keep-alive </p>
<p>REMOTE_PORT 55851 </p>

<p>PATH /usr/local/bin:/usr/bin:/bin </p>
<p>HTTP_UFSHIB_SHIB_APPLICATION_ID urn:edu:ufl:prod:00137 </p>
<p>HTTP_UFSHIB_MANAGER </p>
<p>HTTP_UFSHIB_EDUPERSONASSURANCE </p>
<p>PWD /h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin </p>
<p>SERVER_ADMIN helpdesk@ufl.edu </p>
<p>HTTP_UFSHIB_AFFILIATION </p>
<p>HTTP_UFSHIB_SHIB_SESSION_INACTIVITY 1553890062 </p>
<p>HTTP_UFSHIB_SHIB_SESSION_EXPIRES 1553915262 </p>
<p>HTTP_UFSHIB_NETMANAGED_BY ST010000 </p>
<p>HTTP_UFSHIB_DESCRIPTION </p>
<p>REDIRECT_STATUS 200 </p>
<p>REDIRECT_UFShib_Shib_Authentication_Instant 2019-03-29T19:07:42.007Z </p>
<p>REDIRECT_UFShib_Shib_Application_ID urn:edu:ufl:prod:00137 </p>
<p>HTTP_UFSHIB_SEEALSO </p>
<p>HTTP_UFSHIB_SHIB_AUTHENTICATION_METHOD urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport </p>
<p>HTTP_ACCEPT_LANGUAGE en-us </p>
<p>HTTP_UFSHIB_OU </p>
<p>REDIRECT_UFShib_Shib_Session_Inactivity 1553890062 </p>
<p>REDIRECT_UFShib_Shib_Session_Expires 1553915262 </p>
<p>HTTP_UFSHIB_EDUPERSON_AFFILIATIONS </p>
<p>HTTP_REFERER https://login.ufl.edu/idp/profile/SAML2/Redirect/SSO?execution=e1s1 </p>
<p>HTTP_ACCEPT text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8 </p>
<p>REMOTE_ADDR 67.132.70.46 </p>
<p>HTTP_UFSHIB_TELEPHONENUMBER </p>
<p>SHLVL 0 </p>
<p>SERVER_NAME www.advising.ufl.edu </p>
<p>HTTP_UFSHIB_PREFERREDLANGUAGE </p>
<p>HTTP_UFSHIB_ENTITLEMENT </p>
<p>HTTP_UFSHIB_SHIB_IDENTITY_PROVIDER https://login.ufl.edu/idp/shibboleth </p>
<p>HTTP_UFSHIB_POSTALCODE </p>


<p>HTTP_UFSHIB_DISPLAYNAME </p>
<p>HTTP_UFSHIB_UFAD_PSROLES UF_EL_NONEMPLOYEE_SELF_SERVICE$UF_EMS_ALL_STUDENTS$UF_N_EM_IMAG_SELF_SERVICE$UF_N_OUR_IMAG_SELF_SERVICE$UF_N_SFA_IMAG_SELF_SERVICE$UF_N_UB_IMAG_SELF_SERVICE$UF_PA_AuthUsers$UF_PA_Student$UF_SF_STUDENT_SS$UF_SS_USER </p>
<p>HTTP_UFSHIB_SHIB_HANDLER https://www.advising.ufl.edu/Shibboleth.sso </p>
<p>HTTP_UFSHIB_SHIB_SESSION_ID _baac0ba40ea92a8838eff3e96c959317 </p>
<p>REDIRECT_UFShib_Shib_Authentication_Method urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport </p>
<p>HTTP_UFSHIB_EMPLOYEETYPE </p>
<p>HTTP_UFSHIB_PERSISTENT_ID https://login.ufl.edu/idp/shibboleth!urn:edu:ufl:prod:00137!rrZQMCm2XmMIxuEtD1rEVoAtw08= </p>
<p>SERVER_SOFTWARE Apache </p>
<p>QUERY_STRING </p>
<p>SERVER_ADDR 128.227.19.170 </p>
<p>GATEWAY_INTERFACE CGI/1.1 </p>
<p>SERVER_PROTOCOL HTTP/1.1 </p>
<p>REDIRECT_UFShib_Shib_Session_ID _baac0ba40ea92a8838eff3e96c959317 </p>
<p>HTTP_UFSHIB_SHIB_SESSION_INDEX _439eb1b075e6c15bc3302e90ccb2b73d </p>
<p>HTTP_ACCEPT_ENCODING br, gzip, deflate </p>
<p>REDIRECT_URL /UFO/printenv.php </p>
<p>REDIRECT_UFShib_persistent_id https://login.ufl.edu/idp/shibboleth!urn:edu:ufl:prod:00137!rrZQMCm2XmMIxuEtD1rEVoAtw08= </p>
<p>HTTP_UFSHIB_DIRECTORYNAME </p>
<p>REDIRECT_UFShib_ufid 59907069 </p>
<p>REDIRECT_UFShib_netmanaged_by ST010000 </p>
<p>REQUEST_METHOD GET </p>
HTTP_COOKIE _shibsession_75726e3a6564753a75666c3a70726f643a303031333775726e3a6564753a75666c3a70726f643a3030313337=_baac0ba40ea92a8838eff3e96c959317; __utma=16479846.1076581087.1535035314.1553810028.1553836611.10; __utmc=16479846; __utmz=16479846.1553836611.10.6.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); _ga=GA1.2.1076581087.1535035314; _gid=GA1.2.180972980.1553814428; _gcl_au=1.1.307434668.1553835546; ipe.3298.pageViewedCount=1; <p>ipe_3298_fov={"numberOfVisits":1,"sessionId":"bc4d4cf6-2efc-5486-3148-79785f01f89f","expiry":"2019-04-27T21:53:51.275Z","lastVisit":"2019-03-28T21:53:51.275Z"}; ipe_s=bc4d4cf6-2efc-5486-3148-79785f01f89f; velarovisitor=7IlQdcLXtkupacQBpFOc7Q; _fbc=fb.1.1553207950324.IwAR0-7CBghSi7ihrLUNwrwtcEazLczFJXtFtiC2uyRajhzQMCbOSdYK1NRpQ; _fbp=fb.1.1553207950327.559128579 </p>
<p>HTTP_UFSHIB_EMPLOYEENUMBER </p>
<p>HTTP_UFSHIB_UFAD_GROUPS </p>
<p>REDIRECT_UFShib_sn Gavrilos </p>
<p>HTTP_UFSHIB_PHYSICALDELIVERYOFFICENAME </p>
<p>HTTP_UFSHIB_UFLASSURANCE </p>
<p>DB2INSTANCE db2axs </p>
<p>ORIG_SCRIPT_FILENAME /h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/php.cgi </p>
<p>ORIG_PATH_INFO /UFO/printenv.php </p>
<p>ORIG_PATH_TRANSLATED /h/cnswww-www.advising/www.advising.ufl.edu/htdocs/UFO/printenv.php </p>
<p>ORIG_SCRIPT_NAME /cgi-bin/php.cgi </p>
<p>PHP_SELF /UFO/printenv.php </p>
<p>REQUEST_TIME 1553886462 </p>
<p>HTTP_UFSHIB_ORGUNIT_DN : </p>
<p>REDIRECT_UFShib_postalAddress : $$$</p>
<p>HTTP_UFSHIB_UFADGROUPSDN : </p>
<p>SERVER_SIGNATURE : </p>
<p>HTTP_UFSHIB_BUSINESSCATEGORY : </p>
<p>HTTP_UFSHIB_MEMBEROF : </p>
<p>HTTP_UFSHIB_EPPN : agavrios@ufl.edu</p>
<p>HTTP_UFSHIB_SHIB_ASSERTION_COUNT : </p>
<p>REDIRECT_UFShib_mail : agavrilos@ufl.edu</p>
<p>SSL_TLS_SNI : www.advising.ufl.edu</p>
<p>HTTP_UFSHIB_CN : Gavrilos,Anastasia Yvonne</p>
<p>REDIRECT_UFShib_Shib_Identity_Provider : https://login.ufl.edu/idp/shibboleth</p>
<p>HTTP_UFSHIB_MIDDLENAME : Yvonne</p>
<p>HTTP_UFSHIB_UFAD_STUDENTCOURSES : </p>
<p>UNIQUE_ID : XJ5s-goT8DkAABsXcSEAAAB-</p>
<p>HTTP_UFSHIB_SHIB_AUTHNCONTEXT_CLASS : urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport</p>
<p>REDIRECT_UFShib_departmentNumber : ST020000</p>
<p>REDIRECT_UFShib_Shib_Handler : https://www.advising.ufl.edu/Shibboleth.sso</p>
<p>HTTP_UFSHIB_FACSIMILETELEPHONENUMBER : </p>
<p>HTTP_UFSHIB_EDUPERSONCOURSEMEMBER : </p>
<p>HTTP_UFSHIB_ST : </p>
<p>HTTP_USER_AGENT : Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) App! leWebKit/ 605.1.15 (KHTML, like Gecko) Version/12.0.2 Safari/605.1.15</p>
<p>REDIRECT_REMOTE_USER : 59907069</p>
<p>SERVER_PORT : 443</p>
<p>HTTP_ORIGIN : https://login.ufl.edu</p>
<p>HTTP_HOST : www.advising.ufl.edu</p>
<p>HTTP_UFSHIB_CARLICENSE : </p>
<p>HTTP_UFSHIB_UF_AFFILIATIONS : </p>
<p>HTTP_UFSHIB_SHIB_AUTHENTICATION_INSTANT : 2019-03-29T19:07:42.007Z</p>
<p>REDIRECT_UFShib_cn : Gavrilos,Anastasia Yvonne</p>
<p>HTTP_UFSHIB_TARGETED_ID : </p>
<p>HTTP_UFSHIB_UNSCOPED_AFFILIATION : </p>
<p>REDIRECT_UFShib_middleName : Yvonne</p>
<p>HTTP_UFSHIB_DEPARTMENTNUMBER : ST020000</p>
<p>REDIRECT_UFShib_Shib_AuthnContext_Class : urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport</p>
<p>HTTP_UFSHIB_PRIMARY_ORGUNIT_DN : </p>
<p>REDIRECT_HANDLER : application/x-httpd-php</p>
<p>REDIRECT_UFShib_Shib_Session_Index : _439eb1b075e6c15bc3302e90ccb2b73d</p>
<p>DOCUMENT_ROOT : /h/cnswww-www.advising/www.advising.ufl.edu/htdocs</p>
<p>HTTP_UFSHIB_POSTOFFICEBOX : </p>
<p>REDIRECT_UFShib_businessName : Gavrilos,Anastasia Yvonne</p>
<p>SCRIPT_FILENAME : /h/cnswww-ww! w.advisin g/www.advising.ufl.edu/htdocs/UFO/printenv.p! hp</p>
<p>HTTP_UFSHIB_UFID : 59907069</p>
<p>HTTPS : on</p>
<p>REQUEST_URI : /UFO/printenv.php</p>
<p>HTTP_UFSHIB_STREET : </p>
<p>HTTP_UFSHIB_UFLOA : </p>
<p>HTTP_UFSHIB_SHIB_AUTHNCONTEXT_DECL : </p>
<p>HTTP_UFSHIB_SHIB_COOKIE_NAME : </p>
<p>SCRIPT_NAME : /UFO/printenv.php</p>
<p>HTTP_REMOTE_USER : 59907069</p>
<p>HTTP_UFSHIB_GIVENNAME : Anastasia</p>
<p>HTTP_UFSHIB_SN : Gavrilos</p>
<p>HTTP_UFSHIB_PRIMARY_AFFILIATION : </p>
<p>HTTP_UFSHIB_L : </p>
<p>HTTP_UFSHIB_GLID : agavrios</p>
<p>HTTP_UFSHIB_POSTALADDRESS : $$$</p>
<p>REDIRECT_UFShib_UFAD_PSRoles : UF_EL_NONEMPLOYEE_SELF_SERVICE$UF_EMS_ALL_STUDENTS$UF_N_EM_IMAG_SELF_SERVICE$UF_N_OUR_IMAG_SELF_SERVICE$UF_N_SFA_IMAG_SELF_SERVICE$UF_N_UB_IMAG_SELF_SERVICE$UF_PA_AuthUsers$UF_PA_Student$UF_SF_STUDENT_SS$UF_SS_USER</p>
<p>HTTP_UFSHIB_TITLE : </p>
<p>HTTP_UFSHIB_NICKNAME : </p>
<p>HTTP_UFSHIB_EDUPERSONCOURSEOFFERING : </p>
<p>HTTP_UFSHIB_INITIALS : </p>
<p>HTTP_UFSHIB_BUSINESSNAME : Gavrilos,Anastasia Yvonne</p>
<p>HTTP_UFSHIB_ORG_DN : </p>
<p>HTTP_CONNECTION : keep-alive</p>
<p>REMOTE_PORT : 55851</p>
<p>REDIRECT_UFShib_! givenName : Anastasia</p>
<p>PATH : /usr/local/bin:/usr/bin:/bin</p>
<p>HTTP_UFSHIB_SHIB_APPLICATION_ID : urn:edu:ufl:prod:00137</p>
<p>HTTP_UFSHIB_MANAGER : </p>
<p>HTTP_UFSHIB_EDUPERSONASSURANCE : </p>
<p>PWD : /h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin</p>
<p>SERVER_ADMIN : helpdesk@ufl.edu</p>
<p>HTTP_UFSHIB_AFFILIATION : </p>
<p>HTTP_UFSHIB_SHIB_SESSION_INACTIVITY : 1553890062</p>
<p>HTTP_UFSHIB_SHIB_SESSION_EXPIRES : 1553915262</p>
<p>HTTP_UFSHIB_NETMANAGED_BY : ST010000</p>
<p>HTTP_UFSHIB_DESCRIPTION : </p>
<p>REDIRECT_STATUS : 200</p>
<p>REDIRECT_UFShib_Shib_Authentication_Instant : 2019-03-29T19:07:42.007Z</p>
<p>REDIRECT_UFShib_Shib_Application_ID : urn:edu:ufl:prod:00137</p>
<p>HTTP_UFSHIB_SEEALSO : </p>
<p>HTTP_UFSHIB_SHIB_AUTHENTICATION_METHOD : urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport</p>
<p>HTTP_ACCEPT_LANGUAGE : en-us</p>
<p>HTTP_UFSHIB_OU : </p>
<p>REDIRECT_UFShib_Shib_Session_Inactivity : 1553890062</p>
<p>REDIRECT_UFShib_Shib_Session_Expires : 1553915262</p>
<p>HTTP_UFSHIB_EDUPERSON_AFFILIATIONS : </p>
<p>HTTP_REFERE! R : https ://login.ufl.edu/idp/profile/SAML2/Redirect/SSO?execu! tion=e1s1</p>
<p>HTTP_ACCEPT : text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</p>
<p>REMOTE_ADDR : 67.132.70.46</p>
<p>HTTP_UFSHIB_TELEPHONENUMBER : </p>
<p>REDIRECT_UFShib_eppn : agavrios@ufl.edu</p>
<p>SHLVL : 0</p>
<p>SERVER_NAME : www.advising.ufl.edu</p>
<p>HTTP_UFSHIB_PREFERREDLANGUAGE : </p>
<p>HTTP_UFSHIB_ENTITLEMENT : </p>
<p>HTTP_UFSHIB_SHIB_IDENTITY_PROVIDER : https://login.ufl.edu/idp/shibboleth</p>
<p>HTTP_UFSHIB_POSTALCODE : </p>
<p>REDIRECT_UFShib_glid : agavrios</p>
<p>HTTP_UFSHIB_DISPLAYNAME : </p>
<p>HTTP_UFSHIB_UFAD_PSROLES : UF_EL_NONEMPLOYEE_SELF_SERVICE$UF_EMS_ALL_STUDENTS$UF_N_EM_IMAG_SELF_SERVICE$UF_N_OUR_IMAG_SELF_SERVICE$UF_N_SFA_IMAG_SELF_SERVICE$UF_N_UB_IMAG_SELF_SERVICE$UF_PA_AuthUsers$UF_PA_Student$UF_SF_STUDENT_SS$UF_SS_USER</p>
<p>HTTP_UFSHIB_SHIB_HANDLER : https://www.advising.ufl.edu/Shibboleth.sso</p>
<p>HTTP_UFSHIB_SHIB_SESSION_ID : _baac0ba40ea92a8838eff3e96c959317</p>
<p>REDIRECT_UFShib_Shib_Authentication_Method : urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransportHTTP_UFS HIB_EMPLOYEETYPE : </p>
<p>HTTP_UFSHIB_PERSISTENT_ID : https://login.ufl.edu/idp/shibboleth!urn:edu:ufl:prod:00137!rrZQMCm2XmMIxuEtD1rEVoAtw08=</p>
<p>SERVER_SOFTWARE : Apache</p>
<p>QUERY_STRING : </p>
<p>SERVER_ADDR : 128.227.19.170</p>
<p>GATEWAY_INTERFACE : CGI/1.1</p>
<p>SERVER_PROTOCOL : HTTP/1.1</p>
<p>REDIRECT_UFShib_Shib_Session_ID : _baac0ba40ea92a8838eff3e96c959317</p>
<p>HTTP_UFSHIB_SHIB_SESSION_INDEX : _439eb1b075e6c15bc3302e90ccb2b73d</p>
<p>HTTP_ACCEPT_ENCODING : br, gzip, deflate</p>
<p>REDIRECT_URL : /UFO/printenv.php</p>
<p>REDIRECT_UFShib_persistent_id : https://login.ufl.edu/idp/shibboleth!urn:edu:ufl:prod:00137!rrZQMCm2XmMIxuEtD1rEVoAtw08=</p>
<p>HTTP_UFSHIB_DIRECTORYNAME : </p>
<p>REDIRECT_UFShib_ufid : 59907069</p>
<p>REDIRECT_UFShib_netmanaged_by : ST010000</p>
<p>HTTP_UFSHIB_MAIL : agavrilos@ufl.edu</p>
<p>REQUEST_METHOD : GET</p>
HTTP_COOKIE : _shibsession_75726e3a6564753a75666c3a70726f643a303031333775726e3a6564753a75666c3a70726f643a3030313337=_baac0ba40ea92a8838eff3e96c959317; __utma=16479846.1076581087.1535035! 314.15538 10028.1553836611.10; __utmc=16479846; __utmz=16479846! .1553836611.10.6.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); _ga=GA1.2.1076581087.1535035314; _gid=GA1.2.180972980.1553814428; _gcl_au=1.1.307434668.1553835546; ipe.3298.pageViewedCount=1; <p>ipe_3298_fov={"numberOfVisits":1,"sessionId":"bc4d4cf6-2efc-5486-3148-79785f01f89f","expiry":"2019-04-27T21:53:51.275Z","lastVisit":"2019-03-28T21:53:51.275Z"}; ipe_s=bc4d4cf6-2efc-5486-3148-79785f01f89f; velarovisitor=7IlQdcLXtkupacQBpFOc7Q; _fbc=fb.1.1553207950324.IwAR0-7CBghSi7ihrLUNwrwtcEazLczFJXtFtiC2uyRajhzQMCbOSdYK1NRpQ; _fbp=fb.1.1553207950327.559128579</p>
<p>HTTP_UFSHIB_EMPLOYEENUMBER : </p>
<p>HTTP_UFSHIB_UFAD_GROUPS : </p>
<p>REDIRECT_UFShib_sn : Gavrilos</p>
<p>HTTP_UFSHIB_PHYSICALDELIVERYOFFICENAME : </p>
<p>HTTP_UFSHIB_UFLASSURANCE : </p>
<p>DB2INSTANCE : db2axs</p>
<p>ORIG_SCRIPT_FILENAME : /h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/php.cgi</p>
<p>ORIG_PATH_INFO : /UFO/printenv.php</p>
<p>ORIG_PATH_TRANSLATED : /h/cnswww-www.advising/www.advising.ufl.edu/htdocs/UFO/printen! v.php</p>
<p>ORIG_SCRIPT_NAME : /cgi-bin/php.cgi</p>
<p>PHP_SELF : /UFO/printenv.php</p>
<p>REQUEST_TIME : 1553886462</p>
<p>HTTP_UFSHIB_ORGUNIT_DN </p>
<p>REDIRECT_UFShib_postalAddress $$$ </p>
<p>HTTP_UFSHIB_UFADGROUPSDN </p>
<p>SERVER_SIGNATURE </p>
<p>HTTP_UFSHIB_BUSINESSCATEGORY </p>
<p>HTTP_UFSHIB_MEMBEROF </p>
<p>HTTP_UFSHIB_EPPN agavrios@ufl.edu </p>
<p>HTTP_UFSHIB_SHIB_ASSERTION_COUNT </p>
<p>REDIRECT_UFShib_mail agavrilos@ufl.edu </p>
<p>SSL_TLS_SNI www.advising.ufl.edu </p>
<p>HTTP_UFSHIB_CN Gavrilos,Anastasia Yvonne </p>
<p>REDIRECT_UFShib_Shib_Identity_Provider https://login.ufl.edu/idp/shibboleth </p>
<p>HTTP_UFSHIB_MIDDLENAME Yvonne </p>
<p>HTTP_UFSHIB_UFAD_STUDENTCOURSES </p>
<p>UNIQUE_ID XJ5s-goT8DkAABsXcSEAAAB- </p>
<p>HTTP_UFSHIB_SHIB_AUTHNCONTEXT_CLASS urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport </p>
<p>REDIRECT_UFShib_departmentNumber ST020000 </p>
<p>REDIRECT_UFShib_Shib_Handler https://www.advising.ufl.edu/Shibboleth.sso </p>
<p>HTTP_UFSHIB_FACSIMILETELEPHONENUMBER </p>
<p>HTTP_UFSHIB_EDUPERSONCOURSEMEMBER </p>
<p>HTTP_UFSHIB_ST </p>
<p>HTTP_USER_AGENT Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0.2 Safari/605.1.15 </p>
<p>REDIRECT_REMOTE_USER 59907069 </p>
<p>SERVER_PORT 443 </p>
<p>HTTP_ORIGIN https://login.ufl.edu </p>
<p>HTTP_HOST www.advising.ufl.edu </p>
<p>HTTP_UFSHIB_CARLICENSE </p>
<p>HTTP_UFSHIB_UF_AFFILIATIONS </p>
<p>HTTP_UFSHIB_SHIB_AUTHENTICATION_INSTANT 2019-03-29T19:07:42.007Z </p>
<p>REDIRECT_UFShib_cn Gavrilos,Anastasia Yvonne </p>
<p>HTTP_UFSHIB_TARGETED_ID </p>
<p>HTTP_UFSHIB_UNSCOPED_AFFILIATION </p>
<p>REDIRECT_UFShib_middleName Yvonne </p>
<p>HTTP_UFSHIB_DEPARTMENTNUMBER ST020000 </p>
<p>REDIRECT_UFShib_Shib_AuthnContext_Class urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport </p>
<p>HTTP_UFSHIB_PRIMARY_ORGUNIT_DN </p>
<p>REDIRECT_HANDLER application/x-httpd-php </p>
<p>REDIRECT_UFShib_Shib_Session_Index _439eb1b075e6c15bc3302e90ccb2b73d </p>
<p>DOCUMENT_ROOT /h/cnswww-www.advising/www.advising.ufl.edu/htdocs </p>
<p>HTTP_UFSHIB_POSTOFFICEBOX </p>
<p>REDIRECT_UFShib_businessName Gavrilos,Anastasia Yvonne </p>
<p>SCRIPT_FILENAME /h/cnswww-www.advising/www.advising.ufl.edu/htdocs/UFO/printenv.php </p>
<p>HTTP_UFSHIB_UFID 59907069 </p>
<p>HTTPS on </p>
<p>REQUEST_URI /UFO/printenv.php </p>
<p>HTTP_UFSHIB_STREET </p>
<p>HTTP_UFSHIB_UFLOA </p>
<p>HTTP_UFSHIB_SHIB_AUTHNCONTEXT_DECL </p>
<p>HTTP_UFSHIB_SHIB_COOKIE_NAME </p>
<p>SCRIPT_NAME /UFO/printenv.php </p>
<p>HTTP_REMOTE_USER 59907069 </p>
<p>HTTP_UFSHIB_GIVENNAME Anastasia </p>
<p>HTTP_UFSHIB_SN Gavrilos </p>
<p>HTTP_UFSHIB_PRIMARY_AFFILIATION </p>
<p>HTTP_UFSHIB_L </p>
<p>HTTP_UFSHIB_GLID agavrios </p>
<p>HTTP_UFSHIB_POSTALADDRESS $$$ </p>
<p>REDIRECT_UFShib_UFAD_PSRoles UF_EL_NONEMPLOYEE_SELF_SERVICE$UF_EMS_ALL_STUDENTS$UF_N_EM_IMAG_SELF_SERVICE$UF_N_OUR_IMAG_SELF_SERVICE$UF_N_SFA_IMAG_SELF_SERVICE$UF_N_UB_IMAG_SELF_SERVICE$UF_PA_AuthUsers$UF_PA_Student$UF_SF_STUDENT_SS$UF_SS_USER </p>
<p>HTTP_UFSHIB_TITLE </p>
<p>HTTP_UFSHIB_NICKNAME </p>
<p>HTTP_UFSHIB_EDUPERSONCOURSEOFFERING </p>
<p>HTTP_UFSHIB_INITIALS </p>
<p>HTTP_UFSHIB_BUSINESSNAME Gavrilos,Anastasia Yvonne </p>
<p>HTTP_UFSHIB_ORG_DN </p>
<p>HTTP_CONNECTION keep-alive </p>
<p>REMOTE_PORT 55851 </p>
<p>REDIRECT_UFShib_givenName Anastasia </p>
<p>PATH /usr/local/bin:/usr/bin:/bin </p>
<p>HTTP_UFSHIB_SHIB_APPLICATION_ID urn:edu:ufl:prod:00137 </p>
<p>HTTP_UFSHIB_MANAGER </p>
<p>HTTP_UFSHIB_EDUPERSONASSURANCE </p>
<p>PWD /h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin </p>
<p>SERVER_ADMIN helpdesk@ufl.edu </p>
<p>HTTP_UFSHIB_AFFILIATION </p>
<p>HTTP_UFSHIB_SHIB_SESSION_INACTIVITY 1553890062 </p>
<p>HTTP_UFSHIB_SHIB_SESSION_EXPIRES 1553915262 </p>
<p>HTTP_UFSHIB_NETMANAGED_BY ST010000 </p>
<p>HTTP_UFSHIB_DESCRIPTION </p>
<p>REDIRECT_STATUS 200 </p>
<p>REDIRECT_UFShib_Shib_Authentication_Instant 2019-03-29T19:07:42.007Z </p>
<p>REDIRECT_UFShib_Shib_Application_ID urn:edu:ufl:prod:00137 </p>
<p>HTTP_UFSHIB_SEEALSO </p>
<p>HTTP_UFSHIB_SHIB_AUTHENTICATION_METHOD urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport </p>
<p>HTTP_ACCEPT_LANGUAGE en-us </p>
<p>HTTP_UFSHIB_OU </p>
<p>REDIRECT_UFShib_Shib_Session_Inactivity 1553890062 </p>
<p>REDIRECT_UFShib_Shib_Session_Expires 1553915262 </p>
<p>HTTP_UFSHIB_EDUPERSON_AFFILIATIONS </p>
<p>HTTP_REFERER https://login.ufl.edu/idp/profile/SAML2/Redirect/SSO?execution=e1s1 </p>
<p>HTTP_ACCEPT text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8 </p>
<p>REMOTE_ADDR 67.132.70.46 </p>
<p>HTTP_UFSHIB_TELEPHONENUMBER </p>
<p>REDIRECT_UFShib_eppn agavrios@ufl.edu </p>
<p>SHLVL 0 </p>
<p>SERVER_NAME www.advising.ufl.edu </p>
<p>HTTP_UFSHIB_PREFERREDLANGUAGE </p>
<p>HTTP_UFSHIB_ENTITLEMENT </p>
<p>HTTP_UFSHIB_SHIB_IDENTITY_PROVIDER https://login.ufl.edu/idp/shibboleth </p>
<p>HTTP_UFSHIB_POSTALCODE </p>
<p>REDIRECT_UFShib_glid agavrios </p>
<p>HTTP_UFSHIB_DISPLAYNAME </p>
<p>HTTP_UFSHIB_UFAD_PSROLES UF_EL_NONEMPLOYEE_SELF_SERVICE$UF_EMS_ALL_STUDENTS$UF_N_EM_IMAG_SELF_SERVICE$UF_N_OUR_IMAG_SELF_SERVICE$UF_N_SFA_IMAG_SELF_SERVICE$UF_N_UB_IMAG_SELF_SERVICE$UF_PA_AuthUsers$UF_PA_Student$UF_SF_STUDENT_SS$UF_SS_USER </p>
<p>HTTP_UFSHIB_SHIB_HANDLER https://www.advising.ufl.edu/Shibboleth.sso </p>
<p>HTTP_UFSHIB_SHIB_SESSION_ID _baac0ba40ea92a8838eff3e96c959317 </p>
<p>REDIRECT_UFShib_Shib_Authentication_Method urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport </p>
<p>HTTP_UFSHIB_EMPLOYEETYPE </p>
<p>HTTP_UFSHIB_PERSISTENT_ID https://login.ufl.edu/idp/shibboleth!urn:edu:ufl:prod:00137!rrZQMCm2XmMIxuEtD1rEVoAtw08= </p>
<p>SERVER_SOFTWARE Apache </p>
<p>QUERY_STRING </p>
<p>SERVER_ADDR 128.227.19.170 </p>
<p>GATEWAY_INTERFACE CGI/1.1 </p>
<p>SERVER_PROTOCOL HTTP/1.1 </p>
<p>REDIRECT_UFShib_Shib_Session_ID _baac0ba40ea92a8838eff3e96c959317 </p>
<p>HTTP_UFSHIB_SHIB_SESSION_INDEX _439eb1b075e6c15bc3302e90ccb2b73d </p>
<p>HTTP_ACCEPT_ENCODING br, gzip, deflate </p>
<p>REDIRECT_URL /UFO/printenv.php </p>
<p>REDIRECT_UFShib_persistent_id https://login.ufl.edu/idp/shibboleth!urn:edu:ufl:prod:00137!rrZQMCm2XmMIxuEtD1rEVoAtw08= </p>
<p>HTTP_UFSHIB_DIRECTORYNAME </p>
<p>REDIRECT_UFShib_ufid 59907069 </p>
<p>REDIRECT_UFShib_netmanaged_by ST010000 </p>
<p>HTTP_UFSHIB_MAIL agavrilos@ufl.edu </p>
<p>REQUEST_METHOD GET </p>
HTTP_COOKIE _shibsession_75726e3a6564753a75666c3a70726f643a303031333775726e3a6564753a75666c3a70726f643a3030313337=_baac0ba40ea92a8838eff3e96c959317; __utma=16479846.1076581087.1535035314.1553810028.1553836611.10; __utmc=16479846; __utmz=16479846.1553836611.10.6.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); _ga=GA1.2.1076581087.1535035314; _gid=GA1.2.180972980.1553814428; _gcl_au=1.1.307434668.1553835546; ipe.3298.pageViewedCount=1; <p>ipe_3298_fov={"numberOfVisits":1,"sessionId":"bc4d4cf6-2efc-5486-3148-79785f01f89f","expiry":"2019-04-27T21:53:51.275Z","lastVisit":"2019-03-28T21:53:51.275Z"}; ipe_s=bc4d4cf6-2efc-5486-3148-79785f01f89f; velarovisitor=7IlQdcLXtkupacQBpFOc7Q; _fbc=fb.1.1553207950324.IwAR0-7CBghSi7ihrLUNwrwtcEazLczFJXtFtiC2uyRajhzQMCbOSdYK1NRpQ; _fbp=fb.1.1553207950327.559128579 </p>
<p>HTTP_UFSHIB_EMPLOYEENUMBER </p>
<p>HTTP_UFSHIB_UFAD_GROUPS </p>
<p>REDIRECT_UFShib_sn Gavrilos </p>
<p>HTTP_UFSHIB_PHYSICALDELIVERYOFFICENAME </p>
<p>HTTP_UFSHIB_UFLASSURANCE </p>
<p>DB2INSTANCE db2axs </p>
<p>ORIG_SCRIPT_FILENAME /h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/php.cgi </p>
<p>ORIG_PATH_INFO /UFO/printenv.php </p>
<p>ORIG_PATH_TRANSLATED /h/cnswww-www.advising/www.advising.ufl.edu/htdocs/UFO/printenv.php </p>
<p>ORIG_SCRIPT_NAME /cgi-bin/php.cgi </p>
<p>PHP_SELF /UFO/printenv.php </p>
<p>REQUEST_TIME 1553886462 </p>
<p>HTTP_UFSHIB_ORGUNIT_DN : </p>
<p>REDIRECT_UFShib_postalAddress : $$$</p>
<p>HTTP_UFSHIB_UFADGROUPSDN : </p>
<p>SERVER_SIGNATURE : </p>
<p>HTTP_UFSHIB_BUSINESSCATEGORY : </p>
<p>HTTP_UFSHIB_MEMBEROF : </p>
<p>HTTP_UFSHIB_EPPN : agavrios@ufl.edu</p>
<p>HTTP_UFSHIB_SHIB_ASSERTION_COUNT : </p>
<p>REDIRECT_UFShib_mail : agavrilos@ufl.edu</p>
<p>SSL_TLS_SNI : www.advising.ufl.edu</p>
<p>HTTP_UFSHIB_CN : Gavrilos,Anastasia Yvonne</p>
<p>REDIRECT_UFShib_Shib_Identity_Provider : https://login.ufl.edu/idp/shibboleth</p>
<p>HTTP_UFSHIB_MIDDLENAME : Yvonne</p>
<p>HTTP_UFSHIB_UFAD_STUDENTCOURSES : </p>
<p>UNIQUE_ID : XJ5s-goT8DkAABsXcSEAAAB-</p>
<p>HTTP_UFSHIB_SHIB_AUTHNCONTEXT_CLASS : urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport</p>
<p>REDIRECT_UFShib_departmentNumber : ST020000</p>
<p>REDIRECT_UFShib_Shib_Handler : https://www.advising.ufl.edu/Shibboleth.sso</p>
<p>HTTP_UFSHIB_FACSIMILETELEPHONENUMBER : </p>
<p>HTTP_UFSHIB_EDUPERSONCOURSEMEMBER : </p>
<p>HTTP_UFSHIB_ST : </p>
<p>HTTP_USER_AGENT : Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) App! leWebKit/ 605.1.15 (KHTML, like Gecko) Version/12.0.2 Safari/605.1.15</p>
<p>REDIRECT_REMOTE_USER : 59907069</p>
<p>SERVER_PORT : 443</p>
<p>HTTP_ORIGIN : https://login.ufl.edu</p>
<p>HTTP_HOST : www.advising.ufl.edu</p>
<p>HTTP_UFSHIB_CARLICENSE : </p>
<p>HTTP_UFSHIB_UF_AFFILIATIONS : </p>
<p>HTTP_UFSHIB_SHIB_AUTHENTICATION_INSTANT : 2019-03-29T19:07:42.007Z</p>
<p>REDIRECT_UFShib_cn : Gavrilos,Anastasia Yvonne</p>
<p>HTTP_UFSHIB_TARGETED_ID : </p>
<p>HTTP_UFSHIB_UNSCOPED_AFFILIATION : </p>
<p>REDIRECT_UFShib_middleName : Yvonne</p>
<p>HTTP_UFSHIB_DEPARTMENTNUMBER : ST020000</p>
<p>REDIRECT_UFShib_Shib_AuthnContext_Class : urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport</p>
<p>HTTP_UFSHIB_PRIMARY_ORGUNIT_DN : </p>
<p>REDIRECT_HANDLER : application/x-httpd-php</p>
<p>REDIRECT_UFShib_Shib_Session_Index : _439eb1b075e6c15bc3302e90ccb2b73d</p>
<p>DOCUMENT_ROOT : /h/cnswww-www.advising/www.advising.ufl.edu/htdocs</p>
<p>HTTP_UFSHIB_POSTOFFICEBOX : </p>
<p>REDIRECT_UFShib_businessName : Gavrilos,Anastasia Yvonne</p>
<p>SCRIPT_FILENAME : /h/cnswww-ww! w.advisin g/www.advising.ufl.edu/htdocs/UFO/printenv.p! hp</p>
<p>HTTP_UFSHIB_UFID : 59907069</p>
<p>HTTPS : on</p>
<p>REQUEST_URI : /UFO/printenv.php</p>
<p>HTTP_UFSHIB_STREET : </p>
<p>HTTP_UFSHIB_UFLOA : </p>
<p>HTTP_UFSHIB_SHIB_AUTHNCONTEXT_DECL : </p>
<p>HTTP_UFSHIB_SHIB_COOKIE_NAME : </p>
<p>SCRIPT_NAME : /UFO/printenv.php</p>
<p>HTTP_REMOTE_USER : 59907069</p>
<p>HTTP_UFSHIB_GIVENNAME : Anastasia</p>
<p>HTTP_UFSHIB_SN : Gavrilos</p>
<p>HTTP_UFSHIB_PRIMARY_AFFILIATION : </p>
<p>HTTP_UFSHIB_L : </p>
<p>HTTP_UFSHIB_GLID : agavrios</p>
<p>HTTP_UFSHIB_POSTALADDRESS : $$$</p>
<p>REDIRECT_UFShib_UFAD_PSRoles : UF_EL_NONEMPLOYEE_SELF_SERVICE$UF_EMS_ALL_STUDENTS$UF_N_EM_IMAG_SELF_SERVICE$UF_N_OUR_IMAG_SELF_SERVICE$UF_N_SFA_IMAG_SELF_SERVICE$UF_N_UB_IMAG_SELF_SERVICE$UF_PA_AuthUsers$UF_PA_Student$UF_SF_STUDENT_SS$UF_SS_USER</p>
<p>HTTP_UFSHIB_TITLE : </p>
<p>HTTP_UFSHIB_NICKNAME : </p>
<p>HTTP_UFSHIB_EDUPERSONCOURSEOFFERING : </p>
<p>HTTP_UFSHIB_INITIALS : </p>
<p>HTTP_UFSHIB_BUSINESSNAME : Gavrilos,Anastasia Yvonne</p>
<p>HTTP_UFSHIB_ORG_DN : </p>
<p>HTTP_CONNECTION : keep-alive</p>
<p>REMOTE_PORT : 55851</p>
<p>REDIRECT_UFShib_! givenName : Anastasia</p>
<p>PATH : /usr/local/bin:/usr/bin:/bin</p>
<p>HTTP_UFSHIB_SHIB_APPLICATION_ID : urn:edu:ufl:prod:00137</p>
<p>HTTP_UFSHIB_MANAGER : </p>
<p>HTTP_UFSHIB_EDUPERSONASSURANCE : </p>
<p>PWD : /h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin</p>
<p>SERVER_ADMIN : helpdesk@ufl.edu</p>
<p>HTTP_UFSHIB_AFFILIATION : </p>
<p>HTTP_UFSHIB_SHIB_SESSION_INACTIVITY : 1553890062</p>
<p>HTTP_UFSHIB_SHIB_SESSION_EXPIRES : 1553915262</p>
<p>HTTP_UFSHIB_NETMANAGED_BY : ST010000</p>
<p>HTTP_UFSHIB_DESCRIPTION : </p>
<p>REDIRECT_STATUS : 200</p>
<p>REDIRECT_UFShib_Shib_Authentication_Instant : 2019-03-29T19:07:42.007Z</p>
<p>REDIRECT_UFShib_Shib_Application_ID : urn:edu:ufl:prod:00137</p>
<p>HTTP_UFSHIB_SEEALSO : </p>
<p>HTTP_UFSHIB_SHIB_AUTHENTICATION_METHOD : urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport</p>
<p>HTTP_ACCEPT_LANGUAGE : en-us</p>
<p>HTTP_UFSHIB_OU : </p>
<p>REDIRECT_UFShib_Shib_Session_Inactivity : 1553890062</p>
<p>REDIRECT_UFShib_Shib_Session_Expires : 1553915262</p>
<p>HTTP_UFSHIB_EDUPERSON_AFFILIATIONS : </p>
<p>HTTP_REFERE! R : https ://login.ufl.edu/idp/profile/SAML2/Redirect/SSO?execu! tion=e1s1</p>
<p>HTTP_ACCEPT : text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</p>
<p>REMOTE_ADDR : 67.132.70.46</p>
<p>HTTP_UFSHIB_TELEPHONENUMBER : </p>
<p>REDIRECT_UFShib_eppn : agavrios@ufl.edu</p>
<p>SHLVL : 0</p>
<p>SERVER_NAME : www.advising.ufl.edu</p>
<p>HTTP_UFSHIB_PREFERREDLANGUAGE : </p>
<p>HTTP_UFSHIB_ENTITLEMENT : </p>
<p>HTTP_UFSHIB_SHIB_IDENTITY_PROVIDER : https://login.ufl.edu/idp/shibboleth</p>
<p>HTTP_UFSHIB_POSTALCODE : </p>
<p>REDIRECT_UFShib_glid : agavrios</p>
<p>HTTP_UFSHIB_DISPLAYNAME : </p>
<p>HTTP_UFSHIB_UFAD_PSROLES : UF_EL_NONEMPLOYEE_SELF_SERVICE$UF_EMS_ALL_STUDENTS$UF_N_EM_IMAG_SELF_SERVICE$UF_N_OUR_IMAG_SELF_SERVICE$UF_N_SFA_IMAG_SELF_SERVICE$UF_N_UB_IMAG_SELF_SERVICE$UF_PA_AuthUsers$UF_PA_Student$UF_SF_STUDENT_SS$UF_SS_USER</p>
<p>HTTP_UFSHIB_SHIB_HANDLER : https://www.advising.ufl.edu/Shibboleth.sso</p>
<p>HTTP_UFSHIB_SHIB_SESSION_ID : _baac0ba40ea92a8838eff3e96c959317</p>
<p>REDIRECT_UFShib_Shib_Authentication_Method : urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransportHTTP_UFS HIB_EMPLOYEETYPE : </p>
<p>HTTP_UFSHIB_PERSISTENT_ID : https://login.ufl.edu/idp/shibboleth!urn:edu:ufl:prod:00137!rrZQMCm2XmMIxuEtD1rEVoAtw08=</p>
<p>SERVER_SOFTWARE : Apache</p>
<p>QUERY_STRING : </p>
<p>SERVER_ADDR : 128.227.19.170</p>
<p>GATEWAY_INTERFACE : CGI/1.1</p>
<p>SERVER_PROTOCOL : HTTP/1.1</p>
<p>REDIRECT_UFShib_Shib_Session_ID : _baac0ba40ea92a8838eff3e96c959317</p>
<p>HTTP_UFSHIB_SHIB_SESSION_INDEX : _439eb1b075e6c15bc3302e90ccb2b73d</p>
<p>HTTP_ACCEPT_ENCODING : br, gzip, deflate</p>
<p>REDIRECT_URL : /UFO/printenv.php</p>
<p>REDIRECT_UFShib_persistent_id : https://login.ufl.edu/idp/shibboleth!urn:edu:ufl:prod:00137!rrZQMCm2XmMIxuEtD1rEVoAtw08=</p>
<p>HTTP_UFSHIB_DIRECTORYNAME : </p>
<p>REDIRECT_UFShib_ufid : 59907069</p>
<p>REDIRECT_UFShib_netmanaged_by : ST010000</p>
<p>REQUEST_METHOD : GET</p>
HTTP_COOKIE : _shibsession_75726e3a6564753a75666c3a70726f643a303031333775726e3a6564753a75666c3a70726f643a3030313337=_baac0ba40ea92a8838eff3e96c959317; __utma=16479846.1076581087.1535035! 314.15538 10028.1553836611.10; __utmc=16479846; __utmz=16479846! .1553836611.10.6.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); _ga=GA1.2.1076581087.1535035314; _gid=GA1.2.180972980.1553814428; _gcl_au=1.1.307434668.1553835546; ipe.3298.pageViewedCount=1; <p>ipe_3298_fov={"numberOfVisits":1,"sessionId":"bc4d4cf6-2efc-5486-3148-79785f01f89f","expiry":"2019-04-27T21:53:51.275Z","lastVisit":"2019-03-28T21:53:51.275Z"}; ipe_s=bc4d4cf6-2efc-5486-3148-79785f01f89f; velarovisitor=7IlQdcLXtkupacQBpFOc7Q; _fbc=fb.1.1553207950324.IwAR0-7CBghSi7ihrLUNwrwtcEazLczFJXtFtiC2uyRajhzQMCbOSdYK1NRpQ; _fbp=fb.1.1553207950327.559128579</p>
<p>HTTP_UFSHIB_EMPLOYEENUMBER : </p>
<p>HTTP_UFSHIB_UFAD_GROUPS : </p>
<p>REDIRECT_UFShib_sn : Gavrilos</p>
<p>HTTP_UFSHIB_PHYSICALDELIVERYOFFICENAME : </p>
<p>HTTP_UFSHIB_UFLASSURANCE : </p>
<p>DB2INSTANCE : db2axs</p>
<p>ORIG_SCRIPT_FILENAME : /h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/php.cgi</p>
<p>ORIG_PATH_INFO : /UFO/printenv.php</p>
<p>ORIG_PATH_TRANSLATED : /h/cnswww-www.advising/www.advising.ufl.edu/htdocs/UFO/printen! v.php</p>
<p>ORIG_SCRIPT_NAME : /cgi-bin/php.cgi</p>
<p>PHP_SELF : /UFO/printenv.php</p>
<p>REQUEST_TIME : 1553886462</p>


</body>
</html>
