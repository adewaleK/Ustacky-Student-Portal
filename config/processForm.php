<?php
include 'connection.php'; 
include '../functions/index.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

if( !isset($_FILES['image']) || !isset($_POST['fname']) || !isset($_POST['mname']) || !isset($_POST['lname']) || !isset($_POST['dob']) ||
    !isset($_POST['gender']) || !isset($_POST['phone']) || !isset($_POST['address']) ||!isset($_POST['state'])  ||!isset($_POST['local']) ||
    !isset($_POST['next']) || !isset($_POST['score']) || !isset($_POST['email'])
){
    header("location:../register.php?err_msg=All fields are required");
    return;
}
    
    $fname = refine_input($_POST['fname']);
    $mname = refine_input($_POST['mname']);
    $lname = refine_input($_POST['lname']);
    $dob = refine_input($_POST['dob']);
    $gender = refine_input($_POST['gender']);
    $phone = refine_input($_POST['phone']);
    $address = refine_input($_POST['address']);
    $local = refine_input($_POST['local']);
    $next = refine_input($_POST['next']);
    $score = refine_input($_POST['score']);

    getStates();

    $state = refine_input($state);

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      header("location:../register.php?err_msg=Invalid email format");
      return;
    }

    $email = $_POST['email'];

    $image_path = 'image_uploads/'.$_FILES['image']['name'];

    if(preg_match("!image!", $_FILES['image']['type'])){
        if(copy($_FILES['image']['tmp_name'], $image_path)){
            $sql = "INSERT INTO students (image_path,firstname,middlename,lastname,email,date_of_birth,
            gender,phone_number,address,state_of_origin,local_govt,next_of_kin,jamb_score) VALUES 
            ('$image_path','$fname','$mname','$lname','$email','$dob','$gender','$phone','$address','$state','$local','$next','$score')";
            if(mysqli_query($conn, $sql)){
                header("location:../records.php?correct=Student details have been successfully submitted");
            }
        }

    }else{
        header("location:../register.php?err_msg=Please upload a valid image type! e.g jpg,png and jpec");
    }
}