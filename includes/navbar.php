<div class="nav-box">
  <div class="nav">
    <div class="brand">
      <a href="index.php" id="brand-id"><h2>USTACKY</h2></a>
      <a href="index.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php')?'active':''; ?>">Home</a>
      <a href="register.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'register.php')?'active':''; ?>">Portal</a>
      <a href="records.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'records.php')?'active':''; ?>">Dashboard</a>
      <a href="records.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'records.php')?'active':''; ?>">Student Information</a>
    </div>
    <div class="elements">
      <a href="index.php">Get Started</a>
      <i class="fa fa-bars" aria-hidden="true" id="menu"></i>
      <p id="close">X</p>
    </div>
  </div>
</div>