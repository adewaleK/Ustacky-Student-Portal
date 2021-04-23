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

    switch ($_POST['state']) {
        case 1:
          $state = "Abia State";
          break;
        case 2:
          $state = "Adamawa State";
          break;
        case 3:
          $state = "Akwa Ibom State";
          break;
        case 4:
          $state = "Anambra State";
          break;
        case 5:
          $state = "Bauchi State";
          break;
        case 6:
          $state = "Bayelsa State";
          break;
        case 7:
          $state = "Benue State";
          break;
        case 8:
          $state = "Borno State";
          break;
        case 9:
          $state = "Cross River State";
          break;
        case 10:
          $state = "Delta State";
          break;
        case 11:
          $state = "Ebonyi State";
          break;
        case 12:
          $state = "Edo State";
          break;
        case 13:
          $state = "Ekiti State";
          break;
        case 14:
          $state = "Enugu State";
          break;
        case 15:
          $state = "Enugu State";
          break;
        case 16:
          $state = "FCT";
          break;
        case 17:
          $state = "Gombe State";
          break;
        case 18:
          $state = "Imo State";
          break;
        case 19:
          $state = "Jigawa State";
          break;
        case 20:
          $state = "Kaduna State";
          break;
        case 21:
          $state = "Kano State";
          break;
        case 22:
          $state = "katsina State";
          break;
        case 23:
          $state = "Kebbi State";
          break;
        case 24:
          $state = "Kwara State";
          break;
        case 25:
          $state = "Lagos State";
          break;
        case 26:
          $state = "Nasarawa State";
          break;
        case 27:
          $state = "Niger State";
          break;
        case 28:
          $state = "Ogun State";
          break;
        case 29:
          $state = "Ondo State";
          break;
        case 30:
          $state = "Osun State";
          break;
        case 31:
          $state = "Oyo State";
          break;
        case 32:
          $state = "Plateau State";
          break;
        case 33:
          $state = "Rivers State";
          break;
        case 34:
          $state = "Sokoto State";
          break;
        case 35:
          $state = "Taraba State";
          break;
        case 36:
          $state = "Yobe State";
          break;  
        case 37:
          $state = "Zamfara State";
          break;  
        default:
          echo "Invalid";
      }
  
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