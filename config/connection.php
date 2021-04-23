<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "students_portal";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("DB connection failed ".mysqli_connect_error());
    }
?>