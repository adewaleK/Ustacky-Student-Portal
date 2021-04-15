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
      <?php include 'includes/navbar.php'; ?>;
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
                <option value="male">Male</option>
                <option value="female">Female</option>
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
            <!-- <tr>     -->
                <?php   
                  include 'config/connection.php'; 

                  $sql = "SELECT * FROM students";
                  $result = mysqli_query($conn, $sql);

                  //if(mysqli_query($conn, $sql)){
                    while($row = mysqli_fetch_array($result)){
                ?>
                    <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['firstname']; ?> <?= $row['middlename']; ?> <?= $row['lastname']; ?></td>
                    <td><?= $row['gender']; ?></td>          
                    <td><?= $row['jamb_score']; ?></td>
                    <td><?= $row['admin_status']; ?></td>
                    <td><a href="userdetails.php"><i class="fa fa-eye"></i></a></td>  
                    </tr>
               <?php } ?>
            <!-- </tr> -->
        </table>
        </div>
      </div>
      <?php include 'includes/footer.php'; ?>
    </div>
</body>
</html>