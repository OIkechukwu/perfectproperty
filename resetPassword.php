<?php
// Define all required variables and set to empty values
$emailErr = $passwordErr = $confirmPasswordErr = " ";
$email = $password = $confirmPassword = " ";

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
    // confirm wheather the password entered by the user is the same as above
    if (empty($_POST["confirmPassword"])){
        $confirmPasswordErr = "Re-enter password";
    }else{
        $confirmPassword === $password = test_input($_SERVER["confirmPassord"]);
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfect Property | Home</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/fontawesome-free-5.10.1-web/css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div id="nav"></div>
    <div class="container py-5">
        <div class="row justify-content-center align-item-center">
            <h4>Reset Password</h4>
        </div>
        <div class="row justify-content-center align-item-center m-auto">
            <div class="col-md-5 login__container p-5">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <div class="form-group">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $email;?>" aria-describedby="email" placeholder="Enter Email Address">
                        <span class="error"><?php echo $emailErr;?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword" 
                        value="<?php echo $password;?>" placeholder="Password">
                        <span class="error"><?php echo $passwordErr;?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputConfirmPassword">Confirm Password</label>
                        <input type="password" name="confirmPassword" value="<?php echo $confirmPassword?>" class="form-control" id="inputConfirmPassword" placeholder="confirmPassword">
                        <span class="error"><?php echo $confirmPasswordErr;?></span>
                    </div>
                    <div class="log d-flex">
                        <button type="submit" class="btn mr-auto" style="background-color:  #5A2F2F; color: #ffffff">Reset Password</button>
                        <p>Go back to <a href="login.php">login</a></p>
                    </div>
                </form>
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