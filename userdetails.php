<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document | Profile</title>
</head>
<body>
  <div class="container">
  <?php include 'includes/navbar.php'; ?>;
    <div class="details-box">
      <div class="personal-details">
        <div class="user-box">

        <?php 
            session_start();
            include 'config/connection.php'; 
            $id = $_GET['user_id'];
            $_SESSION['ss_id'] = $id;
              
            $sql = "SELECT * FROM students WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            $output = '';
              while($row = mysqli_fetch_array($result)){
                $image_path = $row['image_path'];
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $email = $row['email'];
                $gender = $row['gender'];
                $phone = $row['phone_number'];
                $dob = $row['date_of_birth'];
                $address = $row['address'];
                $state = $row['state_of_origin'];
                $local = $row['local_govt'];
                $next = $row['next_of_kin']; 
                $score = $row['jamb_score'];
                $status = $row['admin_status'];
              }

          ?>
          <img src="<?= 'config/'.$image_path; ?>" alt="image" >

          <h1><?= $fname; ?> <?= $lname; ?></h1>
          <a href=""><div type="button" id="ppp"><?= $status; ?></div></a>
        </div>
        <div class="details">
          <div class="title">
            <h1>Personal Information</h1>
          </div>
          <ul>
            <li>Email: <?= $email; ?></li>
            <li>Gender: <?= $gender; ?></li>
            <li>Phone Number: <?= $phone; ?></li>
            <li>Date Of Birth: <?= date("d M Y", strtotime($dob)) ; ?></li>
            <li>Address: <?= $address; ?></li>
          </ul>
        </div>
      </div>
      <div class="other-details">
        <div class="title">
          <h1>Other Information</h1>
        </div>
        <div class="user-data">
          <p>State Of Origin: <?= $state; ?></p>
          <p>Local Govt: <?= $local; ?></p>
        </div>
      </div>
      <div class="other-details">
        <div class="title">
          <h1>Academics Related Information</h1>
        </div>
        <div class="user-data">
          <!-- <div class="next-score"> -->
            <p>Next Of Kin: <?= $next; ?></p>
            <p>Jamb Score: <?= $score; ?></p>
          <!-- </div> -->
        
          <div class="status-box">
            <form action="change_status.php" method="get">
              <span>Status:</span>
              <input type="checkbox" id="update-status" name="status" value="Admitted">
              <label for="update-status">Admitted</label>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php'; ?>
  </div>
  <script src="assets/js/jquery.main.js"></script>
  <script src="assets/js/main.js"></script> 
</body>
</html>