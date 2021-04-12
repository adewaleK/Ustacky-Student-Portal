<?php 
    // kc$servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "school_portal";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "students_portal";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("DB connection failed ".mysqli_connect_error());
    }else{
        echo "DB connected again";
    }

?>