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
    <div class="container1">
        <div class="form-box">
            <h1>Student Portal Form</h1>
            <p class="instruction">Please fill in all required information</p>
            <div class="heading">
                <h2>Personal information</h2>
            </div>
            <div class="input">
                <div class="group">
                    <label for="image">Upload Image:</label>
                    <input type="file" class="first" name="image">
                </div>
            </div>
            <div class="other-input">
                <div class="group">
                    <label for="fname">FirstName</label>
                    <input type="text" class="first" placeholder="Enter FirstName" name="fname">
                </div>
                <div class="group">
                    <label for="mname">MiddleName</label>
                    <input type="text" placeholder="Enter MiddleName" name="mname">
                </div>
            </div>
            <div class="other-input">
                <div class="group">
                    <label for="lname">LastName</label>
                    <input type="text" class="first" placeholder="Enter LastName" name="lname">
                </div>
                <div class="group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Enter Email Address" name="email">
                </div>
            </div>
            <div class="other-input1">
                <div class="group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="first" name="dob">
                </div>
                <div class="radio-group">
                    <label for="male">Male</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="female">Female</label>
                    <input type="radio" id="female" name="gender" value="female">
                </div>
            </div>
            <div class="other-input">
                <div class="group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="first" placeholder="Enter PhoneNumber" name="phone">
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
                    <select name="state" id="cars" class="first">
                        <option value="volvo">Select-State</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="group">
                    <label for="lg">Local Government:</label>
                    <select name="lg" id="lg">
                        <option value="volvo">Select-Local-Government</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
            </div>
            <div class="input">
                <div class="group">
                    <label for="next">Next Of Kin</label>
                    <input type="text" class="first" name="next" placeholder="Enter The Name Of Next Of Kin">
                </div>
            </div>
            <div class="heading">
                <h2>Academics Related Information</h2>
            </div>
            <div class="input">
                <div class="group">
                    <label for="score">Jamb Score</label>
                    <input type="text" class="first" name="score" placeholder="Enter Jamb Score">
                </div>
            </div>
            <div class="submit">
               <input type="submit" value="Submit" name="submit">
            </div>
        </div>
        <div class="footer">
            <p>All rights reserved @Ustacky <?php echo date("Y"); ?></p>
        </div>
    </div>
</body>
</html>