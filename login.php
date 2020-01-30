<?php
// Define all required variables and set to empty values
$emailErr = $passwordErr = " ";
$email = $password = " ";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = test_input($_POST["email"]);
    }
     //check if email is well formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $emailErr = "Invalid email format";
       
    }
    
    if (empty($_POST["password"])){
        $passwordErr = "Password is required";
    }else{
         $password = test_input($_SERVER["password"]);
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfect Property | Login</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/fontawesome-free-5.10.1-web/css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <script>let active = 'active';</script>
</head>
<body>
    <div id="nav"></div>
    <div class="container py-5">
        <div class="row justify-content-center align-content-center;">
            <h4>Login</h4>
        </div>
        <div class="row justify-content-center align-content-center m-auto">
            <div class="col-md-5 login__container p-5">
<<<<<<< HEAD:login.php
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <div class="form-group">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" class="form-control" id="email" value="<?php echo $email;?>" aria-describedby="email" placeholder="Enter Email Address">
=======
                <form method="POST">
                    <div class="form-group">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Email Address" name="email">
>>>>>>> 62e008d3121fd91abfa9eafd00c15ea3c2bfa4a0:login.html
                        <small id="emailHelp" class="form-text text-white">We'll not share your email with anyone else.</small>
                        <span class="error"><?php echo $emailErr;?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
<<<<<<< HEAD:login.php
                        <input type="password" class="form-control" id="inputPassword" 
                        value="<?php echo $password;?>" placeholder="Password">
                        <span class="error"><?php echo $passwordErr;?></span>
=======
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
>>>>>>> 62e008d3121fd91abfa9eafd00c15ea3c2bfa4a0:login.html
                    </div>
                    <button type="submit" class="btn form-control" style="background-color:  #5A2F2F; color: #ffffff" name="login">Login</button>
                </form>
                <h6><a href="resetPassword.php"> Forgot password?</a></h6>
                <p>You don't have an account yet? Click <a href="signUp.php">here</a> to sign up.</p>
            </div>
        </div>
    </div>
    <div id="footer"></div>

    
    <script src="js/nav-and-footer.js"></script>
    <script src="./js/jquery-3.4.1.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="js/routes/routes.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>