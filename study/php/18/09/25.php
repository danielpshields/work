<?php
$a=$_SERVER['REQUEST_URI'];
if (strpos($a, '/pre-health/') !== false) {
print'
    <style>
          #content img.phe{width:190px; height:150px;margin:10px;border-radius:15px;border:1px solid #000066;}
          #content img.buzz{width:190px; height:75px;margin:10px;border-radius:15px;border:1px solid #000066;}
          #sidebar-nav a.phe {padding:0px;}
          #sidebar-nav a.twitter {background: transparent url(images/bg-sprite-transparent.png) -550px -21px no-repeat;}
          </style>
    <a class="phe" href="https://ufl.instructure.com/enroll/DPMWEN" target="_blank"><img class="phe" src="/images/prehealthessentials.png" alt="Enroll in Pre-Health Essentials" title="enroll in Pre-Health Essentials" /></a>
          <a class="phe" href="https://www.advising.ufl.edu/docs/PreHealthActionPlan.docx"><img class="buzz" src="/images/prehealthactionplan.png" alt="Start your Pre-Health Action Plan" title="Start your Pre-Health Action Plan" /></a>
          <a class="phe" href="http://ufprehealthbuzz.blogspot.com/" target="_blank"><img class="buzz" src="/images/prehealthbuzz.png" alt="Pre-Health Buzz: news and announcements" title="Pre-Health Buzz: news and announcements" /></a>

          <a href="https://twitter.com/prehealthatUF" class="twitter" title="AAC on Twitter"><img src="/images/twitter.gif" width="25px"> @prehealthatUF</a>
<a href="http://www.facebook.com/pages/UF-Pre-Health/124748577578719" class="facebook" title="AAC on Facebook"><img src="/images/facebook.gif" width="25px"> UF Pre-Health</a>';
}
?>


from dan
