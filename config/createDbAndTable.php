<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_portal";
    
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn){
        die("conncetion error".mysqli_error());
    }else{
        echo "connection ok";
    }

    if (!mysqli_select_db($conn, $dbname)){
        $createDatabase = "CREATE DATABASE IF NOT EXISTS $dbname";
        mysqli_query($conn, $createDatabase);
        mysqli_close($conn);
    }
    

    $checkTable ="SELECT 1 FROM states_locals LIMIT 1";
    if($result = mysqli_query($conn, $checkTable)){
        echo "Table Already Exist";
        if($result && mysqli_num_rows($result) == 0){
            $path = "../lg-states/states-localgovts.json";
            $filePath = fopen($path, "r");
            $data = file_get_contents($path);
            $array = json_decode($data, true);
            $states = $array['states'];
            echo count($states);
            foreach($states as $state){
              $sql = "INSERT INTO states_locals (state,local) VALUES ('".$state['state']."','".serialize($state['local'])."')";
              mysqli_query($conn, $sql);  
            }

            fclose($filePath);
        }
    }else{
        echo "no table yet";
        $createTable = "CREATE TABLE states_locals (
            id int(11) NOT NULL AUTO_INCREMENT,
            state varchar(255) NOT NULL,
            local varchar(255) NOT NULL,
            PRIMARY KEY(id)
        )";

        if(mysqli_query($conn, $createTable)){
            echo "Table Created Successfully";
            $path = "../lg-states/states-localgovts.json";
            $filePath = fopen($path, "r");
            $data = file_get_contents($path);
            $array = json_decode($data, true);
            $states = $array['states'];
            echo count($states);

            foreach($states as $state){
              $sql = "INSERT INTO states_locals (state,local) VALUES ('".$state['state']."','".serialize($state['local'])."')";
              mysqli_query($conn, $sql);  
            }

            fclose($filePath);
        }else{
            echo "Table Creation failed";
        }

        
    }


?>