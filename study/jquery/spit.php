
<script>
$(document).ready(function(){

    $("li.start").siblings().css({"color": "red", "border": "2px solid red"});
    
});
</script>

</head>
<body>

<div style="width:500px;" class="siblings">
  <ul>ul (parent)
    <li>li (the previous sibling of "start")</li>
    <li>li (the previous sibling of "start")</li>
    <li class="start">li (sibling)</li>
    <li>li (the next sibling of "start")</li>
    <li>li (the next sibling of "start")</li>
  </ul>
</div>

<p>In this example, we select all elements that are siblings of the li element with class name "start".</p>
