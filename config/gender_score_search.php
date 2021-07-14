<?php
include 'connection.php'; 

$output="";
$x=1;
if(isset($_POST['score']) && isset($_POST['gender'])){
    $score = $_POST['score'];
    $gender = $_POST['gender'];

    $query ="SELECT * FROM students WHERE gender='$gender' AND jamb_score='$score'";
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

}else{
    echo "<h3 style='text-align:center'>No records found for this combination of gender and score!</h3>";
}