<?php
session_start();
include 'connection.php'; 

 $status = $_GET['result'];
 $id = $_SESSION['ss_id'];

$sql = "UPDATE students SET admin_status='".$status."' WHERE id = '".$id."'";
mysqli_query($conn, $sql);

echo $status;
//print_r($_GET['status']);

?>