<h1><font color="purple">Displaying Total registered User</font></h1>
<?php
include "connection.php";
$query = "SELECT * FROM signup ORDER BY uname";
$query_run = mysqli_query($con,$query);
$row = mysqli_num_rows($query_run);
echo '<h1>'.$row.'</h1>';
?>