
        <div id="apply">
            <p>2019 Fall Application Cycle now open!</p>
            <p id="applyLink"><a href="apply.php">APPLY NOW</a></p>
        </div>

        <script>
        $("#apply").click(function() {
          window.location = $(this).find("a").attr("href");
          return false;
        });

        </script>
