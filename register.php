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
        <div class="form-box">
            <h1>Kindly Fill in your details</h1>
            <form action="records.php" method="post" style="margin: 0 auto">
            <div>
            <input type="text" value="" placeholder="First name..." name="fname">
            <input type="text" value="" placeholder="Last name..." name="lname">
            </div>
            <div>
            <input type="text" value="" placeholder="Email address..." name="email">
            <input type="text" value="" placeholder="Address..." name="address">
            </div>
            <div>
            <input type="submit" value="Submit your details" placeholder="" name="register" style="background-color:red">
            </div>
            </form>
            </div>
    </div>
</body>
</html>