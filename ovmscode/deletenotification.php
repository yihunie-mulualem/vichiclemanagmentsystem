<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: notifcation.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM assignvehicle WHERE SID = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'notifcation.php'</script>";
?>