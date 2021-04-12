<?php 

  echo "Lets get started";
  function checkIfDbExist(){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "school_portal";
      $conn = mysqli_connect($servername, $username, $password);

      if (!mysqli_select_db($conn, $dbname)){
          $createDatabase = "CREATE DATABASE IF NOT EXISTS $dbname";
          mysqli_query($conn, $createDatabase);
      }
      mysqli_close($conn);
  }

  function checkIfTableExist(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_portal";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $checkTable ="SELECT 1 FROM local_govt_states LIMIT 1";
    if($result = mysqli_query($conn, $checkTable)){

        if($result && mysqli_num_rows($result) == 0){
            //  $path = "../lg-states/states-localgovts.json";
            //  $filePath = fopen($path, "r");
            //  while(!feof($filePath)){
            //      if(!$line = fgetcsv($filePath)){
            //         continue;
            //      }
                 
            //      //$importSQL = "INSERT INTO local_govt_states VALUES ('".$line['']."')"

            //  }
            $path = "../lg-states/states-localgovts.json";
            $filePath = fopen($path, "r");
            $data = file_get_contents($path);
            $array = json_decode($data, true);
            $states = $array['states'];

            foreach($states as $state){
              $sql = "INSERT INTO local_govt_states (state,local) VALUES ('".$state['state']."','".serialize($state['local'])."')";
              mysqli_query($conn, $sql);  
            }

            fclose($filePath);
        }else{
            echo "no table";
            $createTable = "CREATE TABLE local_govt_states (
                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                state varchar(255) NOT NULL,
                local varchar(255) NOT NULL
            )";

            if(mysqli_query($conn, $createTable)){
                $path = "../lg-states/states-localgovts.json";
                $filePath = fopen($path, "r");
                $data = file_get_contents($path);
                $array = json_decode($data, true);
                $states = $array['states'];

                foreach($states as $state){
                $sql = "INSERT INTO local_govt_states (state,local) VALUES ('".$state['state']."','".serialize($state['local'])."')";
                mysqli_query($conn, $sql);  
                echo "Table created and data inserted";
                }

                fclose($filePath);
            }else{
                echo "couldn't create table";
            }
        }
     }
  }

  checkIfDbExist();
  checkIfTableExist();
//   $path = "../lg-states/states-localgovts.json";
//   $data = file_get_contents($path);
//   $array = json_decode($data, true);
//   $states = $array['states'];
//   echo '<pre>';
//    print_r($states[5]['local']);
//   echo '<pre>';
?>