<?php 
require "connection.php";

$filename = "../lg-states/states-localgovts.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);
$states = $array['states'];

  $final_states = [];
  $final_lg = [];

  for ($i=0; $i < count($states); $i++) { 
      array_push($final_states, $states[$i]['state']);
  }

  for ($i=0; $i < count($states); $i++) { 
    array_push($final_lg, $states[$i]['local']);
  }

  $serialized_states = serialize($final_states);
  $serialized_lg = serialize($final_lg);
      
  $checkTable ="SELECT 1 FROM states LIMIT 1";

      if($result = mysqli_query($conn, $checkTable)){
        if($result && mysqli_num_rows($result) == 0){
          foreach($final_states as $state){
            $sql = "INSERT INTO states(name) VALUES('".$state."')";
            mysqli_query($conn, $sql);  
          }
        }
      }

      $sql ="SELECT 1 FROM locals LIMIT 1";
      if($result = mysqli_query($conn, $sql)){
        if($result && mysqli_num_rows($result) == 0){
          
          for ($i=0; $i <count($final_lg) ; $i++) {
           $sql = "INSERT INTO locals(name, state_id) VALUES('".implode(",",$final_lg[$i])."', '".($i+1)."')";
           if(mysqli_query($conn, $sql)){
             echo "records inserted in DB";
           }else{
             echo "no record inserted";
           }
          }
        }
      }
?>