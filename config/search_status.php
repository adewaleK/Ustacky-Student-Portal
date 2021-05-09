<?php
include 'connection.php'; 

$output="";
$x=1;

if(isset($_POST['status'])){
    $status = $_POST['status'];

    $query ="SELECT * FROM students WHERE admin_status = '$status'";
    
}else{
    $query ="SELECT * FROM students";
}

$result = mysqli_query($conn, $query);

if($result->num_rows>0){
    $output = "<tr>
        <th>S/n</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Jamb Score</th>
        <th>Admission Status</th>
        <th>Action</th>
    </tr>";
    while($row = $result->fetch_assoc()){
        
        $output .= "
        <tr>
        <td>".$x."</td>
        <td>".$row['firstname']." ".$row['lastname']." ".$row['middlename']."</td>
        <td>".$row['gender']."</td>          
        <td>".$row['jamb_score']."</td>
        <td>".$row['admin_status']."</td>
        <td><a href='userdetails.php?user_id=".$row['id']."'><i class='fa fa-eye'></i></a></td>  
        </tr>
        ";
        $GLOBALS['x']++;
    }
    echo $output; 
}



//echo $status;