<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
      <div class="nav-box">
        <div class="nav">
          <div class="brand">
            <a href="index.php"><h2>USTACKY</h2></a>
            <a href="index.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php')?'active':''; ?>">Home</a>
            <a href="register.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'register.php')?'active':''; ?>">Portal</a>
            <a href="records.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'records.php')?'active':''; ?>">Dashboard</a>
            <a href="records.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'records.php')?'active':''; ?>">Student Information</a>
          </div>
          <div class="elements">
            <a href="index.php">Get Started</a>
          </div>
        </div>
      </div>
      <div class="info">
         <p><span>Info!</span> All students records table</p>
      </div>
      <div class="search-fields">
         <form action="" method="post">
            <div class="name-search">
             <input type="text" placeholder="Search Records By Name Only" name="name_search">
            </div>
            <div class="select-status">
              <select name="admin-status" id="admin-status" class="">
                <option value="volvo">Select-Admission-Status</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
              </select>
            </div>
          
            <div class="select-gender">
              <select name="gender" id="gender" class="">
                <option value="volvo">Select-Gender</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
              </select>
            </div>
            <div class="score-search">
              <input type="text" placeholder="Enter Jamb Score" name="jamb_score">
           </div>
           <div class="search-btn">
             <input type="submit" value="Search" name="search">
           </div>
         </form>
         <div class="students-records">
         <table>
            <tr>
                <th>S/n</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Jamb Score</th>
                <th>Admission Status</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Olashile Abdulquddus</td>
                <td>Male</td>
                <td>280</td>
                <td>Admitted</td>
                <td><a href="userdetails.php"><i class="fa fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Olashile Abdulquddus</td>
                <td>Male</td>
                <td>280</td>
                <td>Admitted</td>
                <td><a href="userdetails.php"><i class="fa fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Olashile Abdulquddus</td>
                <td>Male</td>
                <td>280</td>
                <td>Admitted</td>
                <td><a href="userdetails.php"><i class="fa fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Olashile Abdulquddus</td>
                <td>Male</td>
                <td>280</td>
                <td>Admitted</td>
                <td><a href="userdetails.php"><i class="fa fa-eye"></i></a></td>
            </tr>
        </table>
        </div>
      </div>
      <div class="footer">
        <p>All rights reserved @Ustacky <?php echo date("Y"); ?></p>
      </div>
    </div>
</body>
</html>