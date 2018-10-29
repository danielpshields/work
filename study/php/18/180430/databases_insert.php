<?php
    //1. create a database connection
    $dbhost = "localhost";
    $dbuser = "widget_cms";
    $dbpass = "password";
    $dbname = "widget_corp";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(mysqli_connect_errno()) {
        die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errorno() . ")"
       );
    }

    // 2. perform database query
    $query  = "SELECT * ";
    $query .= "FROM subjects ";
    $query .= "WHERE visible = 1 ";
    $query .= "ORDER BY position ASC";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("database query failed");
    }

?>
<?php $title = "databases"; $stylesheet = $title; include("../include/header.php"); ?>

    <ul>

    <?php
        //3. use returned data (if any)
        while($subject = mysqli_fetch_assoc($result)) {
        //output data from each row
    ?>
        <li><?php echo $subject["menu_name"] ; ?></li>
    <?php } ?>

</ul>


<?php
    mysqli_free_result($result);

    include("../include/footer.php");

    //5. close database connection
    mysqli_close($connection);
?>
