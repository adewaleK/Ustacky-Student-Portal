<?php 

require "connection.php";

$sql = mysqli_query($conn,"SELECT 'state' FROM states_locals");
while($row = mysqli_fetch_assoc($sql)){
   
   // Unserialize
   $arr_unserialize1 = $row['state'];
   //$arr_unserialize2 = unserialize($row['local']);
   
   // Display
  
}

echo "<pre>";
print_r($arr_unserialize1);
//echo mysqli_num_rows($arr_unserialize1);
//print_r($arr_unserialize2);
echo "</pre>";

?>