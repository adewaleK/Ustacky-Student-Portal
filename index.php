<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
        <div class="content">
           <div class="about">
              <h1>Student Main Portal</h1>
              <p>Ustacky Student Portal registration, join us today<br> for your online courses</p>
              <a href="register.php"><button type="button">Get Started</button></a>
           </div>
           <div class="home-img">
              <img src="images/home_img.jpg" alt="image">
           </div>
        </div>
        <div class="footer">
          <p>All rights reserved @Ustacky <?php echo date("Y"); ?></p>
        </div>
    </div>
</body>
</html>