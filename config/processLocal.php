<?php 

include 'connection.php'; 
$data = "";
$msg = array();

$fname =""; $lname="";$mname="";$dob="";$gender="";$phone="";
$address="";$state="";$local="";$next="";$score="";

$sql = "SELECT * FROM locals WHERE state_id='".$_POST['stateID']."' ";
$result = mysqli_query($conn, $sql);
$data .= '<option value="" disabled selected >Select-Local-Government</option>';

while($row = mysqli_fetch_array($result)){
    $name_explode = explode(",",$row['name']);  

    echo "<pre>";
    print_r($name_explode);
    
    for($i=0; $i < count($name_explode); $i++) { 
         $data .= '<option value="'.$name_explode[$i].'" >'.$name_explode[$i].'</option>';
    }
    
}

echo $data;

?>
