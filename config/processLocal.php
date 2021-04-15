<?php 

include 'connection.php'; 
$data = "";
$msg = array();

$fname =""; $lname="";$mname="";$dob="";$gender="";$phone="";
$address="";$state="";$local="";$next="";$score="";

$sql = "SELECT * FROM locals WHERE state_id='".$_POST['stateID']."' ";
$result = mysqli_query($conn, $sql);
$data .= '<option value="" disabled selected >Select-Local-Government</option>';

while($row = mysqli_fetch_array($result)){
    $name_explode = explode(",",$row['name']);  

    echo "<pre>";
    print_r($name_explode);
    //$data .= '<option value="'.$row[id].'" >'.$row['name'].'</option>';
    // foreach($name_explode as $local){
    //     $data .= '<option value="'.$row[id].'" >'.$local.'</option>';
    // }

    for($i=0; $i < count($name_explode); $i++) { 
         $data .= '<option value="'.$name_explode[$i].'" >'.$name_explode[$i].'</option>';
    }
    
}

echo $data;

// if(isset($_POST['submit'] )){
//     echo "YEaa we clicked it";
//     echo "<pre>";
//     print_r($_POST);
// }


// if( (isset($_FILES['image']) && !empty($_FILES['image']) &&
//     isset($_POST['fname']) && !empty($_POST['fname']) &&
//     isset($_POST['mname']) && !empty($_POST['mname']) &&
//     isset($_POST['lname']) && !empty($_POST['lname']) &&
//     isset($_POST['dob']) && !empty($_POST['dob']) &&
//     isset($_POST['gender']) && !empty($_POST['gender']) &&
//     isset($_POST['phone']) && !empty($_POST['phone']) &&
//     isset($_POST['address']) && !empty($_POST['address']) &&
//     isset($_POST['state']) && !empty($_POST['state']) &&
//     isset($_POST['local']) && !empty($_POST['local']) &&
//     isset($_POST['next']) && !empty($_POST['next']) &&
//     isset($_POST['score']) && !empty($_POST['score']) &&
//     isset($_POST['email']) && !empty($_POST['email'])

// ){
//    $fname = $_POST['fname'];
//    $mname = $_POST['mname'];
//    $lname = $_POST['lname'];
//    $dob = $_POST['dob'];
//    $gender = $_POST['gender'];
//    $phone = $_POST['phone'];
//    $address = $_POST['address'];
//    $state = $_POST['state'];
//    $local = $_POST['local'];
//    $next = $_POST['next'];
//    $score = $_POST['score'];
//    $email = $_POST['email'];
// // }
  


//   if(isset($_POST['submit'])){
//     $profileImg = $_FILES['image']['name'];


//     $target ='images/'.$profileImg;
//     if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
//       $msg['upload_success'] = 'Image uploaded successfully';
      // $sql = "INSERT INTO students (image_path,firstname,middlename,lastname,email,date_of_birth,
      // gender,phone_number,address,state_of_origin,local_govt,next_of_kin,jamb_score) VALUES 
      // ('$profileImg','$fname','$mname','$lname','$email','$dob','$gender','$phone','$address','$state','$local','$next','$score')";

//       $result = mysqli_query($conn, $sql);
//       if($result){
//         $msg['insert'] = 'student details have been successfully added to the database.';
//         $msg['success'] = 'true';
//       }
  
//     }else{
//       $msg['noupload'] = 'failed to upload image';
//       $msg['noinsert'] = 'student details could not be added!';
//       $msg['failure'] = 'false';
      
//     }
   
//     echo json_decode($msg);

//     echo "<pre>";
//     print_r($_POST);
//   }






?>



