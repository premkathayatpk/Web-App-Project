<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <div class="container register">
        <div class="box form-box">
            <header>Sign Up</header>
            <div class="wrapper">
                <form action="" method="post">
                    <div class="field  input">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
                    </div>

                    <div class="field  input">
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lastName" id="lastName" placeholder="Last Name" required>
                    </div>

                    <div class="field  input">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" placeholder="Address " required>
                    </div>

                    <div class="field  input">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" placeholder="Your Country" required>
                    </div>

                    
                    <div class="field  input">
                        <label for="zipcode">Zipcode</label>
                        <input type="text" name="zipcode" id="zipcode" placeholder="Zipcode" required>
                    </div>

                    <div class="field  input ">
                        <label for="gender">Gender</label>
                        <div class="gender">
                            <label for="male" class="radio-inline">
                                <input type="radio" name="gender" id="male" value="m" required>
                                Male
                            </label>
                            <label for="female" class="radio-inline">
                                <input type="radio" name="gender" id="female" value="f" required>
                                Female</label>
                            <label for="other" class="radio-inline">
                                <input type="radio" name="gender" id="other" value="o" required>
                                Others</label>

                        </div>
                    </div>

                    <div class="field  input">
                        <label for="email">Email/Username</label>
                        <input type="email" name="email" id="email" placeholder="Email/Username" required>
                    </div>


                    <div class="field  input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>

                    <div class="field  input">
                        <label for="mobile">Phone Number</label>
                        <input type="number" name="mobile" id="mobile" placeholder="Phone Number" required>
                    </div>

                    <div class="field ">
                        <input type="submit" class="btn" name="submit" value="Singn Up" autocomplete="off" required>
                    </div>

                    <div class="links">
                        Already a member? <a href="login.php">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

<?php  include 'admin/connection.php'  ?>

<?php 
if(isset($_POST['submit'])){
$fname= $_POST['firstName'];
$lname= $_POST['lastName'];
$address= $_POST['address'];
$country= $_POST['country'];
$zipcode= $_POST['zipcode'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$password= $_POST['password'];

$sql= "Insert into customer (firstname,lastname,address,country,zipcode,mobile,email,password) values ('$fname','$lname','$address','$country', '$zipcode','$mobile','$email','$password')  ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
$conn->close();

?>