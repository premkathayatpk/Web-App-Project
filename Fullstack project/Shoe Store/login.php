<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container login">
        <div class="box form-box">
            <h1 class="head">Login</h1>
            <div class="wrapper">
                <form action="" method="post">
                    <div class="field  input">
                        <label for="uname">Email/Username</label>
                        <input type="email" name="uname" id="uname" placeholder="Email/Username" required>
                    </div>



                    <div class="field  input">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" placeholder="Password" required>
                    </div>

                    <div class="field ">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>

                    <div class="links">
                        Don't have account? <a href="register.php">Sign Up Now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php include 'admin/connection.php'?>

<?php
if(isset($_POST['submit'])){
    $uname= $_POST['uname'];
    $password = $_POST['password'];

    $sql= "SELECT *from customer where email='$uname' and password ='$password'";
    
$result = $conn->query($sql);

if($result -> num_rows>0){
    //login success
    echo"success";
    header("Location: index.php");

    exit();
}
else{
    //login fail

   
    header("Location: error.php");

    exit();
}
}



?>