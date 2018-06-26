<?php
  $path = "../../";
  $title = "report";
  $stylesheet = $title;
  require_once("{$path}include/header.php");
?>
      <div id="artHeader">
        <div id="paintings">
          <img src="../../image/notes/180600/180608_02.jpg" alt="">
          <img src="../../image/notes/180600/180608_03.jpg" alt="">
        </div>
        <img id="search" src="../../image/notes/180600/180608_08.PNG" alt="">
        <div class="clear"></div>
      </div>

      <img style="display: none;" src="../../image/notes/180600/180608_09.jpg" alt="">

      <ul>
        <li><a href="https://ufbats.atlassian.net/servicedesk/customer/portals" target="_blank">bats</a></li>
      </ul>

      <div id="reportItemsShell">
        <h2>GitHub: "<a href="https://github.com/lonesomepi/aacShare" target="_blank"><span class="orange">aacShare</span></a>"</h2>

        <h3><a href="../../fixlist/query/index.php">Query</a></h3>
        <img class="thumbnail" src="../../image/notes/180600/180618_00.PNG" alt="">
        <ul>
          <li><a href="../../fixlist/query/manual.php">Manual</a></li>
        </ul>

        <h3><a href="../../fixlist/manual/sus.php">Manual SUS</a></h3>
        <img class="thumbnail" src="../../image/notes/180600/180620.PNG" alt="">

        <h3><a href="../../fixlist/waitTime/waittime.php">Lobby Wait</a></h3>
        <img class="thumbnail" src="../../image/notes/180600/180612_02.PNG" alt="">
        <img class="thumbnail" src="../../image/notes/180600/180612_03.PNG" alt="">
        <ul>
          <li><a href="https://www.advising.ufl.edu/" target="_blank">https://www.advising.ufl.edu/</a></li>
          <li><a href="https://github.com/lonesomepi/aacShare/tree/master/waitTime/v2" target="_blank">Git Repo</a></li>
        </ul>

        <h3>Email Contacts</h3>
        <img class="thumbnail" src="../image/email_edited.png">
        <img class="thumbnail" src="../../image/notes/180600/180612_05.PNG" alt="">

        <ul>
          <li><a href="https://www.advising.ufl.edu/advising/staff/" target="_blank">https://www.advising.ufl.edu/advising/staff/</a></li>
        </ul>


      </div><!-- report item shell -->
      <!-- end report -->

      <div id="ticketInputSectionShell">
        <p>backend</p>

        <p class="slugLede">type [department, person] description (#id, time)</p>

        <div class="ticket" id="start">
          <form class="" action="index.html" method="post">
            open: <input required type="time" name="open" value=""><br>
            type: <input type="text" name="type" value=""><br>
            dept: <input type="text" name="dept" value=""><br>
            pers: <input type="text" name="person" value=""><br>
            desc: <input type="text" name="description" value=""><br>
            <input id="submit" type="submit" name="submit" value="submit">
          </form>
        </div>


        <p id="churn"><i>>>> makes an ID >></i></p>


        <p id="idNo"><u><b>identification number</b></u><br>"18061501"</p>

        <div class="clear"></div>

        <table id="openStatusTable">
          <tr>
            <th>open</th>
            <th>type</th>
            <th>dept</th>
            <th>person</th>
            <th>description</th>
            <th>ID</th>
            <th>close</th>
          </tr>

        <tr>
         <td>11:44 a.m.</td>
         <td>media</td>
         <td style="color: #88bc5a;">phpb</td>
         <td>bobbi</td>
         <td>image resize (header image)</td>
         <td>18053001</td>
         <td>
          &nbsp;
         </td>
        </tr>

      </table>


        <div class="ticket" id="close">
          close: <input type="time" name="close" value="">
          <input type="submit" name="" value="submit">
        </div>

        <table id="ticketAssigned">
          <tr>
            <th>open</th>
            <th>type</th>
            <th>dept</th>
            <th>person</th>
            <th>description</th>
            <th>ID</th>
            <th>close</th>
          </tr>

        <tr>
         <td>11:44 a.m.</td>
         <td>media</td>
         <td class="green">PHPB</td>
         <td>bobbi</td>
         <td>image resize (header image)</td>
         <td>18053001</td>
         <td>noon</td>
        </tr>

          <tr>
            <td>2:29 p.m</td>
            <td>edit</td>
            <td class="green">PHPB</td>
            <td>bobbi</td>
            <td>change content: “Alabama Vet Med” => “Auburn University CVM”</td>
            <td>18061301</td>
            <td>2:34 p.m.</td>
          </tr>

          <tr>
           <td>3 p.m.</td>
           <td>meeting</td>
           <td class="blue">UFO</td>
           <td>team</td>
           <td>overview of what's happening</td>
           <td>18060001</td>
           <td>4 p.m.</td>
         </tr>


        </table>

        <div class="dataSection">
          <img class="dataThumb" src="../image/data/180614_10.png" alt="">
        </div>
        <div class="dataSection">
          <img class="dataThumb" src="../image/data/180614_11.png" alt="">
        </div>
      </div><!-- end ticket shell -->

      <div class="clear"></div>


      <footer>
        <p>End.</p>
      </footer>
    </div>
  </body>
</html>
