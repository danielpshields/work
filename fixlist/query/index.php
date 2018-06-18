<?php
 $path = "../../";
 $title = "query";
 $stylesheet = $title;
 require_once("../../include/header.php");
?>

  <h2 id="headerSlug">Query</h2>

  <div id="artHeader">
    <div id="paintings">
      <a href="" title="1"><img src="image/180608_02.jpg" alt=""></a>
      <a href="" title="2"><img src="image/180608_03.jpg" alt=""></a>
    </div>

    <div id="page">
      <div id="queryHead">
        <div id="searchSection">
          <form class="" action="index.html" method="post">
            <input id="search" type="text" name="search" placeholder="find help and services" value="">
            <input id="submit" type="submit" name="submit" value="submit">
          </form>
        </div>

      </div><!-- end top -->
      <div class="searchItems" id="popular">
        <h2>Specific Slug</h2>
        <ul>
          <li>Item 01</li>
          <li>Item 02</li>
          <li>Item 03</li>
          <li>rondo</li>
          <li>randu</li>
        </ul>
        <ul id="giveup">
          <li><a href="#" title="contents complete index">Give Up</a></li>
        </ul>

      </div>

      <div class="searchItems" id="trending">
        <h2>Home Slug</h2>
        <div class="homeSlugLink">
          <img src="" alt="icon">
          <div class="linkAndDescription">
            <ul>
              <li><a href="#">Advising Questions</a></li>
            </ul>
            <p>A brief description of the link and has max-char-length</p>
          </div>
        </div>
        <div class="homeSlugLink">
          <img src="" alt="icon">
          <div class="linkAndDescription">
            <ul>
              <li><a href="#">IT Support</a></li>
            </ul>
            <p>A brief description of the link and has max-char-length</p>
          </div>
        </div>
        <div class="homeSlugLink">
          <img src="" alt="icon">
          <div class="linkAndDescription">
            <ul>
              <li><a href="#">major <b>section</b> link no. 03</a></li>
            </ul>
            <p>A brief description of the link and has max-char-length</p>
          </div>
        </div><!-- last home slug link -->

      </div>
      <div class="clear"></div>

    </div><!-- end query section -->
    <div class="clear"></div>
  </div>
<?php require_once("../../include/footer.php"); ?>
