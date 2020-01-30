<?php
// Define all required variables and set to empty values
$firstNameErr = $lastNameErr = $emailErr = $passwordErr = " ";
$firstName = $lastName = $email = $password = " ";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["firstName"])){
        $firstNameErr = "First name is required";
    }else{
    $firstName = test_input($_POST["firstName"]);
    }
    //Check if First name contains only letters and whitespaces
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
    $firstNameErr = "Only letters and white space allowed";
    }

    if (empty($_POST["lastName"])){
        $laststNameErr = "Last name is required";
    }else{
    $lastName = test_input($_POST["lastName"]);
    }
    //Check if Last name contains only letters and whitespaces
    if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
    $lastNameErr = "Only letters and white space allowed";
    }

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
    <title>Perfect Property | Home</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/fontawesome-free-5.10.1-web/css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div id="nav"></div>
    <div class="container py-5 ">
        <div class="row px-5">
            <h4>Sign Up</h4>
        </div>    
        <div class="row signUp">
            <div class="col-md-6 signup__container p-md-5">
                <div class="pt1 h-100 w-100 p-5">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text"  name="firstName" value="<?php echo $firstName;?>" class="form-control" id="inputFirstName" aria-describedby="firtName" placeholder="Enter First Name">
                            <span class="error"><?php echo $firstNameErr;?></span>
                        </div>
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text"  name="lastName" value="<?php echo $lastName;?>" class="form-control" id="inputLastName" aria-describedby="lastName" placeholder="Enter Last Name">
                            <span class="error"><?php echo $lastNameErr;?></span>
                        </div>
                        <div class="form-group">
                            <label for="inputPhoneNumber">Phone Number</label>
                            <input type="tel" class="form-control" id="inputPhoneNumber" aria-describedby="phoneNumber" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email Address</label>
                            <input type="email" name="email" value="<?php echo $email;?>" class="form-control" id="email" aria-describedby="email" placeholder="Enter Email Address">
                            <small id="emailHelp" class="form-text text-white">We'll not share your email with anyone else.</small>
                            <span class="error"><?php echo $emailErr;?></span>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="password" value="<?php echo $password;?>" class="form-control" id="inputPassword" placeholder="Password">
                            <span class="error"><?php echo $passwordErr;?></span>
                        </div>
                        <button type="submit" class="btn" >Sign up</button>
                    </form>
                    <p>You already have an account? Click <a href="login.php">here</a> to log in.</p>
                </div>
            </div>
            <div class="col-md-6 signup__container p-md-5 mt-3 mt-md-0">
                <div class="pt2 h-100 w-100 p-5">
                    <div id="affirm">
                        <h4>Why create an account?</h4>
                    </div>
                    <div>
                        <i class="fa fa-envelope"></i><b> Recieve Email Alerts </b> when new properties are available.
                    </div>
                    <div>
                        <i class="fa fa-star-half-alt"></i><b> Save Favorites</b> to view later.
                    </div>
                    <div>
                        <i class="fa fa-camera"><a href="../post_property.php"></a></i><b> Post A Property</b> feature is available.
                    </div>
                    <div>
                        <i class="fa fa-newspaper"></i><b> Newsletter</b> feature is also available.
                    </div>
                </div>
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