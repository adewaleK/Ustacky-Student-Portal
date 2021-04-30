<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document | Portal</title>
</head>
<body>
    <div class="container1">
    <?php include 'includes/navbar.php'; ?>;
        <form action="config/processForm.php" method="post" enctype="multipart/form-data" id="register-form">
        <div class="form-box">
            <h1>Student Portal Form</h1>
            <p class="instruction">Please fill in all required information</p>
            <div  class="success">
            <?php  if(isset($_GET['correct'])){ ?> 
              <p><?= $_GET['correct'] ?></p>
            <?php  } ?>
          </div>
            <div class="heading">
                <h2>Personal information</h2>
            </div>
            <div class="failure">
                <?php  if(isset($_GET['err_msg'])){ ?> 
                  <p><?= $_GET['err_msg'] ?></p>
                <?php  } ?> 
            </div>
            <div class="input">
                <div class="group">
                    <label for="image">Upload Image:</label>
                    <input type="file" class="first" name="image" id="image">
                </div>
            </div>
            <div class="other-input">
                <div class="group">
                    <label for="fname">FirstName</label>
                    <input type="text" class="first" placeholder="Enter FirstName" name="fname" id="fname">
                </div>
                <div class="group">
                    <label for="mname">MiddleName</label>
                    <input type="text" placeholder="Enter MiddleName" name="mname" id="mname">
                </div>
            </div>
            <div class="other-input">
                <div class="group">
                    <label for="lname">LastName</label>
                    <input type="text" class="first" placeholder="Enter LastName" name="lname" id="lname">
                </div>
                <div class="group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Enter Email Address" name="email" id="email">
                </div>
            </div>
            <div class="other-input1">
                <div class="group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="first" name="dob" id="dob">
                </div>
                <div class="radio-group">
                   
                     <p>Gender</p>
                       <label for="male">Male</label>
                       <input type="radio" id="gender" name="gender" value="male">
                       <label for="female">Female</label>
                       <input type="radio" id="gender" name="gender" value="female">
                   
                </div>
            </div>
            <div class="other-input">
                <div class="group">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="first" placeholder="Enter PhoneNumber" name="phone" id="phone">
                </div>
                <div class="group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" cols="77" rows="4" placeholder="Enter Address">
                    </textarea>
                </div>
            </div>
            <div class="other-input">
                <div class="group">
                    <label for="state">State 0f Origin:</label>
                    <select name="state" id="state" class="first">
                        <option disabled selected value="">Select-State</option>
                        <?php
                          include 'config/connection.php'; 
                          $sql ="SELECT * FROM states";
                          $result = mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_array($result)){
                        ?>
                        <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="group">
                    <label for="lg">Local Government:</label>
                    <select name="local" id="local" > 
                        <option disabled selected value="">Select-Local-Government</option>   
                    </select>
                </div>
            </div>
            <div class="input">
                <div class="group">
                    <label for="next">Next Of Kin</label>
                    <input type="text" class="first" name="next" placeholder="Enter The Name Of Next Of Kin" id="next">
                </div>
            </div>
            <div class="heading">
                <h2>Academics Related Information</h2>
            </div>
            <div class="input">
                <div class="group">
                    <label for="score">Jamb Score</label>
                    <input type="text" class="first" name="score" id="score" placeholder="Enter Jamb Score">
                </div>
            </div>
            <div class="submit">
               <input type="submit" value="Submit" name="submit" id="submit-btn">;
            </div>
        </div>
        </form>
        <?php include 'includes/footer.php'; ?>
    </div>
    <script src="assets/js/jquery.main.js"></script>
    <script src="assets/js/main.js"></script> 
</body>
</html>