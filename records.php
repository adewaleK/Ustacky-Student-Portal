<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Student Portal | Dashboard</title>
</head>
<body>
    <div class="container table-box">
      <?php include 'includes/navbar.php'; ?>;

      <div class="info">
         <p><span>Info!</span> All students records table</p>
      </div>
      <div class="search-fields">
         <form action="" method="post">
              <div class="name-search">
                <input type="text" placeholder="Search Records By Name Only" name="name_search" id="name_search">
              </div>
              <div class="select-status">
                <select name="admin_status" id="admin_status" >
                  <option value="" selected disabled>Select-Admission-Status</option>
                  <option value="Undecided">Undecided</option>
                  <option value="Admitted">Admitted</option>
                </select>
              </div>
              <div class="select-gender">
                <select name="gender" id="gender" >
                  <option value="" selected disabled>Select-Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="score-search">
                <input type="text" placeholder="Enter Jamb Score" name="jamb_score" id="jamb_score">
            </div>
           <div class="search-btn">
             <input type="submit" name="search" id="search" value="Search">
           </div>
         </form>
         <div class="students-records">
         <table id="students-data">
            <tr>
                <th>S/n</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Jamb Score</th>
                <th>Admission Status</th>
                <th>Action</th>
            </tr>
                <?php   
                  include 'config/connection.php'; 
                  $x=1;
                  // if(isset($_POST['search'])){
                  //   $gender ='';$firstname='';
                  //   $jamb_score =''; $admin_status='';
                  //   $middlename='';$lastname='';
                  //   $id='';                   
                  //     if(isset($_POST['name_search']) || isset($_POST['jamb_score']) ||
                  //     isset($_POST['admin_status']) || isset($_POST['gender'])){

                  //       if(isset($_POST['name_search'])){
                  //         $name = $_POST['name_search'];
                  //       }
                        
                  //       if(isset($_POST['jamb_score'])){
                  //         $jamb_score = $_POST['jamb_score'];
                  //       }
                        
                  //       if(isset($_POST['admin_status'])){
                  //         $admin_status = $_POST['admin_status'];           
                  //       }

                  //       if(isset($_POST['gender'])){
                  //         $gender = $_POST['gender'];
                  //       }
                        
                  //     $sql = "SELECT id,firstname,lastname,middlename,jamb_score, admin_status, gender
                  //     FROM students
                  //     WHERE (id = '$id')
                  //       OR (firstname = '$name')
                  //       OR  (lastname = '$name')
                  //       OR  (middlename = '$name')
                  //       OR (jamb_score = '$jamb_score')
                  //       OR (admin_status = '$admin_status')
                  //       OR (gender = '$gender')
                  //       ";

                  //     }
                  //   }else{
                      $sql = "SELECT * FROM students";
                    //}

                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result)){
                    
                ?>  
                    <?php if(mysqli_num_rows($result) > 0){ 
                      ?>
                      <tr>          
                      <td><?= $x; ?></td>
                      <td><?= $row['firstname']; ?> <?= $row['middlename']; ?> <?= $row['lastname']; ?></td>
                      <td><?= $row['gender']; ?></td>          
                      <td><?= $row['jamb_score']; ?></td>
                      <td><?= $row['admin_status']; ?></td>
                      <td><a href="userdetails.php?user_id=<?= $row['id']; ?>"><i class="fa fa-eye"></i></a></td>  
                      </tr>
                    <?php  $GLOBALS['x']++; }?>
               <?php  } ?>             
            </table>
          </div>
      </div>
      <?php include 'includes/footer.php'; ?>
    </div>
    <script src="assets/js/jquery.main.js"></script>
    <script src="assets/js/main.js"></script> 
</body>
</html>
