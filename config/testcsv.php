<?php 
require "connection.php";
//   $path = "../lg-states/states-localgovts.json";

//     print_r($path);
//     $filePath = fopen($path, "r");
//              while(!feof($filePath)){
//                  if(!line = fgetcsv($filePath)){
//                      continue;
//                  }

//                  echo "Line inserted";

//              }

  $filename = "../lg-states/states-localgovts.json";
  $data = file_get_contents($filename);
  $array = json_decode($data, true);
  $states = $array['states'];

  $final_states = [];
  $final_lg = [];

  for ($i=0; $i < count($states); $i++) { 
      array_push($final_states, $states[$i]['state']);
      # code...
  }

  for ($i=0; $i < count($states); $i++) { 
    array_push($final_lg, $states[$i]['local']);
    # code...
}

// echo "<pre>";
// print_r($states[3]['local']);
// echo "</pre>";

//echo serialize($states[3]['local']);

// foreach($final_lg as $state){
//   //echo "<pre>";
//   //print_r($final_states);
//   //echo "</pre>";
//   echo "<pre>";
//   print_r($state);
//   echo "</pre>";
// }

// for ($i=0; $i <count($final_lg) ; $i++) {
//   //echo "<pre>";
//  //print_r($final_lg[$i]); # code...
//  echo ($i+1)."<br>";
// }

// echo "<pre>";
// print_r($final_lg);
// echo "</pre>";

// echo "<pre>";
// print_r($final_states[3]);
// echo "</pre>";

// echo "<pre>";
//   print_r($final_lg[3]);
// echo "</pre>";
//   $i = 0;

  $serialized_states = serialize($final_states);
  $serialized_lg = serialize($final_lg);

  // echo "<pre>";
  //   print_r($serialized_states);
  // echo "</pre>";

      // echo "<b>".$i."</b>".". ".$state['state']."<br />";

      //$sql = "INSERT INTO lga (state) VALUES ('".$serialized_states."')";

      

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
          // foreach($final_lg as $local){
          //   //$sql = "INSERT INTO locals(name, state_id) VALUES('".serialize($local)."', '".1."')";
          //   mysqli_query($conn, $sql);  

            
          // }
          for ($i=0; $i <count($final_lg) ; $i++) {
            //echo "<pre>";
           //print_r($final_lg[$i]); # code...
           //echo ($i+1)."<br>";
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