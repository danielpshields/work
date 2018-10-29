<?php $title = "shell 2"; $stylesheet = $title; include("../include/header.php"); ?>

<h2>proposed solution:</h2>
<p><i>handling redundancy in transitioning CLAS websites to the new theme.</i></p>

<p>websites are transitioning page-by-page.</p>
<p>Requesting CLAS IT provision a <b>separate Virtual Machine</b> to setup a multisite</p>

<ul>
    <li><b>"Test"</b> push all content to sandbox multisite</li>
    <p><i>what does make accessible mean?</i></p>
    <li><b>"Production"</b> push test live</li>
    <li><b>load balancer</b> governor</li>
    <p><i>handle traffic 1. if server crashes (if need test site) and "provide" redundancy</p>
</ul>

handling redundancy and transitioning

Finally, we provision a third virtual machine which will be a load balancer running HAProxy. This load balancer will switch DNS requests if the "production" server goes down and its primary role is to provide redundancy.
This solution will not impact the current CLAS IT web services in any way and is the safest way to migrate department websites.

I look forward to hearing from you.


<?php include("../include/footer.php"); ?>
