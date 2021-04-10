<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="nav-box">
      <div class="nav">
        <div class="brand">
          <a href="index.php"><h2>USTACKY</h2></a>
          <a href="index.php">Home</a>
        </div>
        <div class="elements">
          <a href="#">Get Started</a>
        </div>
      </div>
    </div>
    <div class="details-box">
      <div class="personal-details">
        <div class="user-box">
          <img src="images/profile.png" alt="detail">
          <h1>John Doe</h1>
          <a href=""><button type="button">undecided</button></a>
        </div>
        <div class="details">
          <div class="title">
            <h1>Personal Information</h1>
          </div>
          <ul>
            <li>Email: john@amadi.com</li>
            <li>Gender: male</li>
            <li>Phone Number: 08130448837</li>
            <li>Date Of Birth: 2021-03-18</li>
            <li>Address: 5, Isheri-olofin Street, Lagos</li>
          </ul>
        </div>
      </div>
      <div class="other-details">
        <div class="title">
          <h1>Other Information</h1>
        </div>
        <div class="user-data">
          <p>State Of Origin: Bayelsa State</p>
          <p>Local Govt: Alimosho</p>
        </div>
      </div>
      <div class="other-details">
        <div class="title">
          <h1>Academics Related Information</h1>
        </div>
        <div class="user-data">
          <p>Next Of Kin: Abigael Adebisi</p>
          <p>Jamb Score: 180</p>
          <p>Status: undecided</p>
          <div class=status-box>
            <p>Change Status:
            <select name="status">
              <option value="volvo">Change-Status</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option>
            </select>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>All rights reserved @Ustacky <?php echo date("Y"); ?></p>
    </div>
  </div>
</body>
</html>