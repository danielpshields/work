<?php
if (!$stripped) {
$holdText =
"Appointment Notes:\r
Name:  First (Nickname) Last\n
Major:  MJR\n
Phone:  000-000-0000\n
UF Email:  address@ufl.edu\n
Status:  Continuing\n
Reason for Appt: Reg question\n
Other: Additional Information\n
";
?>
 <form id="stripText" action="create.php" method="post">
   <textarea name="stripText" rows="8" cols="80" placeholder="<?php echo $holdText; ?>" tabindex="1"></textarea>
   <input type="submit" name="submit" value="pull text" tabindex="2">
 </form>

<?php } //stripped ?>
