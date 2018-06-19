<?php
 $path = "../../";
 $title = "query";
 $stylesheet = $title;
 require_once("../../include/header.php");
?>

  <h2 class="headerSlug">query</h2>

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
          <li><a href="#">WAI</a></li>
        </ul>
        <ul id="giveup">
          <li><a href="manual.php" title="contents complete index">Give Up</a></li>
        </ul>
      </div>

      <div class="searchItems" id="trending">
        <h2>Home Slug</h2>
        <div class="homeSlugLink">
          <img src="image/info.png" alt="icon">
          <div class="linkAndDescription">
            <ul>
              <li><a href="#">Advising Questions</a></li>
            </ul>
            <p>A brief description of the link and has max-char-length</p>
          </div>
        </div>
        <div id="ticket" class="homeSlugLink">
          <img src="image/ticket.png" alt="icon">
          <div class="linkAndDescription">
            <ul>
              <li><a href="#">Submit a Ticket</a></li>
            </ul>
            <p>A brief description of the link and has max-char-length</p>
          </div>
        </div><!-- last home slug link -->
        <div class="homeSlugLink">
          <img src="image/itsupport.jpg" alt="icon">
          <div class="linkAndDescription">
            <ul>
              <li><a href="#">IT Support</a></li>
            </ul>
            <p>A brief description of the link and has max-char-length</p>
          </div>
        </div>

      </div>
      <div class="clear"></div>
    </div><!-- end page -->
    <ul>
      <li style="float: left; color: blue; margin-left: 25px; text-decoration: underline; list-style: none;">aac</li>
      <li style="float: left; color: blue; margin-left: 25px; text-decoration: underline; list-style: none;">PHPB</li>
      <li style="float: left; color: blue; margin-left: 25px; text-decoration: underline; list-style: none;">UFO</li>
      <li style="float: left; color: blue; margin-left: 25px; text-decoration: underline; list-style: none;">#</li>
      <li style="float: left; color: blue; margin-left: 25px; text-decoration: underline; list-style: none;">#</li>
      <div class="clear"></div>
    </ul>
    <div class="clear"></div>
  </div>
<?php require_once("../../include/footer.php"); ?>
